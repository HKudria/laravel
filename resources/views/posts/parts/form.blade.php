<div class="form-group">
    <input type="text" class="form-control" name="title" value="{{old('title') ?? $post->title ?? ''}}">
</div>
<div class="form-group">
    <textarea rows="10" class="form-control" name="descr">{{old('descr') ?? $post->descr ?? ''}}</textarea>
</div>
<div class="form-group">
    <input type="file" name="img">
</div>
