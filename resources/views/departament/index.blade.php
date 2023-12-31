@extends('layouts.app')

@section('template_title')
    Departament
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Departament') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('departaments.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Departament Name</th>
										<th>Departament Info</th>
										<th>Departament Image</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($departaments as $departament)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $departament->departament_name }}</td>
											<td>{{ $departament->departament_info }}</td>
											<td>{{ $departament->departament_image }}</td>

                                            <td>
                                                <form action="{{ route('departaments.destroy',$departament->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('departaments.show',$departament->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('departaments.edit',$departament->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $departaments->links() !!}
            </div>
        </div>
    </div>
@endsection
