@extends('layout')
@section('content')
    <style>
      .content{
        margin-top: 30px;
      }
        .form-group{
            line-height:2;
        }
    </style>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../images/{{$curso->imagen}}" alt="123" width="100%">
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <h2>{{ $curso->nombre }}</h2>
                                </div>
                                <div class="form-group">
                                    <strong>Descripción del Curso</strong>: {{ $curso->descripcion }}
                                </div>
                                <div class="form-group">
                                    <strong>Categoria</strong>
                                    {{ $curso->categoria->nombre }}
                                </div>
                                <div class="form-group">
                                    <strong>Docente</strong>
                                    {{ $curso->docente->nombre }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
