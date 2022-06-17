<?php
$conectar = new mysqli("localhost", "root", "", "heroku");
if($conectar){
    echo "Conexión exitosa";
}else{
    echo "Revise los datos de la conexión.";
}
?>