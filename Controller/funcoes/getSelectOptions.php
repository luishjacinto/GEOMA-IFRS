<?php

function getSelectOptions(){
    $membros = listarMembros();
    $select = '';
    foreach($membros as $membro){
        $select .= '<option value="'.$membro['id'].'"> '.$membro['nome'].' </option>';
    }
    return $select;
}

?>