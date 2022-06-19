<?php 
    include "conexion.php";
    include "nowarning.php";
    session_start();

    if(!$_SESSION){
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "favicon.html" ?>
    <?php include "styles.php" ?>
    <title>Bienvenido | Pánel de Administración</title>
</head>
<body id="body-pd">
    <header class='header' id='header'>
        <?php include "header.php" ?>
    </header>
    <?php include "menu.php" ?>
    <!--Container Main start-->
    <div class="height-100 bg-light">
        <br><br><br>
        <h4>Main Components</h4>
        <?php 
            echo '<pre>';
            var_dump($_SESSION);
            echo "<br>";
            var_dump(session_id());
            echo '</pre>';
        ?>
    </div>
    <!--Container Main end-->
    <script src="dash/dash.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>