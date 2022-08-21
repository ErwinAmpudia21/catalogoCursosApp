<?php

namespace App\Http\Controllers;

use App\Models\Cursoitem;
use Illuminate\Http\Request;

/**
 * Class CursoitemController
 * @package App\Http\Controllers
 */
class CursoitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursoitems = Cursoitem::paginate();

        return view('cursoitem.index', compact('cursoitems'))
            ->with('i', (request()->input('page', 1) - 1) * $cursoitems->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cursoitem = new Cursoitem();
        return view('cursoitem.create', compact('cursoitem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cursoitem::$rules);

        $cursoitem = Cursoitem::create($request->all());

        return redirect()->route('cursoitems.index')
            ->with('success', 'Cursoitem created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cursoitem = Cursoitem::find($id);

        return view('cursoitem.show', compact('cursoitem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cursoitem = Cursoitem::find($id);

        return view('cursoitem.edit', compact('cursoitem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cursoitem $cursoitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cursoitem $cursoitem)
    {
        request()->validate(Cursoitem::$rules);

        $cursoitem->update($request->all());

        return redirect()->route('cursoitems.index')
            ->with('success', 'Cursoitem updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cursoitem = Cursoitem::find($id)->delete();

        return redirect()->route('cursoitems.index')
            ->with('success', 'Cursoitem deleted successfully');
    }
}
