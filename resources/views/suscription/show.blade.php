@extends('layouts.app')

@section('template_title')
    {{ $suscription->name ?? "{{ __('Show') Suscription" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Suscription</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('suscriptions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Personal Information:</strong>
                            {{ $suscription->personal_information }}
                        </div>
                        <div class="form-group">
                            <strong>Suscription Date:</strong>
                            {{ $suscription->suscription_date }}
                        </div>
                        <div class="form-group">
                            <strong>Payment Type:</strong>
                            {{ $suscription->payment_type }}
                        </div>
                        <div class="form-group">
                            <strong>Card Type:</strong>
                            {{ $suscription->card_type }}
                        </div>
                        <div class="form-group">
                            <strong>Id Foods:</strong>
                            {{ $suscription->id_foods }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
