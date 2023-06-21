@extends('layouts.app')

@section('template_title')
    Suscription
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Suscription') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('suscriptions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Personal Information</th>
										<th>Suscription Date</th>
										<th>Payment Type</th>
										<th>Card Type</th>
										<th>Id Foods</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suscriptions as $suscription)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $suscription->personal_information }}</td>
											<td>{{ $suscription->suscription_date }}</td>
											<td>{{ $suscription->payment_type }}</td>
											<td>{{ $suscription->card_type }}</td>
											<td>{{ $suscription->id_foods }}</td>

                                            <td>
                                                <form action="{{ route('suscriptions.destroy',$suscription->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('suscriptions.show',$suscription->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('suscriptions.edit',$suscription->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $suscriptions->links() !!}
            </div>
        </div>
    </div>
@endsection
