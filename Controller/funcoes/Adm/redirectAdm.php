<?php 

function redirectAdm(){
    $cookie_name = "administrador";
    $cookie_value = $_SESSION['administrador'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
    header("Location: /adm_inicio");
}

?>