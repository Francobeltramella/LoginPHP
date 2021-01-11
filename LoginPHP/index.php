<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body class="body">
    <!--Formulario de Login -->
    <form action="UserController.php">
        <div class="container Absolute-Center">
            <div class="row">
                <!-- Logo empresa -->
                <div class="col-sm-12 col-md-6 col-lg-6">
                   <img src="assets/img/LogoPrincipal.png" width="200"  alt="">
                </div>
                <!--Campos de datos con validaciones-->
                <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="form-group mb-2">
                    <label for="inputEmail" class="sr-only mb-2">Email </label>
                    <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Ingrese Email..." required="" autofocus="">
                </div>
                <div class="form-group mb-3">
                    <label for="inputPassword" class="sr-only mb-2">Password</label>
                    <input type="password" name="pass" class="form-control" placeholder="Password..." pattern="[A-Za-z0-9]{5,15}" id="pass" title="Debe contener Minusculas , Mayusculas y numeros entre 5-15 caracteres" required>
                    <input type="checkbox" id="mostrar_contrasena"/> <label for="mostrar_contrasena">Mostrar Contraseña</label><br/>
                    <div class="input-field center">
                        <a href="//" tabindex="5" class="forgot-password"  style="float: right">¿Olvidaste tu contraseña / Email ?</a>
                        <br>
                   </div>
                </div>
                    <button class="mt-3 btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesion</button>
                </div>
            </div>
        </div>
    </form>
    <!--Script para mostrar contraseña con jquery-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
    $(document).ready(function () {
    $('#mostrar_contrasena').click(function () {
      if ($('#mostrar_contrasena').is(':checked')) {
        $('#pass').attr('type', 'text');
      } else {
        $('#pass').attr('type', 'password');
      }
    });
  });
  </script>
</body>

</html>
