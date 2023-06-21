<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('personal_information') }}
            {{ Form::text('personal_information', $suscription->personal_information, ['class' => 'form-control' . ($errors->has('personal_information') ? ' is-invalid' : ''), 'placeholder' => 'Personal Information']) }}
            {!! $errors->first('personal_information', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('suscription_date') }}
            {{ Form::text('suscription_date', $suscription->suscription_date, ['class' => 'form-control' . ($errors->has('suscription_date') ? ' is-invalid' : ''), 'placeholder' => 'Suscription Date']) }}
            {!! $errors->first('suscription_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('payment_type') }}
            {{ Form::text('payment_type', $suscription->payment_type, ['class' => 'form-control' . ($errors->has('payment_type') ? ' is-invalid' : ''), 'placeholder' => 'Payment Type']) }}
            {!! $errors->first('payment_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('card_type') }}
            {{ Form::text('card_type', $suscription->card_type, ['class' => 'form-control' . ($errors->has('card_type') ? ' is-invalid' : ''), 'placeholder' => 'Card Type']) }}
            {!! $errors->first('card_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_foods') }}
            {{ Form::text('id_foods', $suscription->id_foods, ['class' => 'form-control' . ($errors->has('id_foods') ? ' is-invalid' : ''), 'placeholder' => 'Id Foods']) }}
            {!! $errors->first('id_foods', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>