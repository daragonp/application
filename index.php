<?php 
    include "conexion.php";
    include "nowarning.php";
    session_start();
        if (isset($_SESSION['userid']) && isset($_SESSION['fullname'])) {
            header('Location: dashboard.php');
        }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "favicon.html"?>
    <?php include "styles.php"?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>   
</head>
<body>
    <div class="row">
        <div class="col-2">

        </div>
        <div class="col-8" style="margin-top: 20px;">
            <button style="float: right;" type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="fa-solid fa-question"></i>
            </button>            
            <form action="login.php" method="post" class="form-group">
                <p style="text-align: center; font-size: 22px;">Ingreso de usuario</p>
                <img src="img/logodummy.png" alt="" width="100px;">
                <hr>
                <i class="fa-solid fa-envelope fa-2x iconcolor"></i></span><span class="form-text mb-2"> <strong>Email</strong></span>
                <input type="email" name="email" id="" class="form-control mb-2" required>
                <i class="fa-solid fa-key fa-2x iconcolor"></i><span class="form-text mb-2"> <strong>Contraseña</strong></span>
                <input type="password" name="password" id="" class="form-control mb-2" required>
                <a style="text-decoration: none;" href="register.php"> ¿No está registrado? Registro</a>
                <input type="submit" name="login" value="Iniciar sesión" style="float: right;" class="btncolor">
            </form>
        </div>
        <div class="col-2">

        </div>
    </div>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if(!$conectar){
        echo "<script type='text/javascript'>
                swal({
                    title: '¡Error de conexión!',
                    text: 'No hay conexión con la base de datos; por favor, contacte al administrador, puesto que si persiste el error, nada de lo que haga en este sistema, será guardado',
                    icon: 'warning',
                    button: 'ACEPTAR',
                });
            </script>";
            //mysqli_close($conectar);
    }
    
    ?>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Instrucciones para el inicio de sesión</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            Esta es la forma de acceder al sistema...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
        </div>
    </div>
</body>
</html>