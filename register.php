<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
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
            <form action="userregister.php" method="post" class="form-group">
                <p style="text-align: center; font-size: 22px;">Registro de usuario</p>
                <img src="img/logodummy.png" alt="" width="100px;">
                <hr>
                <i class="fa-solid fa-user-tag fa-2x iconcolor"></i></span><span class="form-text mb-4"> <strong>Nombre completo</strong></span>
                <input type="fullname" name="fullname" id="" class="form-control mb-4" required>
                <i class="fa-solid fa-envelope fa-2x iconcolor"></i></span><span class="form-text mb-4"> <strong>Email</strong></span>
                <input type="email" name="email" id="" class="form-control mb-4" required>
                <i class="fa-solid fa-key fa-2x iconcolor"></i><span class="form-text mb-4"> <strong>Contraseña</strong></span>
                <input type="password" name="password" id="" class="form-control mb-4" required>
                <i class="fa-solid fa-key fa-2x iconcolor"></i><span class="form-text mb-4"> <strong>Repetir contraseña</strong></span>
                <input type="password" name="repassword" id="" class="form-control mb-4" required>
                <a style="text-decoration: none;" href="index.php"> ¿Ya está registrado? Iniciar sesión</a>
                <input type="submit" name="login" value="Registro" style="float: right;" class="btncolor">
            </form>
        </div>
        <div class="col-2">

        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Instrucciones para registro en el sistema</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Esta es la forma de registrarse en el sistema...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
        </div>
    </div>
</body>
</html>