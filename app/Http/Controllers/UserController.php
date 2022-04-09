<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:usuarios.index')->only('index');
        $this->middleware('can:usuarios.store')->only('store');
        $this->middleware('can:usuarios.update')->only('edit', 'update');
        $this->middleware('can:usuarios.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('Sistema.usuarios.index', [
            'usuarios' => User::when($request->activo == 1, fn($query) => $query->onlyTrashed())
                ->when($request->activo == null || $request->activo == 0, fn($query) => $query->withTrashed())
                ->with('roles:name')->get(),
            'roles' => Role::select('id', 'name')->get(),
            'buscar' => $request->buscar,
            'activo' => $request->activo,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        if ($request->password != $request->confirmed) {
            return back()->with('warning', 'Las contraseñas no coinciden');
        }

        $user = new User();
        $user->name = $request->name;
        $user->apellido_paterno = $request->apellido_paterno;
        $user->apellido_materno = $request->apellido_materno;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        if ($archivo = $request->file('foto')) {
            $archivo->move('images/fotos', $archivo->getClientOriginalName());
            $user['foto'] = 'images/fotos/' . $archivo->getClientOriginalName();
        }
        $user->save();
        $user->roles()->sync($request->roles);
        return back()->with('success', 'El registro se agrego con exito');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('sistema.usuarios.edit', [
            'usuario' => User::where('id', $id)->with('roles:id')->first(),
            'roles' => Role::select('id', 'name')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'apellido_paterno' => $request->apellido_paterno,
            'apellido_materno' => $request->apellido_materno,
            'password' => bcrypt($request->password),
        ]);
        $user->roles()->sync($request->roles);
        return redirect()->route('usuarios.index')->with('success', 'El registro se modifico con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        User::findOrFail($request->id)->delete();
        return back()->with('success', 'El registro se elimino con exito');
    }

    public function restore($id)
    {
        User::onlyTrashed()->find($id)->restore();
        return back()->with('success', 'El registro se agrego con exito');
    }
}
