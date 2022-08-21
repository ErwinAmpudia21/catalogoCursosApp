@extends('layouts.app')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="card card-default">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                Nueva Categoría
                            </span>
                            <div class="float-right">
                                <a href="{{ route('categorias.index') }}" class="btn btn-danger btn-sm float-right"  data-placement="left">
                                    Volver
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('categorias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            @include('categoria.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
