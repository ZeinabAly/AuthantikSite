<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\{Role, Permission};


class RoleController extends Controller
{

    public function index()
    {
        if(!Gate::allows('viewAny', Role::class)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }
        $roles = Role::paginate(10);
        return view('admin.role.index', compact('roles'));
    }

    public function create(Role $role)
    {
        if(!Gate::allows('create', $role)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }
        $permissions = Permission::get();
        return view('admin.role.create', compact('permissions'));
    }

    public function store(Request $request, Role $role)
    {
        if(!Gate::allows('create', $role)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }
        
        $request->validate([
            'name' => 'required',
            'permissions' => 'required',
        ]);
        $permissions = $request->permissions;

        $data = ['name' => $request->name];

        $role->create($data)->permissions()->attach($permissions);
        
        return redirect()->back()->with('status', 'Role créé avec succès');
    }

    public function show(Role $role)
    {
        // $this->authorize('view', $role);

    }

    public function edit(Role $role)
    {

        if(!Gate::allows('edit', $role)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }

        $permissions = Permission::get();
        return view('admin.role.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, Role $role)
    {
   
        if(!Gate::allows('update', $role)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }

        $request->validate([
            'name' => 'required',
            'permissions' => 'required',
        ]);

        $permissions = $request->permissions;

        // dd($request->permissions);
        $data = ['name' => $request->name];

        $role->update($data);
        $role->permissions()->sync($permissions);

        return redirect()->back()->with('status', 'Role modifié avec succès');
    }

    public function destroy(Role $role)
    {
        if(!Gate::allows('delete', $role)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }

        $role->delete();
        return redirect()->back()->with('status', 'Role supprimé avec succès');
    }

    public function assignPermission(Request $request, Role $role){
        
        $request->validate([
            'role' => 'required',
            'permissions' => 'required'
        ]);

        // $role = Role::findOrFail($request->role);
        $permissions = $request->permissions;

        $role->permissions()->attach($permissions);

    }

}
