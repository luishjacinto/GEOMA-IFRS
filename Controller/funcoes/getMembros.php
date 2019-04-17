<?php

function getMembros(){
    $membros = listarMembros();

    $lista = '<thead>'
        .'<tr>'
            .'<th scope="col">id</th>'
            .'<th scope="col">Nome</th>'
            .'<th scope="col">Cargo</th>'
            .'<th scope="col">Lattes</th>'
            .'<th>Ações</th>'
        .'</tr>'
    .'</thead>'
    .'<tbody class="">';
    
    foreach($membros as $membro){
        $lista .= '<tr>'
            .'<td scope="row">'.$membro['id'].'</td>'
            .'<td>'.$membro['nome'].'</td>'
            .'<td>'.$membro['cargo'].'</td>'
            .'<td>'.$membro['lattes'].'</td>'
            .'<td>'
                .'<a href="/editar_membro?'.$membro['id'].'" class="mg-20"><i class=material-icons>edit</i></a>'
                .'<a href="/deletar_membro?'.$membro['id'].'"><i class=material-icons>delete</i></a>'
            .'</td>'
        .'</tr>';
    }

    $lista .= '</tbody>';

    return $lista;
}

?>