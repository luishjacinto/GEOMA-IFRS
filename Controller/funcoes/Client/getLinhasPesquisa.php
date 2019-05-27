<?php
function getLinhasPesquisa(){
    $linhas = listarLinhas();
    $html = '<table class="table text-center"><tbody>';
    foreach($linhas as $linha){
        $html.='<tr><td>'.$linha['nome'].'</td>
        </tr>';
    }
    $html .= '</tbody></table>';
    return $html;
}
?>