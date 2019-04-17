<?php
include("Model/Crud/Model.php");
include("Controller/funcoes/funcoes.php");
function getPagina()
{
    session_set_cookie_params(25920000);
    session_start();
 	//error_reporting(0);
	$path = $_SERVER['REQUEST_URI'];
	$url = strtolower(explode("?",$path)[0]);
    //var_dump($url);
    if(isset(explode("?",$path)[1])){
        $id = explode("?",$path)[1];
    }

        switch($url){
            case '/':
                header("Location: /inicio");
            break;
            case '/inicio':
                include('View/Client/home.php');
            break;
            case '/artigos':
                include('View/Client/artigos.php');
            break;
            case '/contato':
                include('View/Client/contato.php');
            break;
            case '/dissertacoes':
                include('View/Client/dissertacoes.php');
            break;
            case '/galeria':
                include('View/Client/galeria.php');
            break;
            case '/linhas-de-pesquisa':
                include('View/Client/linhasDePesquisa.php');
            break;
            case '/livros':
                include('View/Client/livros.php');
            break;
            case '/membros':
                include('View/Client/membros.php');
            break;
            case '/noticias':
                include('View/Client/noticias.php');
            break;
            case '/tccs':
                include('View/Client/TCCs.php');
            break;
            case '/teses':
                include('View/Client/teses.php');
            break;
            case '/adm':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        redirectAdm();
                    }
                }else{
                    include('View/Client/administrador.php');
                }
            break;
            case '/teste':
                include('Model/teste.php');
            break;
            case '/logar':
                logar();
            break;  
            case '/deslogar':
                deslogar();
            break;
            case '/adm_inicio':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        include('View/Adm/inicio.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            //MEMBROS
            case '/adm_membros':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        $data = getMembros();

                        include('View/Adm/membros.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/editar_membro':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        //pagina de form para edição
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/deletar_membro':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        //func de deletar                    
                        header("Location: /adm_membros");
                        deletarMembro($id);
                    }          
                }else{
                    header("Location: /adm");
                }  
            break;
            //NOTICIAS
            case '/adm_noticias':                    
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        include('View/Adm/membros.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            default:
                include('View/404.php');
            break;
    }

}

function getHeaderAdm(){include('View/Adm/header.php');}
function getFooterAdm(){include('View/Adm/footer.php');}

?>