@extends('layouts.admin')

@section('content')
  <div class="newer_content">
    <div class="newer_blogs">
    @foreach ($posts as $post)
      @include('admin.posts._post')
    @endforeach
    </div>
  </div>
@endsection

