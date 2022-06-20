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

    $uppercase              =           preg_match('#[A-Z]+#', $password);
    $lowercase              =           preg_match('#[a-z]+#', $password);
    $number                 =           preg_match('#[0-9]+#', $password);
    $specialChars           =           preg_match('#[\W]+#', $password);

    $repassword             =           $_REQUEST['repassword'];
    $role                   =           'USER';
     /* ADMIN
        USER
        SUPPORT*/
    if(strcmp($password, $repassword) !== 0){
        echo "<script type='text/javascript'>
                    swal({
                        title: 'Contraseña',
                        text: 'Las contraseñas no coinciden.',
                        icon: 'warning',
                        button: 'Cerrar',
                    }).then(function() {
                        window.location = 'register.php';
                    });
                </script>";
    }elseif(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            echo "<script type='text/javascript'>
                    swal({
                        title: 'Contraseña',
                        text: 'La contraseña no cumple con los parámetros solicitados.',
                        icon: 'warning',
                        button: 'Aceptar',
                    }).then(function() {
                        window.location = 'register.php';
                    });
                </script>";
    }else{
            $encriptarpassword      =           password_hash($password, PASSWORD_DEFAULT);
            $insert     =       "INSERT INTO users (fullname, email, password,usercreatedat, userupdatedat,  role) VALUES('$fullname', '$email', '$encriptarpassword', DEFAULT, NOW(), '$role')";

            $resultado = mysqli_query($conectar, $insert) or die(mysqli_error($conectar));
        
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
            }else{
                echo "<script type='text/javascript'>
                    swal({
                        title: 'Error',
                        text: 'Verifique los datos, no se ha podido crear el usuario',
                        icon: 'warning',
                        button: 'Aceptar',
                    }).then(function() {
                        window.location = 'register.php';
                    });
                </script>";
            }
        }
    }
?>