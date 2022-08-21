<?php

namespace App\Http\Controllers;

use App\Models\Listadeseo;
use Illuminate\Http\Request;

/**
 * Class ListadeseoController
 * @package App\Http\Controllers
 */
class ListadeseoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listadeseos = Listadeseo::paginate();

        return view('listadeseo.index', compact('listadeseos'))
            ->with('i', (request()->input('page', 1) - 1) * $listadeseos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listadeseo = new Listadeseo();
        return view('listadeseo.create', compact('listadeseo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Listadeseo::$rules);

        $listadeseo = Listadeseo::create($request->all());

        return redirect()->route('listadeseos.index')
            ->with('success', 'Listadeseo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listadeseo = Listadeseo::find($id);

        return view('listadeseo.show', compact('listadeseo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listadeseo = Listadeseo::find($id);

        return view('listadeseo.edit', compact('listadeseo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Listadeseo $listadeseo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listadeseo $listadeseo)
    {
        request()->validate(Listadeseo::$rules);

        $listadeseo->update($request->all());

        return redirect()->route('listadeseos.index')
            ->with('success', 'Listadeseo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $listadeseo = Listadeseo::find($id)->delete();

        return redirect()->route('listadeseos.index')
            ->with('success', 'Listadeseo deleted successfully');
    }
}
