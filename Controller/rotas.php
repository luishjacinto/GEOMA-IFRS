<?php
include("Model/Crud/Model.php");
function getPagina()
{
    //session_start();
 	//error_reporting(0);
	$url = $_SERVER['REQUEST_URI'];
	$url = strtolower(explode("?",$url)[0]);
    //var_dump($url);
        switch($url){
            case '/':
                header("Location: http://localhost:5000/inicio");
            break;
            case '/inicio':
                getHeader();
                include('View/home.php');
                getFooter();
            break;
            case '/artigos':
                getHeader();
                include('View/artigos.php');
                getFooter();
            break;
            case '/contato':
                getHeader();
                include('View/contato.php');
                getFooter();
            break;
            case '/dissertacoes':
                getHeader();
                include('View/dissertacoes.php');
                getFooter();
            break;
            case '/galeria':
                getHeader();
                include('View/galeria.php');
                getFooter();
            break;
            case '/linhas-de-pesquisa':
                getHeader();
                include('View/linhasDePesquisa.php');
                getFooter();
            break;
            case '/livros':
                getHeader();
                include('View/livros.php');
                getFooter();
            break;
            case '/membros':
                getHeader();
                include('View/membros.php');
                getFooter();
            break;
            case '/noticias':
                getHeader();
                include('View/noticias.php');
                getFooter();
            break;
            case '/tccs':
                getHeader();
                include('View/TCCs.php');
                getFooter();
            break;
            case '/teses':
                getHeader();
                include('View/teses.php');
                getFooter();
            break;
            case '/adm':
                getHeader();
                include('View/administrador.php');
                getFooter();
            break;
            case '/teste':
                function conexao(){
                    $db = pg_connect("host=localhost; port=5433; dbname=geoma; user=postgres; password=postgres;");
                    return $db;
                }
                conexao();
                //include('Model/teste.php');
            break;
            default:
                include('View/404.php');
            break;

    }

}

function getHeader(){include('View/header.php');}
function getFooter(){include('View/footer.php');}
?>