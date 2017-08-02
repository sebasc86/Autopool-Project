<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>autopool - Comparte tu viaje</title>

    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/paleta.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Open+Sans" rel="stylesheet">
    <script src="https://use.fontawesome.com/d83e440824.js"></script>
    <link rel="icon"
      type="images/ico"
      href="images/favicon_autopool_16x16.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>

    @include('_header')

    @yield('content')

    @yield('form')

    @include('_footer')

    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>

  </body>

</html>
