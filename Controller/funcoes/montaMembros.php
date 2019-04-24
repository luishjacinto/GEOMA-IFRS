<?php

function montaMembros($objeto){
    $membros = listarMembros();
    $select = '';
    foreach($membros as $membro){
        if($objeto['membro'] == $membro['id']){
            $select .= '<option value="'.$membro['id'].'" selected> '.$membro['nome'].' </option>';
        }else{
            $select .= '<option value="'.$membro['id'].'"> '.$membro['nome'].' </option>';
        }
    }
    return $select;
}

?>