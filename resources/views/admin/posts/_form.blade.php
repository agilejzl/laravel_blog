
  <div class="form-group">
    <label class="col-sm-2 control-label">Title</label>
    <div class="col-sm-6">
      <input name="post[title]" type="text" class="form-control" placeholder="Title" value="{{$post->title}}">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Category</label>
    <div class="col-sm-6">
      <input name="category_name" type="text" class="form-control" placeholder="Category" value="@if (!empty($post->category)) {{$post->category->name}} @endif">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Content</label>
    <div class="col-sm-6">
      <textarea name="post[content]" class="form-control" rows="8" placeholder="Content">{{$post->title}}</textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="/admin/posts" class="btn">Cancel</a>
      <button type="submit" class="btn btn-default">Publish</button>
    </div>
  </div>
