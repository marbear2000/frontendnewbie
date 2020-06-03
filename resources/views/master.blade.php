<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Frontend Projects</title>

      <title>{{ $metaTitle}}</title>

      <link rel="icon" href="{{ asset('/favicon-32x32.png') }}" type="image/png" sizes="32x32">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;500;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@300;600;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">



      <meta name="description" content="Many many frontend projects">

      <link href="{{ mix('css/app.css') }}" rel="stylesheet">


    </head>
    <body>

      <div id="app">
        @yield('content')
      </div>

      <!-- Scripts -->

      <script src="{{ mix('js/app.js') }}"></script>


        @yield('custom-scripts')
        @yield('intro-scripts')

    </body>
</html>
