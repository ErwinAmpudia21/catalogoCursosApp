@extends('layout')

@section('content')
    <!-- Page Content -->
    <link rel="stylesheet" type="text/css" href="https://assets.jumpseller.com/store/bootstrap/themes/382017/component_slider.css?1619113824">
    <link rel="stylesheet" type="text/css" href="https://assets.jumpseller.com/store/bootstrap/themes/382017/component_instagram.css?1619113824">
    <link rel="stylesheet" type="text/css" href="https://assets.jumpseller.com/store/bootstrap/themes/382017/component_testimonials.css?1619113824">
    <div id="components">
        <div id="component-76145">
            <div id="featured-products-76145" class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="page-header">Todos los Cursos</h2>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @foreach ($cursos as $curso)
                    <div class="col-md-3 col-6 product-block">
                        <div class="product-card">
                            <a href="{{ route('verCurso',$curso->id) }}">
                                <img class="img-fluid img-portfolio img-hover mb-3" src="images/{{$curso->imagen}}"  alt="{{$curso->nombre}}">
                            </a>
                            <form method="POST" action="{{ route('addtoDeseos') }}"  role="form" enctype="multipart/form-data">
                                @csrf
                                {{ Form::text('user_id', Auth::user() ? Auth::user()->id : '0', ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'hidden' => 'true']) }}
                                {{ Form::text('curso_id', $curso->id, ['class' => 'form-control' . ($errors->has('usuario') ? ' is-invalid' : ''), 'hidden' => 'true']) }}
                                <button class="btn-primary btn-sm" type="submit">
                                    Añadir a Lista de Deseos
                                </button>
                            </form>
                            <div >
                                <h5 class="text-center title"><a href="{{ route('verCurso',$curso->id) }}">{{ $curso->nombre }}</a></h5>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><!-- /.row -->
            </div>
        </div>
    </div>
    <style>
        .product-block {
            padding: 20px;
        }
        .product-card {
            border: 1px solid #0D84FD;
            padding: 5px;
            border-radius: 10px;
        }
        .fav-btn{
            margin-left: 15px;
        }
        .title{
            margin: 10px 0;
            font-size:15px;
        }
        img{
            display: block;
            margin: 0 auto;
            height: 200px !important;
            width: auto;
        }
    </style>
@endsection