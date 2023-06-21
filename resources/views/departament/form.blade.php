<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('departament_name') }}
            {{ Form::text('departament_name', $departament->departament_name, ['class' => 'form-control' . ($errors->has('departament_name') ? ' is-invalid' : ''), 'placeholder' => 'Departament Name']) }}
            {!! $errors->first('departament_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departament_info') }}
            {{ Form::text('departament_info', $departament->departament_info, ['class' => 'form-control' . ($errors->has('departament_info') ? ' is-invalid' : ''), 'placeholder' => 'Departament Info']) }}
            {!! $errors->first('departament_info', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('departament_image') }}
            {{ Form::text('departament_image', $departament->departament_image, ['class' => 'form-control' . ($errors->has('departament_image') ? ' is-invalid' : ''), 'placeholder' => 'Departament Image']) }}
            {!! $errors->first('departament_image', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>