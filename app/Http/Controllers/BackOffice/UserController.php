<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash, DB};
use App\Models\{User, Role};
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{

    public function index()
    {
        if(!Gate::allows('viewAny', User::class)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }
        
        $users = User::with('roles')->paginate(10);
        return view('admin.user.index', compact('users'));
    
    }

    public function create()
    {
        if(!Gate::allows('create', User::class)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }
        $roles = Role::select('id', 'name')->get();
        return view('admin.user.create', compact('roles'));
    }

    public function store(Request $request, User $user){
 
        if(!Gate::allows('create', $user)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }

        $request->validate([
            'name' => 'required|min:3|max:80',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone|digits:9',
            'password' => 'required|min:5|max:40',
            'roles' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ];

        // CREER ET ASSIGNER UN ROLE
        $user->create($data)->roles()->sync($request->roles);
       

        return redirect()->route('admin.users')->with('status', 'Utilisateur ajouté avec succès ! ');
    }

    public function show(User $user)
    {
        // $roles = $user->roles();
        // return view('admin.user.show', compact('roles'));
    }

    public function edit(User $user)
    {
        if(!Gate::allows('edit', $user)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }
        $roles = Role::get();
        return view('admin.user.edit', compact('user','roles'));
    }

    public function update(Request $request, User $user){
        
        if(!Gate::allows('update', $user)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }
        $request->validate([
            'name' => 'required|min:3|max:80',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'phone' => 'required|unique:users,phone|digits:9,'.$user->id, 
            'password' => 'sometimes|max:40,'.$user->id,
            'roles' => 'required',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        if($request->has('password') || !empty($request->has('password'))){
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users')->with('status', 'Utilisateur modifiée avec succès ! ');
    }

    public function destroy(User $user){
        if(!Gate::allows('delete', $user)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }
        $user->delete();
        return redirect()->back()->with('status', 'Utilisateur supprimée avec succès ! ');
    }
}
