<?php
function getProducaoTccs(){
    $TCCs = listarTccs();
    $html = '<table class="table text-center"><tbody>';
    foreach($TCCs as $TCC){
        $html.='<tr><td><a href="'.$TCC['caminho'].'">'.$TCC['nome'].'</a></td>
        </tr>';
    }
    $html .= '</tbody></table>';
    return $html;
}
?>