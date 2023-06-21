<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('food_name') }}
            {{ Form::text('food_name', $comida->food_name, ['class' => 'form-control' . ($errors->has('food_name') ? ' is-invalid' : ''), 'placeholder' => 'Food Name']) }}
            {!! $errors->first('food_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('food_recipe') }}
            {{ Form::text('food_recipe', $comida->food_recipe, ['class' => 'form-control' . ($errors->has('food_recipe') ? ' is-invalid' : ''), 'placeholder' => 'Food Recipe']) }}
            {!! $errors->first('food_recipe', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ingredient') }}
            {{ Form::text('ingredient', $comida->ingredient, ['class' => 'form-control' . ($errors->has('ingredient') ? ' is-invalid' : ''), 'placeholder' => 'Ingredient']) }}
            {!! $errors->first('ingredient', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_departaments') }}
            {{ Form::text('id_departaments', $comida->id_departaments, ['class' => 'form-control' . ($errors->has('id_departaments') ? ' is-invalid' : ''), 'placeholder' => 'Id Departaments']) }}
            {!! $errors->first('id_departaments', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>