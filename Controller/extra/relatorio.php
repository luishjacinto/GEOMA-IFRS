<?php
$cookie_name = "user";
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
}

$caminho = "arquivos/".$_COOKIE[$cookie_name]."/";

if(is_dir($caminho)){
    echo "<h2>Lista de Arquivos de ".$_COOKIE[$cookie_name]." :</h2><br />";

    echo "<table>
        <tr>
        <th>Nome</th>
        <th>Tamanho</th>
        </tr>";
    foreach (new DirectoryIterator($caminho) as $fileInfo) {
            if($fileInfo->isDot()) continue;
        echo "<tr>
        <td>".$fileInfo->getFilename()."</a></td>
        <td>".filesize($caminho.$fileInfo)."bytes </td>
        </tr>";

    }
    echo "</table>";

    echo "<br><br><a href=adicionar.php>Adicionar arquivo</a>";
    echo "<br><a href=pdf.php>Relatório em PDF do usuario</a>";
    echo "<br><a href=logout.php>Logout</a>";
}else{
    echo "Usuario não possui arquivos salvos.";
    echo "<br><br><a href=adicionar.php>Adicionar arquivo</a>";
    echo "<br><a href=pdf.php>Baixar PDF do usuario</a>";    
    echo "<br><a href=logout.php>Logout</a>";
}

?>

<head>
    <meta charset="ISO-8859-1">
    <title>Relatorio</title>
</head>