<?php

function getTeses(){
    $teses = listarTeses();

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
    
    foreach($teses as $tese){
        $lista .= '<tr>'
            .'<td scope="row">'.$tese['id'].'</td>'
            .'<td>'.$tese['nome'].'</td>'
            .'<td>'.buscarMembro($tese['membro'])['nome'].'</td>'
            .'<td>'.$tese['caminho'].'</td>'
            .'<td>'
                .'<a href="/editar_tese?'.$tese['id'].'" class="mg-20"><i class=material-icons>edit</i></a>'
                .'<a href="/deletar_tese?'.$tese['id'].'"><i class=material-icons>delete</i></a>'
            .'</td>'
        .'</tr>';
    }

    $lista .= '</tbody>';

    return $lista;
}

?>