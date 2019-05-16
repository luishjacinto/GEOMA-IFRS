<?php

function buscarFormLinha($id){
    $linha = buscarLinha($id);

    $form = '<form method="POST" action="atualizar_linha?'.$linha['id'].'" enctype="multipart/form-data">'
                .'<div class="form-group">'
                    .'<label for="titulo">Nome</label>'
                    .'<input type="text" class="form-control" name="nome" placeholder="Insira o nome da Linha de Pesquisa" value="'.$linha['titulo'].'" required>'
                .'</div>'
                .'<button type="submit" class="btn btn-primary">Editar Linha de Pesquisa</button>'
            .'</form>';

    return $form;
}

?>
