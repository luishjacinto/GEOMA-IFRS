<?php

function buscarFormLivro($id){
    $livro = buscarLivro($id);
    $select = montaMembros($livro);

    $form = '<form method="POST" action="atualizar_livro?'.$livro['id'].'" enctype="multipart/form-data">'
                .'<div class="form-group">'
                    .'<label for="nome">Nome</label>'
                    .'<input type="text" class="form-control" name="nome" placeholder="Insira o nome do Livro" value="'.$livro['nome'].'" required>'
                .'</div>'
                .'<div class="form-group">'
                    .'<label for="caminho">Link para livro</label>'
                    .'<input type="text" class="form-control" name="caminho" placeholder="Insira o link do Livro" value="'.$livro['caminho'].'" required>'
                .'</div>'
                .'<label for="membro">Autor</label>'
                .'<select name="membro" class="form-control form-control-sm" required>'
                .$select
                .'</select>'
                .'<br>'
                .'<button type="submit" class="btn btn-primary">Editar Livro</button>'
            .'</form>';

    return $form;
}

?>
