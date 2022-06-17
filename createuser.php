<?php

include "conexion.php";

if (isset($_POST['login'])){
    $fullname               =           $_REQUEST['fullname'];
    $email                  =           $_REQUEST['email'];
    $password               =           $_REQUEST['password'];
    $repassword             =           $_REQUEST['repassword'];
    $role                   =           $_REQUEST['role'];
    $encriptarpassword      =           password_hash($password, PASSWORD_DEFAULT);
    if($password==$repassword){
        
        $insert     =       "INSERT INTO users (fullname, email, password,usercreatedat, userupdatedat,  role) VALUES('$fullname', '$email', '$encriptarpassword', DEFAULT, NOW(), '$role')";

        $resultado = mysqli_query($conectar, $insert) or die(mysqli_connect_error($insert));
        if($resultado){
            echo "<script>alert('Usuario registrado')
                    window.location('index.php')</script>";
        }
    }
}
?>