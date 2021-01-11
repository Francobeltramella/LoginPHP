<?php

   //Traer datos del Formulario
   $email= $_GET['email'];
   //Obtener contraseña e encriptarla con MD5
   $password = md5($_GET['pass']);

   //Validar datos para ingreso
   if (($user == "admin@admin.com") AND ($password == "12345")) {
        header('location:alerts.php?msj=Bienvenido&c=home&p=in&t=success');
    }else{
        header('location:alerts.php?msj=Usuario o contrasenia incorrectos&c=home&p=in&t=error');
     }


?>
