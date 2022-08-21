@extends('layouts.app')

@section('template_title')
    {{ $cursoitem->name ?? 'Show Cursoitem' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cursoitem</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cursoitems.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Curso Id:</strong>
                            {{ $cursoitem->curso_id }}
                        </div>
                        <div class="form-group">
                            <strong>Index:</strong>
                            {{ $cursoitem->index }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $cursoitem->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Urlvideo:</strong>
                            {{ $cursoitem->urlvideo }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $cursoitem->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
