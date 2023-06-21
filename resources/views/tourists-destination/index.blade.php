@extends('layouts.app')

@section('template_title')
    Tourists Destination
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tourists Destination') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tourists-destinations.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name Destination</th>
										<th>Ubication</th>
										<th>Location History</th>
										<th>Id Departaments</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($touristsDestinations as $touristsDestination)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $touristsDestination->name_destination }}</td>
											<td>{{ $touristsDestination->ubication }}</td>
											<td>{{ $touristsDestination->location_history }}</td>
											<td>{{ $touristsDestination->id_departaments }}</td>

                                            <td>
                                                <form action="{{ route('tourists-destinations.destroy',$touristsDestination->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tourists-destinations.show',$touristsDestination->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tourists-destinations.edit',$touristsDestination->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $touristsDestinations->links() !!}
            </div>
        </div>
    </div>
@endsection
