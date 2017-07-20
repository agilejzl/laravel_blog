@extends('layouts.app')

@section('content')
  <div class="row newer_content">
    <div class="newer_blogs">
    @foreach ($posts as $post)
      @include('posts._post')
    @endforeach
    </div>
  </div>
  <p>Hello, {{ $posts }}</p>
@endsection

