<?php
function getProducaoLivros(){
    $livros = listarLivros();
    $html = '<table class="table text-center"><tbody>';
    foreach($livros as $livro){
        $html.='<tr><td><a href="'.$livro['caminho'].'">'.$livro['nome'].'</a></td>
        </tr>';
    }
    $html .= '</tbody></table>';
    return $html;
}
?>