
<form id="postForm" class="form-horizontal" action="/admin/posts" method="post">
  {{ csrf_field() }}
  <div class="form-group">
    <label class="col-sm-2 control-label">Title</label>
    <div class="col-sm-6">
      <input name="post[title]" type="text" class="form-control" placeholder="Title">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Category</label>
    <div class="col-sm-6">
      <input name="category_name" type="text" class="form-control" placeholder="Category">
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Content</label>
    <div class="col-sm-6">
      <textarea name="post[content]" class="form-control" rows="8" placeholder="Content"></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="/admin/posts" class="btn">Cancel</a>
      <button type="submit" class="btn btn-default">Publish</button>
    </div>
  </div>
</form>