@extends('layouts.admin')

@section('content')
  Edit profile
  <form id="useEditForm" class="form-horizontal" action="/user/{{session('user')['name']}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="put" />

    <div class="form-group">
      <label class="col-sm-2 control-label">Avatar</label>
      <div class="col-sm-6">
        <input type="file" name="user_avatar">
      </div>
    </div>

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <a href="/admin/posts" class="btn">Cancel</a>
        <button type="submit" class="btn btn-default">Publish</button>
      </div>
    </div>
  </form>

@endsection
