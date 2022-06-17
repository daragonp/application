<?php
$conectar = new mysqli("localhost", "root", "password", "database");
if($conectar){
    echo "";
}else{
    echo "Revise los datos de la conexión.";
}
?>