@extends('layouts.app')

@section('template_title')
    {{ $touristsDestination->name ?? "{{ __('Show') Tourists Destination" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tourists Destination</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tourists-destinations.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Destination:</strong>
                            {{ $touristsDestination->name_destination }}
                        </div>
                        <div class="form-group">
                            <strong>Ubication:</strong>
                            {{ $touristsDestination->ubication }}
                        </div>
                        <div class="form-group">
                            <strong>Location History:</strong>
                            {{ $touristsDestination->location_history }}
                        </div>
                        <div class="form-group">
                            <strong>Id Departaments:</strong>
                            {{ $touristsDestination->id_departaments }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
