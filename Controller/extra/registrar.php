<?php
session_cache_expire(5);
$cache_expire = session_cache_expire();

session_start();

if(isset($_SESSION['usuario'])){
    $cookie_name = "user";
    $cookie_value = $_SESSION['usuario'];
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30));

    echo "Ja esta registado como $_SESSION[usuario].";
    echo "</br>";
    echo "<a href=adicionar.php>Adicionar arquivo</a>";        
    echo "<br><a href=relatorio.php>Ver arquivos</a>";
    echo "<br><a href=pdf.php>Baixar PDF do usuario</a>";
    echo "<br><a href=logout.php>Logout</a>"; 
}

else if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $trimusuario = trim($_POST['usuario']);

    if(!empty($trimusuario)){
        $uname = $_POST['usuario'];
 		
        $_SESSION['usuario'] = $_POST['usuario'];
        $cookie_name = "user";
        $cookie_value = $_SESSION['usuario'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30));

        echo "Obrigado por se registar! <br />",
            "Usuario: $uname <br />";
        
            echo "<a href=adicionar.php>Adicionar arquivo</a>";        
            echo "<br><a href=relatorio.php>Ver arquivos</a>";
            echo "<br><a href=pdf.php>Baixar PDF do usuario</a>";
            echo "<br><a href=logout.php>Logout</a>";       
        
	}
    else {
        echo "Por favor preencha ambos os campos! <br />";
    }
    
}else{
 
?>
<form action="registrar.php" method="post">
    <label for="usuario">usuario: </label>
    <input type="text" name="usuario" />
    <input type="submit" value="Registar" />
</form>
 
<?php } 

?>

<head>
    <meta charset="ISO-8859-1">
    <title>Bem vindo</title>
</head>
