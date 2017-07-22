
<html>
  <head>
    <title>Admin Blog - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/css/app.css">
  </head>

  <body>
    @include('shared._header')

    <div class="container main-container">
      @include('shared._flash')

      @yield('content')
    </div>

    @include('shared._footer')

    <script type="text/javascript" src="/js/app.js"></script>
  </body>
</html>
