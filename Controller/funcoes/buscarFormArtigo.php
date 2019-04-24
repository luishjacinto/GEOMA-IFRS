<?php

function buscarFormArtigo($id){
    $artigo = buscarArtigo($id);
    $select = montaMembros($artigo);

    $form = '<form method="POST" action="atualizar_artigo?'.$artigo['id'].'" enctype="multipart/form-data">'
                .'<div class="form-group">'
                    .'<label for="nome">Nome</label>'
                    .'<input type="text" class="form-control" name="nome" placeholder="Insira o nome do artigo" value="'.$artigo['nome'].'" required>'
                .'</div>'
                .'<div class="form-group">'
                    .'<label for="caminho">Link para Artigo</label>'
                    .'<input type="text" class="form-control" name="caminho" placeholder="Insira o link do artigo" value="'.$artigo['caminho'].'" required>'
                .'</div>'
                .'<label for="membro">Autor</label>'
                .'<select name="membro" class="form-control form-control-sm" required>'
                .$select
                .'</select>'
                .'<br>'
                .'<button type="submit" class="btn btn-primary">Editar Artigo</button>'
            .'</form>';

    return $form;
}

?>
