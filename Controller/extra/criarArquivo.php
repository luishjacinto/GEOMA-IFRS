<?php
//session_start();

$cookie_name = "user";
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
}

$tamanhoMaximo = 1000000;

$extensoes = array(".doc", ".txt", ".pdf", ".docx", ".png", ".jpeg", ".jpg", ".gif");

$caminho = "arquivos/".$_COOKIE[$cookie_name]."/";

if(is_dir($caminho)){
}else{
	mkdir($caminho, 0777, true);
}

$substituir = false;

//print_r($_SESSION);
	
    $nomeArquivo = $_FILES["arquivo"]['name'][0];
	$tamanhoArquivo = $_FILES["arquivo"]['size'][0];
	$nomeTemporario = $_FILES["arquivo"]["tmp_name"][0];
	
	if (!empty($nomeArquivo)) {
	
		$erro = false;
	
		if ($tamanhoArquivo > $tamanhoMaximo) {
			$erro = "O arquivo " . $nomeArquivo . " não deve ultrapassar " . $tamanhoMaximo. " bytes";
		} 
		// Verifica se a extensão está entre as aceitas
		elseif (!in_array(strrchr($nomeArquivo, "."), $extensoes)) {
			$erro = "A extensão do arquivo <b>" . $nomeArquivo . "</b> não é válida";
		} 
		elseif (file_exists($caminho . $nomeArquivo) and !$substituir) {
			$erro = "O arquivo <b>" . $nomeArquivo . "</b> já existe";
        }
		
		if (!$erro) {
			move_uploaded_file($nomeTemporario, ($caminho . $nomeArquivo));
			echo "O arquivo <b>".$nomeArquivo."</b> foi enviado com sucesso. <br />";		
			echo "<head>
			<meta charset='ISO-8859-1'>
			<title>Envio concluido</title>
			</head>";

			echo "<a href=adicionar.php>Adicionar arquivo</a>";        
			echo "<br><a href=relatorio.php>Ver arquivos</a>";
			echo "<br><a href=pdf.php>Baixar PDF do usuario</a>";
			echo "<br><a href=logout.php>Logout</a>"; 
		} 
		else {
			echo $erro . "<br />";
			echo "<head>
			<meta charset='ISO-8859-1'>
			<title>Envio fracassado</title>
			</head>";

			echo "<a href=adicionar.php>Adicionar arquivo</a>";        
			echo "<br><a href=relatorio.php>Ver arquivos</a>";
			echo "<br><a href=pdf.php>Baixar PDF do usuario</a>";
			echo "<br><a href=logout.php>Logout</a>";
			
		}		

	}
?>