<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Main Layout</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

      @include('components.header')
    <div id="app">
        @yield('contenuto-pagina')
    </div>
    @yield('chart')

    <div class="container1">
      @include('components.footer')
    </div>

    @yield('script')

  </body>
</html>
