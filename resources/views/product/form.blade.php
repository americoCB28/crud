<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $product->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('UserID') }}
            {{ Form::text('UserID', $product->UserID, ['class' => 'form-control' . ($errors->has('UserID') ? ' is-invalid' : ''), 'placeholder' => 'Userid']) }}
            {!! $errors->first('UserID', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('URL') }}
            {{ Form::text('URL', $product->URL, ['class' => 'form-control' . ($errors->has('URL') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('URL', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Portada') }}
            {{ Form::text('Portada', $product->Portada, ['class' => 'form-control' . ($errors->has('Portada') ? ' is-invalid' : ''), 'placeholder' => 'Portada']) }}
            {!! $errors->first('Portada', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>