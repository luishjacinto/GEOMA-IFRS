<?php

function getLinhas(){
    $linhas = listarLinhas();

    $lista = '<thead>'
        .'<tr>'
            .'<th scope="col">id</th>'
            .'<th scope="col">Nome</th>'
            .'<th>Ações</th>'
        .'</tr>'
    .'</thead>'
    .'<tbody class="">';
    
    foreach($linhas as $linha){
        $lista .= '<tr>'
            .'<td scope="row">'.$linha['id'].'</td>'
            .'<td>'.$linha['nome'].'</td>'
            .'<td>'
                .'<a href="/editar_linha?'.$linha['id'].'" class="mg-20"><i class=material-icons>edit</i></a>'
                .'<a href="/deletar_linha?'.$linha['id'].'"><i class=material-icons>delete</i></a>'
            .'</td>'
        .'</tr>';
    }

    $lista .= '</tbody>';

    return $lista;
}

?>