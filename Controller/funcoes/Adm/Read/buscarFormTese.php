<?php

function buscarFormTese($id){
    $tese = buscarTese($id);
    $select = montaMembros($tese);

    $form = '<form method="POST" action="atualizar_tese?'.$tese['id'].'" enctype="multipart/form-data">'
                .'<div class="form-group">'
                    .'<label for="nome">Nome</label>'
                    .'<input type="text" class="form-control" name="nome" placeholder="Insira o nome do tese" value="'.$tese['nome'].'" required>'
                .'</div>'
                .'<div class="form-group">'
                    .'<label for="caminho">Link para tese</label>'
                    .'<input type="text" class="form-control" name="caminho" placeholder="Insira o link do tese" value="'.$tese['caminho'].'" required>'
                .'</div>'
                .'<label for="membro">Autor</label>'
                .'<select name="membro" class="form-control form-control-sm" required>'
                .$select
                .'</select>'
                .'<br>'
                .'<button type="submit" class="btn btn-primary">Editar tese</button>'
            .'</form>';

    return $form;
}

?>
