<?php

function buscarFormMembro($id){
    $membro = buscarMembro($id);
    $select = montaCargos($membro['cargo']);

    $form = '<form method="POST" action="atualizar_membro?'.$membro['id'].'" enctype="multipart/form-data">'
                .'<div class="form-group">'
                    .'<label for="nome">Nome</label>'
                    .'<input type="text" class="form-control" name="nome" placeholder="Insira o nome do membro" value="'.$membro['nome'].'" required>'
                .'</div>'
                .'<div class="form-group">'
                    .'<label for="cargo">Curriculo Lattes</label>'
                    .'<input type="text" class="form-control" name="lattes" placeholder="Insira o nome do membro" value="'.$membro['lattes'].'" required>'
                .'</div>'
                .'<label for="cargo">Cargo</label>'
                .$select
                .'<br>'
                .'<div class="form-group">'
                    .'<label for="arquivo">Foto do membro</label>'
                    .'<input type="file" name="arquivo" class="form-control-file" id="">'
                .'</div>'
                .'<button type="submit" class="btn btn-primary">Editar Membro</button>'
            .'</form>';

    return $form;
}

?>
