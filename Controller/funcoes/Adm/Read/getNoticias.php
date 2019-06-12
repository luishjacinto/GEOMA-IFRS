<?php

function getNoticias(){
    $membros = listarNoticias();

    $lista = '<thead>'
        .'<tr>'
            .'<th scope="col">id</th>'
            .'<th scope="col">Titulo</th>'
            .'<th>Ações</th>'
        .'</tr>'
    .'</thead>'
    .'<tbody class="">';
    
    foreach($membros as $membro){
        $lista .= '<tr>'
            .'<td scope="row">'.$membro['id'].'</td>'
            .'<td>'.$membro['titulo'].'</td>'
            .'<td>'
                .'<a href="/editar_noticia?'.$membro['id'].'" class="mg-20"><i class=material-icons>edit</i></a>'
                .'<a href="/deletar_noticia?'.$membro['id'].'"><i class=material-icons>delete</i></a>'
            .'</td>'
        .'</tr>';
    }

    $lista .= '</tbody>';

    return $lista;
}

?>