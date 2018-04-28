<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <title>WhichIsBetter?</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>
<div id="app"></div>
<script src=" {{ mix('js/main.js') }} "></script>
</body>
</html>
