<?php
session_start();

session_unset();
session_destroy();

if(!isset($_SESSION['usuario'])){
    echo "Logout realizado!";
    echo "<br><a href=index.php>Home</a>";
}

?>