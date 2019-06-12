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
                $data = getProducaoArtigos();
                include('View/Client/artigos.php');
            break;
            case '/contato':
                include('View/Client/contato.php');
            break;
            case '/dissertacoes':
                $data = getProducaoDissertacoes();
                include('View/Client/dissertacoes.php');
            break;
            case '/galeria':
                $data = getGaleria();
                include('View/Client/galeria.php');
            break;
            case '/buscar_imagem':
                $foto = buscarGaleria($id);                
                echo json_encode($foto);
            break;
            case '/linhas-de-pesquisa':
                $data = getLinhasPesquisa();
                include('View/Client/linhasDePesquisa.php');
            break;
            case '/livros':
                $data = getProducaoLivros();
                include('View/Client/livros.php');
            break;
            case '/membros':
                $data = getCardMembros();
                include('View/Client/membros.php');
            break;
            case '/noticias':
                $data = getNoticia();
                $data2 = getListaNoticias();
                include('View/Client/noticias.php');
            break;
            case '/buscar_noticia':
                $noticia = buscarNoticia($id);
                $membro = buscarMembro($noticia['membro']); 
                $noticia['membro'] = $membro['nome'];   
                echo json_encode($noticia);
            break;
            case '/tccs':
                $data = getProducaoTccs();
                include('View/Client/TCCs.php');
            break;
            case '/teses':
                $data = getProducaoTeses();
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
                //include('Model/teste.php');
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
                        $data = getContadores();
                        include('View/Adm/inicio.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            //MEMBROS
            //////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////
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
            case '/criar_membro':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        criarMembro();
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/editar_membro':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        $data = buscarFormMembro($id);
                        include('View/Adm/Forms/formMembros.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/atualizar_membro':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        atualizarMembro($id);
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/deletar_membro':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        header("Location: /adm_membros");
                        deletarMembro($id);
                    }          
                }else{
                    header("Location: /adm");
                }  
            break;
            //NOTICIAS
            //////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////
            case '/adm_noticias':                    
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        $data = getNoticias();
                        $membros = getSelectOptions();
                        include('View/Adm/noticias.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/criar_noticia':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        criarNoticia();
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/editar_noticia':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        $data = buscarFormNoticia($id);
                        include('View/Adm/Forms/formNoticias.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/atualizar_noticia':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        atualizarNoticia($id);
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/deletar_noticia':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        header("Location: /adm_noticias");
                        deletarNoticia($id);
                    }          
                }else{
                    header("Location: /adm");
                }  
            break;
            //ARTIGOS
            //////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////
            case '/adm_artigos':
            if(isset($_SESSION['administrador'])){
                $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                if(isset($administradorVerificado)){
                    $data = getArtigos();
                    $membros = getSelectOptions();
                    include('View/Adm/artigos.php');
                }
            }else{
                header("Location: /adm");
            }
            break;
            case '/criar_artigo':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        criarArtigo();
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/editar_artigo':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        $data = buscarFormArtigo($id);
                        include('View/Adm/Forms/formArtigos.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/atualizar_artigo':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        atualizarArtigo($id);
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/deletar_artigo':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        header("Location: /adm_artigos");
                        deletarArtigo($id);
                    }          
                }else{
                    header("Location: /adm");
                }  
            break;
            //LIVROS
            //////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////
            case '/adm_livros':
            if(isset($_SESSION['administrador'])){
                $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                if(isset($administradorVerificado)){
                    $data = getLivros();
                    $membros = getSelectOptions();
                    include('View/Adm/livros.php');
                }
            }else{
                header("Location: /adm");
            }
            break;
            case '/criar_livro':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        criarLivro();
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/editar_livro':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        $data = buscarFormLivro($id);
                        include('View/Adm/Forms/formLivros.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/atualizar_livro':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        atualizarLivro($id);
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/deletar_livro':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        header("Location: /adm_livros");
                        deletarLivro($id);
                    }          
                }else{
                    header("Location: /adm");
                }  
            break;
            //TCCs
            //////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////
            case '/adm_tccs':
            if(isset($_SESSION['administrador'])){
                $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                if(isset($administradorVerificado)){
                    $data = getTccs();
                    $membros = getSelectOptions();
                    include('View/Adm/tccs.php');
                }
            }else{
                header("Location: /adm");
            }
            break;
            case '/criar_tcc':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        criarTcc();
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/editar_tcc':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        $data = buscarFormTcc($id);
                        include('View/Adm/Forms/formTccs.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/atualizar_tcc':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        atualizarTcc($id);
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/deletar_tcc':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        header("Location: /adm_tccs");
                        deletarTcc($id);
                    }          
                }else{
                    header("Location: /adm");
                }  
            break;
            //TESES
            //////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////
            case '/adm_teses':
            if(isset($_SESSION['administrador'])){
                $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                if(isset($administradorVerificado)){
                    $data = getTeses();
                    $membros = getSelectOptions();
                    include('View/Adm/teses.php');
                }
            }else{
                header("Location: /adm");
            }
            break;
            case '/criar_tese':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        criarTese();
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/editar_tese':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        $data = buscarFormTese($id);
                        include('View/Adm/Forms/formTeses.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/atualizar_tese':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        atualizarTese($id);
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/deletar_tese':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        header("Location: /adm_teses");
                        deletarTese($id);
                    }          
                }else{
                    header("Location: /adm");
                }  
            break;
            //DISSERTACOES
            //////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////
            case '/adm_dissertacoes':
            if(isset($_SESSION['administrador'])){
                $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                if(isset($administradorVerificado)){
                    $data = getDissertacoes();
                    $membros = getSelectOptions();
                    include('View/Adm/dissertacoes.php');
                }
            }else{
                header("Location: /adm");
            }
            break;
            case '/criar_dissertacao':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        criarDissertacao();
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/editar_dissertacao':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        $data = buscarFormDissertacao($id);
                        include('View/Adm/Forms/formDissertacoes.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/atualizar_dissertacao':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        atualizarDissertacao($id);
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/deletar_dissertacao':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        header("Location: /adm_dissertacoes");
                        deletarDissertacao($id);
                    }          
                }else{
                    header("Location: /adm");
                }  
            break;
            //GALERIA
            //////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////
            case '/adm_fotos':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        $data = getFotos();
                        include('View/Adm/galeria.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/criar_foto':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        criarFoto();
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/editar_foto':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        $data = buscarFormFoto($id);
                        include('View/Adm/Forms/formFoto.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/atualizar_foto':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        atualizarFoto($id);
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/deletar_foto':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        header("Location: /adm_fotos");
                        deletarGaleria($id);
                    }          
                }else{
                    header("Location: /adm");
                }  
            break;
            //LINHA
            //////////////////////////////////////////////////////////////////////////////
            //////////////////////////////////////////////////////////////////////////////
            case '/adm_linhas':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        $data = getLinhas();
                        include('View/Adm/LinhasDePesquisa.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/criar_linha':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        criarLinha();
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/editar_linha':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        $data = buscarFormLinha($id);
                        include('View/Adm/Forms/formLinhas.php');
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/atualizar_linha':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){                        
                        atualizarLinha($id);
                    }
                }else{
                    header("Location: /adm");
                }
            break;
            case '/deletar_linha':
                if(isset($_SESSION['administrador'])){
                    $administradorVerificado = verificarAdmLogin($_SESSION['administrador']);
                    if(isset($administradorVerificado)){
                        header("Location: /adm_linhas");
                        deletarLinha($id);
                    }          
                }else{
                    header("Location: /adm");
                }  
            break;
            //DEFAULT
            default:
                include('View/404.php');
            break;
    }

}
?>