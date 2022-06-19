<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "favicon.html"; ?>
    <?php include "styles.php" ?>

    <title>Registro</title>
</head>
<body>
    <div class="row">
        <div class="col-2">

        </div>
        <div class="col-8" style="margin-top: 20px;">
            <form action="createuser.php" method="post" class="form-group">
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
</body>
</html>