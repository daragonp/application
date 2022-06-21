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
        <h4 style="text-align: center;">Listado de roles</h4>
        <?php 
            $roles = "SELECT * FROM roles";
            $listado  = mysqli_query($conectar, $roles) or die(mysqli_connect_error($roles));
            echo "
                <a class='btn btn-primary' href='newrole.php' style='float:right; margin-right:50px;'>Crear rol</a>";
                echo "<br>";
                echo "<br>";
                echo "<hr>";
                if(mysqli_num_rows($listado)>0){
                    echo "<table class='table table-responsive table-light'>
                    <thead>
                        <tr style='text-align: center;'>
                            <th>ID</th>
                            <th>Rol</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr style='text-align: center;'>
                            <th>ID</th>
                            <th>Rol</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>";
                    while($fila = mysqli_fetch_assoc($listado)){
                        echo "<tbody>
                                    <tr>
                                        <td>"; echo $fila['roleid'];echo "</td>
                                        <td>"; echo $fila['rolename'];echo "</td>
                                        <td>"; echo $fila['roledescription'];echo "</td>
                                        <td> 
                                        <form action='../controller/roleupdate.php' method='GET'>"; 
                                        if ($fila['roledelete']==NULL){
                                            echo "<a href='roleedit.php?id=";
                                            echo $fila['roleid'];echo"'><i class='actualizar fa-solid fa-pen-to-square editcolor'></i></a>
                                            <a href='../controller/roledelete.php?id=";
                                            echo $fila['roleid'];echo"'><i class='borrar fa-solid fa-trash-can deletecolor'></i></a>
                                            <a href='../controller/roleinactivate.php?id=";
                                            echo $fila['roleid'];echo"'><i class='desactivar fa-solid fa-toggle-on'></i></a>";
                                        }else{
                                            echo "<a href='../controller/roleactivate.php?id=";
                                            echo $fila['roleid'];echo"'><i class='activar fa-solid fa-toggle-off'></i></a>";					
                                        } echo
                                            "</form>
                                            </td>                                              
                                    </tr>
                                </tbody>
                            ";
                    } echo "</table>";
                }else{
                    echo "No existen datos de usuarios";
                }
        ?>
    </div>
    <!--Container Main end-->
    <script src="dash/dash.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>