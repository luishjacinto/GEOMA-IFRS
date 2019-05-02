<?php

function buscarFormNoticia($id){
    $noticia = buscarNoticia($id);
    $select = montaMembros($noticia);

    $form = '<form method="POST" action="atualizar_noticia?'.$noticia['id'].'" enctype="multipart/form-data">'
                .'<div class="form-group">'
                    .'<label for="titulo">Titulo</label>'
                    .'<input type="text" class="form-control" name="titulo" placeholder="Insira o titulo da notícia" value="'.$noticia['nome'].'" required>'
                .'</div>'
                .'<div class="form-group">'
                    .'<label for="conteudo">Conteudo</label>'
                    .'<input type="text" class="form-control" name="conteudo" placeholder="Insira o conteudo da notícia" value="'.$noticia['caminho'].'" required>'
                .'</div>'
                .'<label for="membro">Autor</label>'
                .'<select name="membro" class="form-control form-control-sm" required>'
                .$select
                .'</select>'
                .'<br>'
                .'<button type="submit" class="btn btn-primary">Editar Notícia</button>'
            .'</form>';

    return $form;
}

?>
