<?php 
function getCardMembros(){
    $membros = listarMembros();
    $html = '';
    foreach($membros as $membro){
        if($membro['cargo'] == '0'){
            $cargo = 'Pesquisador';
        }elseif($membro['cargo'] == '1'){
            $cargo = 'Técnico';
        }elseif($membro['cargo'] == '2'){
            $cargo = 'Estudante';
        }
        if($membro['imagem'] == ''){
            $imagem = 'Armazenamento/Membros/default-pic.png';
        }else{
            $imagem = $membro['imagem'];
        }
        $html .= '<div class="bg-dark card-box">
		<img class="card-img-top" src="'.$imagem.'" loading="lazy" >
		<div class="card-body">
            <h4 class="card-title">'.$membro['nome'].'</h4>
            <p class="card-text">'.$cargo.'</p>
			<a href='.$membro['lattes'].' class="btn btn-light btn-block">Currículo</a>
		</div>
		</div>';
    }
    return $html;
}
?>