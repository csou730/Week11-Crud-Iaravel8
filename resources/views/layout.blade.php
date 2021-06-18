<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel 8 CRUD </title>
  <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" /> -->

  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
  <h4> Welcome to Laravel 8 With CRUD </h4>
  <p> </p>
    @yield('content')
  </div>
  <script src="{{ asset('assets/js/main.js') }}" type="text/js"></script>
</body>
</html>