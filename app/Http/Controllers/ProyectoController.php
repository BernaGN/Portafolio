<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Proyecto;
use Illuminate\Http\Request;

/**
 * Class ProyectoController
 * @package App\Http\Controllers
 */
class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Procesos.proyecto.index', [
            'proyectos' => Proyecto::with('cliente:id,nombre')->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Procesos.proyecto.create', [
            'proyecto' => new Proyecto(),
            'cliente' => Cliente::pluck('nombre', 'id'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Proyecto::create($request->all());
        return redirect()->route('proyectos.index')
            ->with('success', 'El registro fue agregado con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyecto)
    {
        return view('Procesos.proyecto.show', [
            'proyecto' => $proyecto,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyecto $proyecto)
    {
        return view('Procesos.proyecto.edit', [
            'proyecto' => $proyecto,
            'cliente' => Cliente::pluck('nombre', 'id'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Proyecto $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        $proyecto->update($request->all());
        return redirect()->route('proyectos.index')
            ->with('success', 'El registro fue modificado con exito.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return back()->with('success', 'El registro fue elimino con exito.');
    }
}
