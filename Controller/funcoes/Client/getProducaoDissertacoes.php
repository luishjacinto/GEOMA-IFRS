<?php
function getProducaoDissertacoes(){
    $dissertacoes = listarDissertacoes();
    $html = '<table class="table text-center"><tbody>';
    foreach($dissertacoes as $dissertacao){
        $html.='<tr><td><a href="'.$dissertacao['caminho'].'">'.$dissertacao['nome'].'</a></td>
        </tr>';
    }
    $html .= '</tbody></table>';
    return $html;
}
?>