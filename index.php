<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "favicon.html"; ?>
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="css/style.css">
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/71f1c28685.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="row">
        <div class="col-2">

        </div>
        <div class="col-8" style="margin-top: 20px;">

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
</body>
</html>