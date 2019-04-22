<?php

function salvarImagem($pasta){
    if($pasta == 'Galeria' || $pasta == 'Membros'){
        $_UP['renomeia'] = false;
        $_UP['extensoes'] = array('jpg', 'png', 'jpeg');
        $_UP['tamanho'] = 1024 * 1024 * 2; // 2Mb

        $_UP['erros'][0] = 'Não houve erro';
        $_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
        $_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
        $_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
        $_UP['erros'][4] = 'Não foi feito o upload do arquivo';

        $_UP['pasta'] = 'Armazenamento/'.$pasta.'/';

        if ($_FILES['arquivo']['error'] != 0) {
            return '';
        }

        // Faz a verificação da extensão do arquivo
        $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
        if (array_search($extensao, $_UP['extensoes']) === false) {
            return '';
        }

        // Faz a verificação do tamanho do arquivo
        if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
            return '';
        }

        $nome_final = $_FILES['arquivo']['name'];

        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].$nome_final)) {
            return $_UP['pasta'].$nome_final;
        } else {
            return $_UP['pasta'].'default-pic.png'; //IMAGEM PADRAO
        }
        
    }else{
        echo 'Pasta não permitida!';
    }
}

function checarAlteracao($pasta,$atual){
    if($_FILES['arquivo']['name']!=""){
        if($atual != 'Armazenamento/Membros/default-pic.png'){
            apagarImagem($atual);
        }
        return salvarImagem($pasta);
    }
}

function apagarImagem($pasta){
    unlink($pasta);
}

?>