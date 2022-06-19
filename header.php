<?php
include "conexion.php";
include "nowarning.php";
session_start();
    echo "<div class='header_toggle'><i class='bx bx-menu' id='header-toggle'></i></div>
    <ul style='list-style-type: none;'>
        <li class='nav-item dropdown'>
            <a class='nav-link bx bx-menu iconcolor' href='#' id='header-toggle' role='button' data-bs-toggle='dropdown'>";
                echo $_SESSION['fullname']; echo"
            </a>
            <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                <li><img src='img/users/admin.png' width='180px' alt='Imagen de usuario'></li>
                <hr>
                <li><a class='dropdown-item' href='#'><i class='fa-solid fa-address-card iconcolor'></i> Editar perfil</a></li>
                <li><hr class='dropdown-divider'></li>
                <p style='padding-left: 15px;'><i class='fa-solid fa-user-tag iconcolor'></i>";
                if($_SESSION['role']=='ADMIN'){
                    echo ' Administrador';
                }elseif($_SESSION['role']=='USER'){
                    echo ' Usuario';
                }elseif($_SESSION['role']=='SUPPORT'){
                    echo ' Soporte';
                }else{
                    echo 'Por definir';
                }
                echo "</p>
                <li><hr class='dropdown-divider'></li>
                <li><a class='dropdown-item' href='logout.php'><i class='fa-solid fa-arrow-right-from-bracket iconcolor'></i> Salir</a></li>
            </ul>
        </li>
    </ul>";
    
?>