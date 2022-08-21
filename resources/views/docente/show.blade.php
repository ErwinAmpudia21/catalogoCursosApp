@extends('layouts.app')

@section('template_title')
    {{ $docente->name ?? 'Show Docente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                Ver Docente
                            </span>
                            <div class="float-right">
                                <a href="{{ route('docentes.index') }}" class="btn btn-danger btn-sm float-right"  data-placement="left">
                                    Volver
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $docente->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $docente->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $docente->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
