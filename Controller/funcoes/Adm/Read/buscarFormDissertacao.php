<?php

function buscarFormDissertacao($id){
    $dissertacao = buscarDissertacao($id);
    $select = montaMembros($dissertacao);

    $form = '<form method="POST" action="atualizar_dissertacao?'.$dissertacao['id'].'" enctype="multipart/form-data">'
                .'<div class="form-group">'
                    .'<label for="nome">Nome</label>'
                    .'<input type="text" class="form-control" name="nome" placeholder="Insira o nome do dissertacao" value="'.$dissertacao['nome'].'" required>'
                .'</div>'
                .'<div class="form-group">'
                    .'<label for="caminho">Link para dissertacao</label>'
                    .'<input type="text" class="form-control" name="caminho" placeholder="Insira o link do dissertacao" value="'.$dissertacao['caminho'].'" required>'
                .'</div>'
                .'<label for="membro">Autor</label>'
                .'<select name="membro" class="form-control form-control-sm" required>'
                .$select
                .'</select>'
                .'<br>'
                .'<button type="submit" class="btn btn-primary">Editar dissertacao</button>'
            .'</form>';

    return $form;
}

?>
