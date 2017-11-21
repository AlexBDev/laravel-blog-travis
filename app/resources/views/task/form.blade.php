<div class="form-group {{ $errors->has('content') ? 'has-error' : ''}}">
    <label for="content" class="col-md-4 control-label">{{ 'Content' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="content" type="textarea" id="content" >{{ $task->content or ''}}</textarea>
        {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('is_done') ? 'has-error' : ''}}">
    <label for="is_done" class="col-md-4 control-label">{{ 'Is Done' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="is_done" type="radio" value="1" {{ (isset($task) && 1 == $task->is_done) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="is_done" type="radio" value="0" @if (isset($task)) {{ (0 == $task->is_done) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('is_done', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
