<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $author->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('biography') ? 'has-error' : ''}}">
    <label for="biography" class="col-md-4 control-label">{{ 'Biography' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="biography" type="textarea" id="biography" >{{ $author->biography or ''}}</textarea>
        {!! $errors->first('biography', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('thumbail') ? 'has-error' : ''}}">
    <label for="thumbail" class="col-md-4 control-label">{{ 'Thumbail' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="thumbail" type="text" id="thumbail" value="{{ $author->thumbail or ''}}" >
        {!! $errors->first('thumbail', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
