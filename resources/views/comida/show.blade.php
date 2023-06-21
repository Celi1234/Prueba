@extends('layouts.app')

@section('template_title')
    {{ $comida->name ?? "{{ __('Show') Comida" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Comida</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comidas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Food Name:</strong>
                            {{ $comida->food_name }}
                        </div>
                        <div class="form-group">
                            <strong>Food Recipe:</strong>
                            {{ $comida->food_recipe }}
                        </div>
                        <div class="form-group">
                            <strong>Ingredient:</strong>
                            {{ $comida->ingredient }}
                        </div>
                        <div class="form-group">
                            <strong>Id Departaments:</strong>
                            {{ $comida->id_departaments }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
