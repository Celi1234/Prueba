@extends('layouts.app')

@section('template_title')
    {{ $departament->name ?? "{{ __('Show') Departament" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Departament</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('departaments.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Departament Name:</strong>
                            {{ $departament->departament_name }}
                        </div>
                        <div class="form-group">
                            <strong>Departament Info:</strong>
                            {{ $departament->departament_info }}
                        </div>
                        <div class="form-group">
                            <strong>Departament Image:</strong>
                            {{ $departament->departament_image }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
