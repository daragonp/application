<?php 
    include "conexion.php";
    include "nowarning.php";
    session_start();

    if(!$_SESSION){
        header('Location: index.php');
    }

    $userid = $_SESSION['userid'];
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
        <h4>Editar datos del usuario</h4>
        <?php 
            $editar = "SELECT * FROM users WHERE userid=$userid";
            $resultado  = mysqli_query($conectar, $editar) or die(mysqli_connect_error($editar));
            $fila       = mysqli_fetch_assoc($resultado);
            $filas      = mysqli_num_rows($resultado);
            if($filas==1){
                echo "Los datos son";
            }else{
                echo "<p>No se han encontrado los datos solicitados</p>";
            }
            
        ?>
    </div>
    <!--Container Main end-->
    <script src="dash/dash.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
<form action="updateuserdata.php" method="post">

</form>