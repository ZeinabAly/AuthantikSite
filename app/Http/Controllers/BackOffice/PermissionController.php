<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Permission;

class PermissionController extends Controller
{

    public function index()
    {
        if(!Gate::allows('viewAny', Permission::class)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }
        $permissions = Permission::paginate(10);
        return view('admin.permission.index', compact('permissions'));
    }

    public function create(Permission $permission)
    {
        if(!Gate::allows('create', $permission)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }
        return view('admin.permission.create');
    }

    public function store(Request $request, Permission $permission)
    {
        if(!Gate::allows('create', $permission)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }
        
        $request->validate([
            'name' => 'required'
        ]);

        $data = ['name' => $request->name];

        $permission->create($data);
        return redirect()->back()->with('status', 'Permission créée avec succès');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Permission $permission)
    {
        if(!Gate::allows('create', $permission)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }
        return view('admin.permission.edit');
    }

    public function update(Request $request, Permission $permission)
    {
        if(!Gate::allows('create', $permission)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }

        $request->validate([
            'name' => 'required'
        ]);

        $data = ['name' => $request->name];

        $permission->update($data);
        return redirect()->back()->with('status', 'Permission modifiée avec succès');
    }

    public function destroy(Permission $permission)
    {
        if(!Gate::allows('create', $permission)){
            abort(403, 'Vous n\'êtes pas autorisé à effectuer cette action.');
        }

        $permission->delete();
        return redirect()->back()->with('status', 'Permission supprimée avec succès');
    }
}
