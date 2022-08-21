@extends('layouts.app')

@section('template_title')
    Cursoitem
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cursoitem') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('cursoitems.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Curso Id</th>
										<th>Index</th>
										<th>Titulo</th>
										<th>Urlvideo</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cursoitems as $cursoitem)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $cursoitem->curso_id }}</td>
											<td>{{ $cursoitem->index }}</td>
											<td>{{ $cursoitem->titulo }}</td>
											<td>{{ $cursoitem->urlvideo }}</td>
											<td>{{ $cursoitem->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('cursoitems.destroy',$cursoitem->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('cursoitems.show',$cursoitem->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('cursoitems.edit',$cursoitem->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cursoitems->links() !!}
            </div>
        </div>
    </div>
@endsection
