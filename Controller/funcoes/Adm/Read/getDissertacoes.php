<?php

function getDissertacoes(){
    $dissertacoes = listarDissertacoes();

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
    
    foreach($dissertacoes as $dissertacao){
        $lista .= '<tr>'
            .'<td scope="row">'.$dissertacao['id'].'</td>'
            .'<td>'.$dissertacao['nome'].'</td>'
            .'<td>'.buscarMembro($dissertacao['membro'])['nome'].'</td>'
            .'<td>'.$dissertacao['caminho'].'</td>'
            .'<td>'
                .'<a href="/editar_dissertacao?'.$dissertacao['id'].'" class="mg-20"><i class=material-icons>edit</i></a>'
                .'<a href="/deletar_dissertacao?'.$dissertacao['id'].'"><i class=material-icons>delete</i></a>'
            .'</td>'
        .'</tr>';
    }

    $lista .= '</tbody>';

    return $lista;
}

?>