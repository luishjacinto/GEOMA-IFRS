<?php

function buscarFormNoticia($id){
    $noticia = buscarNoticia($id);
    $select = montaMembros($noticia);

    $form = '<form method="POST" action="atualizar_noticia?'.$noticia['id'].'" enctype="multipart/form-data">'
                .'<div class="form-group">'
                    .'<label for="titulo">Titulo</label>'
                    .'<input type="text" class="form-control" name="titulo" placeholder="Insira o titulo da notícia" value="'.$noticia['titulo'].'" required>'
                .'</div>'
                .'<div class="form-group">'
                    .'<label for="conteudo">Conteudo</label>'
                    .'<textarea type="text" class="form-control textA" rows="5" name="conteudo" placeholder="Insira o conteudo da notícia" required>'.$noticia['conteudo'].'</textarea>'
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
