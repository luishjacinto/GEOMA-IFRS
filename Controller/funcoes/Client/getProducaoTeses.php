<?php
function getProducaoTeses(){
    $teses = listarTeses();
    $html = '<table class="table text-center"><tbody>';
    foreach($teses as $tese){
        $html.='<tr><td><a href="'.$tese['caminho'].'">'.$tese['nome'].'</a></td>
        </tr>';
    }
    $html .= '</tbody></table>';
    return $html;
}
?>