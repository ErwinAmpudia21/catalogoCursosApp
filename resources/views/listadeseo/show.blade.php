@extends('layouts.app')

@section('template_title')
    {{ $listadeseo->name ?? 'Show Listadeseo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Listadeseo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('listadeseos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Curso Id:</strong>
                            {{ $listadeseo->curso_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $listadeseo->user_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
