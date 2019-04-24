<?php
function logar(){
    $adm=[
        'nickname'=>$_POST['nickname'],
        'senha'=>$_POST['senha']
    ];
    echo $administrador=buscarAdmLogin($adm);
    if($administrador!=null){
        $_SESSION['administrador'] = $_POST['nickname'];
        $cookie_name = "administrador";
        $cookie_value = $_SESSION['administrador'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
        $_SESSION['administrador']=$administrador;                
        header("Location: /adm_inicio");
    }else{
        header("Location: /adm");
    }
}

?>