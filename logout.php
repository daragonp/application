<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Adiós!</title>
</head>
<body>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>

<?php
session_start();
$_SESSION = array();
session_unset();
session_destroy();
echo "<script type='text/javascript'>
    swal({
        title: 'Salir',
        text: 'La sesión ha sido cerrada',
        icon: 'success',
        button: 'ACEPTAR',
    }).then(function() {
        window.location = 'index.php';
    });
</script>";
?>