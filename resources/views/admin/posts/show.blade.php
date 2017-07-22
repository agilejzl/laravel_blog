
@extends('layouts.admin')

@section('content')
  @include('admin.posts._post')
  <br/>
  <a href="/admin/posts">Back to list</a>
@endsection
