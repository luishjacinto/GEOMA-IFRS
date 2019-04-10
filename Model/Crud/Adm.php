<?php
include_once('Setup.php');

function inserirAdm($adm){
    $administrador=R::dispense('administrador');
    $administrador["nickname"]=$adm['nickname'];
    $administrador['email']=$adm['email'];
    $administrador['senha']=$adm['senha'];
    $x = R::store($administrador);
}

function buscarAdm($id){
    return R::findOne('administrador','id=?',[$id]);
}

function buscarAdmLogin($adm){
    return R::findOne('administrador','nickname=? AND senha=?',[$adm['nickname'],$adm['senha']]);
}


function listarAdm(){
    $administradores = R::findAll("administrador"," ORDER BY id");
    $aux=0;
    $adms=[];
    foreach ($administradores as $administrador) {
    	$adms[$aux]=R::findOne('administrador',"id=?",[$administrador["id"]]);
    	$aux++;
    }
    return json_encode($adms);
}

function alterarAdm($adm,$id){
    $administrador=R::load("administrador",$id);
    $administrador["nickname"]=$adm["nickname"];
    $administrador["email"]=$adm["email"];
    $administrador["senha"]=$adm["senha"];
    return R::store($administrador);
}

function deletarAdm($id){
    $administrador=R::findOne("administrador","id=?",[$id]);
    return R::trash($administrador);
}
?>