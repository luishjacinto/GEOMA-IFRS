<?php

function buscarFormMembro($id){
    $membro = buscarMembro($id);
    $select = montaSelect($membro['cargo']);

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

function montaSelect($cargo) {
    $cargos = array('Pesquisador', 'Luis', 'Traficante');
    $codSegundoCargo = (((int) $cargo + 1) % 3);
    $codTerceiroCargo = (((int) $cargo + 2) % 3);

    return '<select name="cargo" class="form-control form-control-sm" required>'
                .'<option value="'.$cargo.'" selected> '. $cargos[$cargo].' </option>'
                .'<option value="'.$codSegundoCargo.'"> '. $cargos[$codSegundoCargo] .' </option>'
                .'<option value="'.$codTerceiroCargo.'"> '. $cargos[$codTerceiroCargo] .' </option>'
            .'</select>';

}

?>
