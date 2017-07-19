
<html>
  <head>
    <title>Laravel Blog - @yield('title')</title>
    <meta charset="utf-8">

    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
  </head>

  <body>
    @include('shared._header')

    <div class="container body-container">
      @yield('content')
    </div>

    @include('shared._footer')
  </body>
</html>
