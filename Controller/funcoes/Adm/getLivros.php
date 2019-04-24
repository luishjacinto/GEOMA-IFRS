<?php

function getLivros(){
    $livros = listarLivros();

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
    
    foreach($livros as $livro){
        $lista .= '<tr>'
            .'<td scope="row">'.$livro['id'].'</td>'
            .'<td>'.$livro['nome'].'</td>'
            .'<td>'.buscarMembro($livro['membro'])['nome'].'</td>'
            .'<td>'.$livro['caminho'].'</td>'
            .'<td>'
                .'<a href="/editar_livro?'.$livro['id'].'" class="mg-20"><i class=material-icons>edit</i></a>'
                .'<a href="/deletar_livro?'.$livro['id'].'"><i class=material-icons>delete</i></a>'
            .'</td>'
        .'</tr>';
    }

    $lista .= '</tbody>';

    return $lista;
}

?>