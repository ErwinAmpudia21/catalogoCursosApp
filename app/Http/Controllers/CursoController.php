<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Curso;
use App\Models\Docente;
use Illuminate\Http\Request;

/**
 * Class CursoController
 * @package App\Http\Controllers
 */
class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::paginate();

        return view('curso.index', compact('cursos'))
            ->with('i', (request()->input('page', 1) - 1) * $cursos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::pluck('nombre', 'id');
        $docentes = Docente::pluck('nombre', 'id');
        $curso = new Curso();
        return view('curso.create', compact('curso', 'categorias', 'docentes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curso = $request->all();
        request()->validate(Curso::$rules);
        if ($request->imagen){
            $nombre = $request->imagen->getClientOriginalName();
            $request->imagen->move('images', $nombre);
            $curso['imagen'] = $nombre;
        }
        $curso = Curso::create($curso);
        return redirect()->route('cursos.index')
            ->with('success', 'Curso created successfully.');
    }

    public function show($id)
    {
        $curso = Curso::find($id);
        return view('curso.show', compact('curso'));
    }

    public function edit($id)
    {
        $categorias = Categoria::pluck('nombre', 'id');
        $docentes = Docente::pluck('nombre', 'id');
        $curso = Curso::find($id);
        return view('curso.edit', compact('curso', 'categorias','docentes'));
    }

    public function update(Request $request, Curso $curso)
    {
        $cursoEdit = $request->all();
        request()->validate(Curso::$rules);
        if ($request->imagen){
            $nombre = $request->imagen->getClientOriginalName();
            $request->imagen->move('images', $nombre);
            $cursoEdit['imagen'] = $nombre;
        }

        $curso->update($cursoEdit);
        return redirect()->route('cursos.index')
            ->with('success', 'Curso updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $curso = Curso::find($id)->delete();

        return redirect()->route('cursos.index')
            ->with('success', 'Curso deleted successfully');
    }
}
