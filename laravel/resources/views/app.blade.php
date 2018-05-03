<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  <script>
    window.Laravel = {
      csrfToken: "{{ csrf_token() }}"
    };
  </script>

</head>
<body>
<h1>Laravel App</h1>

<div id="app">
  <App></App>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
