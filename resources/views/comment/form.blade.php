<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('comment_type') }}
            {{ Form::text('comment_type', $comment->comment_type, ['class' => 'form-control' . ($errors->has('comment_type') ? ' is-invalid' : ''), 'placeholder' => 'Comment Type']) }}
            {!! $errors->first('comment_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comment_date') }}
            {{ Form::text('comment_date', $comment->comment_date, ['class' => 'form-control' . ($errors->has('comment_date') ? ' is-invalid' : ''), 'placeholder' => 'Comment Date']) }}
            {!! $errors->first('comment_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_foods') }}
            {{ Form::text('id_foods', $comment->id_foods, ['class' => 'form-control' . ($errors->has('id_foods') ? ' is-invalid' : ''), 'placeholder' => 'Id Foods']) }}
            {!! $errors->first('id_foods', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_departaments') }}
            {{ Form::text('id_departaments', $comment->id_departaments, ['class' => 'form-control' . ($errors->has('id_departaments') ? ' is-invalid' : ''), 'placeholder' => 'Id Departaments']) }}
            {!! $errors->first('id_departaments', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_tourists_destinations') }}
            {{ Form::text('id_tourists_destinations', $comment->id_tourists_destinations, ['class' => 'form-control' . ($errors->has('id_tourists_destinations') ? ' is-invalid' : ''), 'placeholder' => 'Id Tourists Destinations']) }}
            {!! $errors->first('id_tourists_destinations', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>