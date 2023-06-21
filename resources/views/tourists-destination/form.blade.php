<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_destination') }}
            {{ Form::text('name_destination', $touristsDestination->name_destination, ['class' => 'form-control' . ($errors->has('name_destination') ? ' is-invalid' : ''), 'placeholder' => 'Name Destination']) }}
            {!! $errors->first('name_destination', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubication') }}
            {{ Form::text('ubication', $touristsDestination->ubication, ['class' => 'form-control' . ($errors->has('ubication') ? ' is-invalid' : ''), 'placeholder' => 'Ubication']) }}
            {!! $errors->first('ubication', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('location_history') }}
            {{ Form::text('location_history', $touristsDestination->location_history, ['class' => 'form-control' . ($errors->has('location_history') ? ' is-invalid' : ''), 'placeholder' => 'Location History']) }}
            {!! $errors->first('location_history', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_departaments') }}
            {{ Form::text('id_departaments', $touristsDestination->id_departaments, ['class' => 'form-control' . ($errors->has('id_departaments') ? ' is-invalid' : ''), 'placeholder' => 'Id Departaments']) }}
            {!! $errors->first('id_departaments', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>