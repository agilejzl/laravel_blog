@extends('layouts.admin')

@section('content')
  <div class="btn-group pull-right" role="group">
    <a href="/admin/posts/create" type="button" class="btn btn-default">New Post</a>
  </div>

  <div class="newer_content">
    <div class="newer_blogs">
    @foreach ($posts as $post)
      @include('admin.posts._post')
    @endforeach
    </div>
  </div>
@endsection

