<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Listadeseo;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cursos = Curso::paginate();
        return view('landing', compact('cursos'));
    }

    public function home()
    {
        return view('home');
    }

    public function listaDeseos($idUser)
    {
        if ($idUser) {
            $cursos = User::find($idUser)->listadeseos;
            return view('listaDeseos', compact('cursos'));
        }
        return redirect()->route('home');
    }

    public function addtoDeseos(Request $request)
    {
        request()->validate(Listadeseo::$rules);
        $existe = Listadeseo::where('curso_id', $request->curso_id)->where('user_id', $request->user_id)->get();
        if ($existe->all() == []) {
            $curso = Listadeseo::create($request->all());
            return redirect()->route('landing')
            ->with('success', 'Se añadió a tu lista de favoritos.');
        }else{
            return redirect()->route('landing')
            ->with('success', 'El curso ya pertenece a tu lista de deseos');
        }
    }

    public function removeFromDeseos(Request $request)
    {
        $delete = Listadeseo::where('curso_id', $request->curso_id)->where('user_id', $request->user_id)->delete();
        return redirect()->route('listaDeseos',$request->user_id)
            ->with('success', 'Se eliminó de tu lista de Deseos.');
    }

    public function verCurso($id)
    {
        $curso = Curso::find($id);
        return view('verCurso', compact('curso'));
    }
}
