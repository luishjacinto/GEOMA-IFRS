<?php

function buscarFormTcc($id){
    $tcc = buscarTcc($id);
    $select = montaMembros($tcc);

    $form = '<form method="POST" action="atualizar_tcc?'.$tcc['id'].'" enctype="multipart/form-data">'
                .'<div class="form-group">'
                    .'<label for="nome">Nome</label>'
                    .'<input type="text" class="form-control" name="nome" placeholder="Insira o nome do TCC" value="'.$tcc['nome'].'" required>'
                .'</div>'
                .'<div class="form-group">'
                    .'<label for="caminho">Link para TCC</label>'
                    .'<input type="text" class="form-control" name="caminho" placeholder="Insira o link do TCC" value="'.$tcc['caminho'].'" required>'
                .'</div>'
                .'<label for="membro">Autor</label>'
                .'<select name="membro" class="form-control form-control-sm" required>'
                .$select
                .'</select>'
                .'<br>'
                .'<button type="submit" class="btn btn-primary">Editar TCC</button>'
            .'</form>';

    return $form;
}

?>
