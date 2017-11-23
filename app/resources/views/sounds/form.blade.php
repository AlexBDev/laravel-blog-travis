<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    <label for="title" class="col-md-4 control-label">{{ 'Title' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="title" type="text" id="title" value="{{ $sound->title or ''}}" required>
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="col-md-4 control-label">{{ 'Description' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ $sound->description or ''}}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="col-md-4 control-label">{{ 'Category' }}</label>
    <div class="col-md-6">
        <select name="category" class="form-control" id="category" >
    @foreach (json_decode('{"pop":"Pop","rock":"Rock","reggae":"Reggae","rap":"Rap","yoga":"Yoga","classic":"Classic"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($sound->category) && $sound->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('author_id') ? 'has-error' : ''}}">
    <label for="author_id" class="col-md-4 control-label">{{ 'Author Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="author_id" type="number" id="author_id" value="{{ $sound->author_id or ''}}" >
        {!! $errors->first('author_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('thumbail') ? 'has-error' : ''}}">
    <label for="thumbail" class="col-md-4 control-label">{{ 'Thumbail' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="thumbail" type="text" id="thumbail" value="{{ $sound->thumbail or ''}}" >
        {!! $errors->first('thumbail', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
