<head>
    <meta charset="ISO-8859-1">
    <title>Adicionar Arquivo</title>
</head>

<form action="criarArquivo.php" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo[]" />
    <br>
    <input type="submit" value="Adicionar arquivo" />
</form>