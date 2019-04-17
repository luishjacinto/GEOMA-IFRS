<?php 

function deslogar(){
    session_destroy();
    header("Location: /adm"); 
}

?>