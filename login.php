<?php 
include "conexion.php";
session_start();
    if(isset($_POST['login'])){
        $email          = $_REQUEST['email'];
        $password       = $_REQUEST['password'];

        $consulta   = "SELECT * FROM users WHERE email='$email'";
        //var_dump($consulta);
        $resultado  = mysqli_query($conectar, $consulta) or die(mysqli_connect_error($consulta));
        $fila       = mysqli_fetch_assoc($resultado);
        $filas      = mysqli_num_rows($resultado);
        if(password_verify($password, $fila['password']) && $filas==1){
            $_SESSION['id']         =       $fila['id'];
            $_SESSION['email']      =       $fila['email'];
            $_SESSION['fullname']   =       $fila['fullname'];
            $_SESSION['role']       =       $fila['role'];
            $_SESSION['id']         =       $fila['id'];
            
            echo "Ha iniciado sesión";
        }else{
            echo "Verifique los datos";
        }
    }else{
        echo "Ha ocurrido algún error desconocido";
    }
?>