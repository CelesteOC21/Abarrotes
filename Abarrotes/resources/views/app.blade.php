<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
</head>

<body>
  @include('plantillas.Encabezado')
  @yield('content')
  @include('plantillas.Pie')
  <script src="script.js"></script>
</body>

</html>