<?php

function buscarFormMembro($id){
    $membro = buscarMembro($id);

    //echo $membro;

    $lista = '<form method="POST" action="atualizar_membro?'.$membro['id'].'" enctype="multipart/form-data">'
        .'<div class="form-group">'
            .'<label for="nome">Nome</label>'
            .'<input type="text" class="form-control" name="nome" placeholder="Insira o nome do membro" value="'.$membro['nome'].'" required>'
        .'</div>'
        .'<div class="form-group">'
            .'<label for="cargo">Curriculo Lattes</label>'
            .'<input type="text" class="form-control" name="lattes" placeholder="Insira o nome do membro" value="'.$membro['lattes'].'" required>'
        .'</div>'
        .'<label for="cargo">Cargo</label>';

    switch($membro['cargo']){
        case 0:        
            $lista .= '<select name="cargo" class="form-control form-control-sm" required>'
                .'<option value="0" selected>Pesquisador</option>'
                .'<option value="1">NAO SEI</option>'
                .'<option value="2">N SEI</option>'
            .'</select>';
        break;
        case 1:
            $lista .= '<select name="cargo" class="form-control form-control-sm" required>'
                .'<option value="0">Pesquisador</option>'
                .'<option value="1" selected>NAO SEI</option>'
                .'<option value="2">N SEI</option>'
            .'</select>';
        break;
        case 2:
            $lista .= '<select name="cargo" class="form-control form-control-sm" required>'
                .'<option value="0">Pesquisador</option>'
                .'<option value="1">NAO SEI</option>'
                .'<option value="2" selected>N SEI</option>'
            .'</select>';
        break;
    }
        
    $lista .= '<br>'
            .'<div class="form-group">'
                .'<label for="arquivo">Foto do membro</label>'
                .'<input type="file" name="arquivo" class="form-control-file" id="">'
            .'</div>'
            .'<button type="submit" class="btn btn-primary">Editar Membro</button>'
        .'</form>';

    return $lista;
}

?>