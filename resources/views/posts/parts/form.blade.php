<div class="form-group">
    <input type="text" class="form-control" name="title" value="{{$post->title ?? ''}}">
</div>
<div class="form-group">
    <textarea rows="10" class="form-control" name="descr">{{$post->descr ?? ''}}</textarea>
</div>
<div class="form-group">
    <input type="file" name="img">
</div>
