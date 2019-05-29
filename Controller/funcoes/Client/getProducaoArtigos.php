<?php
function getProducaoArtigos(){
    $artigos = listarArtigos();
    $html = '<table class="table text-center"><tbody>';
    foreach($artigos as $artigo){
        $html.='<tr><td><a href="'.$artigo['caminho'].'">'.$artigo['nome'].'</a></td>
        </tr>';
    }
    $html .= '</tbody></table>';
    return $html;
}
?>