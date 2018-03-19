@extends('layouts.admin')

@section('content')
  Edit post
  <form id="postEditForm" class="form-horizontal" action="/admin/posts/{{$post->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="put" />
    @include('admin.posts._form', ['post' => $post])
  </form>
@endsection

