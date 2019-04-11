<?php
include("Model/Crud/Model.php");
function getPagina()
{
    session_set_cookie_params(25920000);
    session_start();
 	//error_reporting(0);
	$url = $_SERVER['REQUEST_URI'];
	$url = strtolower(explode("?",$url)[0]);
    //var_dump($url);
        switch($url){
            case '/':
                header("Location: /inicio");
            break;
            case '/inicio':
                getHeader();
                include('View/Client/home.php');
                getFooter();
            break;
            case '/artigos':
                getHeader();
                include('View/Client/artigos.php');
                getFooter();
            break;
            case '/contato':
                getHeader();
                include('View/Client/contato.php');
                getFooter();
            break;
            case '/dissertacoes':
                getHeader();
                include('View/Client/dissertacoes.php');
                getFooter();
            break;
            case '/galeria':
                getHeader();
                include('View/Client/galeria.php');
                getFooter();
            break;
            case '/linhas-de-pesquisa':
                getHeader();
                include('View/Client/linhasDePesquisa.php');
                getFooter();
            break;
            case '/livros':
                getHeader();
                include('View/Client/livros.php');
                getFooter();
            break;
            case '/membros':
                getHeader();
                include('View/Client/membros.php');
                getFooter();
            break;
            case '/noticias':
                getHeader();
                include('View/Client/noticias.php');
                getFooter();
            break;
            case '/tccs':
                getHeader();
                include('View/Client/TCCs.php');
                getFooter();
            break;
            case '/teses':
                getHeader();
                include('View/Client/teses.php');
                getFooter();
            break;
            case '/adm':
                if(isset($_SESSION['administrador'])){
                    $cookie_name = "administrador";
                    $cookie_value = $_SESSION['administrador'];
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
                    header("Location: /adm_inicio");
                }else{
                    getHeader();
                    include('View/Client/administrador.php');
                    getFooter();
                }
            break;
            case '/teste':
                include('Model/teste.php');
            break;
            case '/logar':
                $adm=[
                    'nickname'=>$_POST['nickname'],
                    'senha'=>$_POST['senha']
                ];
                echo $administrador=buscarAdmLogin($adm);
                if($administrador!=null){
                    $_SESSION['administrador'] = $_POST['nickname'];
                    $cookie_name = "administrador";
                    $cookie_value = $_SESSION['administrador'];
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
                    $_SESSION['administrador']=$administrador;                
                    header("Location: /adm_inicio");
                }else{
                    header("Location: /adm");
                }
            break;
            case '/adm_inicio':                    
                if(isset($_SESSION['administrador'])){

                    getHeaderAdm();
                    include('View/Adm/inicio.php');
                    getFooterAdm();

                }else{
                    header("Location: /adm");
                }
            break;
            default:
                include('View/404.php');
            break;
    }

}

function getHeader(){include('View/Client/header.php');}
function getFooter(){include('View/Client/footer.php');}
function getHeaderAdm(){include('View/Adm/header.php');}
function getFooterAdm(){include('View/Adm/footer.php');}

?>