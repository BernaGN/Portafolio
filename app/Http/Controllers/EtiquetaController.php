<?php

namespace App\Http\Controllers;

use App\Models\Etiqueta;
use Illuminate\Http\Request;

/**
 * Class EtiquetaController
 * @package App\Http\Controllers
 */
class EtiquetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Catalogos.etiqueta.index', [
            'etiquetas' => Etiqueta::paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Catalogos.etiqueta.create', [
            'etiqueta' => new Etiqueta(),
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
        Etiqueta::create($request->except('_token'));
        return redirect()->route('etiquetas.index')
            ->with('success', 'Etiqueta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Etiqueta $etiqueta)
    {
        return view('Catalogos.etiqueta.show', [
            'etiqueta' => $etiqueta,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Etiqueta $etiqueta)
    {
        return view('Catalogos.etiqueta.edit', [
            'etiqueta' => $etiqueta,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Etiqueta $etiqueta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etiqueta $etiqueta)
    {
        $etiqueta->update($request->all());
        return redirect()->route('etiquetas.index')
            ->with('success', 'Etiqueta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Etiqueta $etiqueta)
    {
        $etiqueta->delete();
        return back()->with('success', 'Etiqueta deleted successfully');
    }
}
