<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de datos</title>
</head>
<body>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>
<?php 
include "conexion.php";
include "nowarning.php";

    if(isset($_POST['login'])){
        $email          = $_REQUEST['email'];
        $password       = $_REQUEST['password'];

        $consulta   = "SELECT * FROM users WHERE email='$email'";
        //var_dump($consulta);
        $resultado  = mysqli_query($conectar, $consulta) or die(mysqli_connect_error($consulta));
        $fila       = mysqli_fetch_assoc($resultado);
        $filas      = mysqli_num_rows($resultado);
        if(password_verify($password, $fila['password']) && $filas==1){
            session_start();
            $_SESSION['userid']         =       $fila['userid'];
            $_SESSION['email']      =       $fila['email'];
            $_SESSION['fullname']   =       $fila['fullname'];
            $_SESSION['role']       =       $fila['role'];
            
            echo "Ha iniciado sesión";
            echo "<br>";
            echo $_SESSION['email'];
            echo "<br>";
            echo $_SESSION['fullname'];
            echo "<br>";
            echo $_SESSION['role'];
            echo "<br>";
            echo $_SESSION['userid'];
            echo "<br>";
        }else{
            echo "<script type='text/javascript'>
                swal({
                    title: '¡Error en email o contraseña!',
                    text: 'Verifique los datos ingresados.',
                    icon: 'error',
                    button: 'ACEPTAR',
                }).then(function() {
                    window.location = 'index.php';
                });
            </script>";
        }
    }else{
        echo "Ha ocurrido algún error desconocido";
    }
?>