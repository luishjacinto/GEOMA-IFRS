<?php

function getTccs(){
    $tccs = listarTccs();

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
    
    foreach($tccs as $tcc){
        $lista .= '<tr>'
            .'<td scope="row">'.$tcc['id'].'</td>'
            .'<td>'.$tcc['nome'].'</td>'
            .'<td>'.buscarMembro($tcc['membro'])['nome'].'</td>'
            .'<td>'.$tcc['caminho'].'</td>'
            .'<td>'
                .'<a href="/editar_tcc?'.$tcc['id'].'" class="mg-20"><i class=material-icons>edit</i></a>'
                .'<a href="/deletar_tcc?'.$tcc['id'].'"><i class=material-icons>delete</i></a>'
            .'</td>'
        .'</tr>';
    }

    $lista .= '</tbody>';

    return $lista;
}

?>