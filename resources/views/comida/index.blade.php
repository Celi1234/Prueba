@extends('layouts.app')

@section('template_title')
    Comida
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Comida') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('comidas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Food Name</th>
										<th>Food Recipe</th>
										<th>Ingredient</th>
										<th>Id Departaments</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($comidas as $comida)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $comida->food_name }}</td>
											<td>{{ $comida->food_recipe }}</td>
											<td>{{ $comida->ingredient }}</td>
											<td>{{ $comida->id_departaments }}</td>

                                            <td>
                                                <form action="{{ route('comidas.destroy',$comida->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('comidas.show',$comida->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('comidas.edit',$comida->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $comidas->links() !!}
            </div>
        </div>
    </div>
@endsection
