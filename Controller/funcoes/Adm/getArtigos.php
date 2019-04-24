<?php

function getArtigos(){
    $artigos = listarArtigos();

    $lista = '<thead>'
        .'<tr>'
            .'<th scope="col">id</th>'
            .'<th scope="col">Nome</th>'
            .'<th scope="col">Autor</th>'
            .'<th scope="col">Link</th>'
            .'<th>Ações</th>'
        .'</tr>'
    .'</thead>'
    .'<tbody class="">';
    
    foreach($artigos as $artigo){
        $lista .= '<tr>'
            .'<td scope="row">'.$artigo['id'].'</td>'
            .'<td>'.$artigo['nome'].'</td>'
            .'<td>'.buscarMembro($artigo['membro'])['nome'].'</td>'
            .'<td>'.$artigo['caminho'].'</td>'
            .'<td>'
                .'<a href="/editar_artigo?'.$artigo['id'].'" class="mg-20"><i class=material-icons>edit</i></a>'
                .'<a href="/deletar_artigo?'.$artigo['id'].'"><i class=material-icons>delete</i></a>'
            .'</td>'
        .'</tr>';
    }

    $lista .= '</tbody>';

    return $lista;
}

?>