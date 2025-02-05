<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <title>Restablecer Contraseña</title>
</head>

<body>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <div class="fadeIn first">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-POwnO2XAzcxcHV4-FCoxncjXQ6UMlXmk-Q&s" id="icon" alt="User Icon" />
      </div>
      <form action="{{ route('resetpassword.post') }}" method="POST">
        @csrf
        <input type="email" id="email" class="fadeIn second" name="email" placeholder="Correo electrónico" required>
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="Nueva contraseña" required>
        <input type="password" id="password_confirmation" class="fadeIn third" name="password_confirmation" placeholder="Confirmar contraseña" required>
        <input type="submit" class="fadeIn fourth" value="Restablecer contraseña">
      </form>
    </div>
  </div>
</body>

</html>