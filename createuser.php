<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario</title>
</head>
<body>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>

<?php

include "conexion.php";

if (isset($_POST['login'])){
    $fullname               =           $_REQUEST['fullname'];
    $email                  =           $_REQUEST['email'];
    $password               =           $_REQUEST['password'];
    $repassword             =           $_REQUEST['repassword'];
    $role                   =           'USER';
     /* ADMIN
        USER
        SUPPORT*/
    $encriptarpassword      =           password_hash($password, PASSWORD_DEFAULT);
    if($password==$repassword){
        
        $insert     =       "INSERT INTO users (fullname, email, password,usercreatedat, userupdatedat,  role) VALUES('$fullname', '$email', '$encriptarpassword', DEFAULT, NOW(), '$role')";

        $resultado = mysqli_query($conectar, $insert) or die(mysqli_connect_error($insert));
        if($resultado){
            echo "<script type='text/javascript'>
                swal({
                    title: 'Datos almacenados',
                    text: '¡El usuario ha sido creado!',
                    icon: 'success',
                    button: 'ACEPTAR',
                }).then(function() {
                    window.location = 'index.php';
                });
            </script>";
        }
    }
}
?>