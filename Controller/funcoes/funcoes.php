<?php 
//FUNÇÕES ADM
include('Controller/funcoes/Adm/deslogar.php');
include('Controller/funcoes/Adm/logar.php');
include('Controller/funcoes/Adm/redirectAdm.php');
include('Controller/funcoes/Adm/getSelectOptions.php');
include('Controller/funcoes/Adm/montaCargos.php');
include('Controller/funcoes/Adm/montaMembros.php');

//CRUD
include('Controller/funcoes/Adm/Create/criarMembro.php');
include('Controller/funcoes/Adm/Read/getMembros.php');
include('Controller/funcoes/Adm/Read/buscarFormMembro.php');
include('Controller/funcoes/Adm/Update/atualizarMembro.php');

include('Controller/funcoes/Adm/Create/criarArtigo.php');  
include('Controller/funcoes/Adm/Read/getArtigos.php');  
include('Controller/funcoes/Adm/Read/buscarFormArtigo.php');  
include('Controller/funcoes/Adm/Update/atualizarArtigo.php');  

include('Controller/funcoes/Adm/Create/criarLivro.php');  
include('Controller/funcoes/Adm/Read/getLivros.php');
include('Controller/funcoes/Adm/Read/buscarFormLivro.php');  
include('Controller/funcoes/Adm/Update/atualizarLivro.php');  

include('Controller/funcoes/Adm/Create/criarTcc.php');  
include('Controller/funcoes/Adm/Read/getTcc.php');
include('Controller/funcoes/Adm/Read/buscarFormTcc.php');  
include('Controller/funcoes/Adm/Update/atualizarTcc.php');  
?>