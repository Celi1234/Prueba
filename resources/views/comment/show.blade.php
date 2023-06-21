@extends('layouts.app')

@section('template_title')
    {{ $comment->name ?? "{{ __('Show') Comment" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Comment</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('comments.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Comment Type:</strong>
                            {{ $comment->comment_type }}
                        </div>
                        <div class="form-group">
                            <strong>Comment Date:</strong>
                            {{ $comment->comment_date }}
                        </div>
                        <div class="form-group">
                            <strong>Id Foods:</strong>
                            {{ $comment->id_foods }}
                        </div>
                        <div class="form-group">
                            <strong>Id Departaments:</strong>
                            {{ $comment->id_departaments }}
                        </div>
                        <div class="form-group">
                            <strong>Id Tourists Destinations:</strong>
                            {{ $comment->id_tourists_destinations }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
