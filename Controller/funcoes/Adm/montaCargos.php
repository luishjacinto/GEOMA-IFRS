<?php

function montaCargos($cargo) {
    $cargos = array('Pesquisador', 'Técnico', 'Estudante');
    $codSegundoCargo = (((int) $cargo + 1) % 3);
    $codTerceiroCargo = (((int) $cargo + 2) % 3);

    return '<select name="cargo" class="form-control form-control-sm" required>'
                .'<option value="'.$cargo.'" selected> '. $cargos[$cargo].' </option>'
                .'<option value="'.$codSegundoCargo.'"> '. $cargos[$codSegundoCargo] .' </option>'
                .'<option value="'.$codTerceiroCargo.'"> '. $cargos[$codTerceiroCargo] .' </option>'
            .'</select>';    
}

?>