@extends('layouts.app')

@section('template_title')
    {{ $curso->name ?? 'Show Curso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                Ver Curso
                            </span>
                            <div class="float-right">
                                <a href="{{ route('cursos.index') }}" class="btn btn-danger btn-sm float-right"  data-placement="left">
                                    Volver
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $curso->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $curso->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $curso->categoria->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Docente:</strong>
                            {{ $curso->docente->nombre }}
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../images/{{$curso->imagen}}" alt="{{$curso->nombre}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
