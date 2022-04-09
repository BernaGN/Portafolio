<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:roles.index')->only('index');
        $this->middleware('can:roles.store')->only('store');
        $this->middleware('can:roles.update')->only('edit', 'update');
        $this->middleware('can:roles.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sistema.roles.index', [
            'roles' => Role::select('id', 'name')->orderBy('id')->get(),
            'permisos' => Permission::select('id', 'name', 'description')->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $role = Role::create(['name' => $request->name]);
        $role->permissions()->sync($request->permissions);
        return redirect()->route('roles.index')->with('agregar', 'El registro se agrego con exito');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('sistema.roles.edit', [
            'role' => Role::where('id', $id)->select('id', 'name')->first(),
            'permisos' => Permission::select('id', 'name', 'description')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->update($request->all());
        $role->permissions()->sync($request->permissions);
        return redirect()->route('roles.index')->with('modificar', 'El registro se modifico con exito');
    }
}
