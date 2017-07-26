@extends('layouts.admin')

@section('content')
  Publish post
  <form id="createForm" class="form-horizontal" action="/admin/posts" method="post">
    {{ csrf_field() }}
    @include('admin.posts._form')
  </form>
@endsection

