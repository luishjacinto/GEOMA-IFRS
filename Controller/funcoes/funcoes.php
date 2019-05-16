<?php 
//FUNÇÕES CLIENT
include('Controller/funcoes/Client/getGaleria.php');


//FUNÇÕES ADM
include('Controller/funcoes/Adm/deslogar.php');
include('Controller/funcoes/Adm/logar.php');
include('Controller/funcoes/Adm/redirectAdm.php');
include('Controller/funcoes/Adm/getSelectOptions.php');
include('Controller/funcoes/Adm/montaCargos.php');
include('Controller/funcoes/Adm/montaMembros.php');
include('Controller/funcoes/Adm/getContadores.php');

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
include('Controller/funcoes/Adm/Read/getTccs.php');
include('Controller/funcoes/Adm/Read/buscarFormTcc.php');  
include('Controller/funcoes/Adm/Update/atualizarTcc.php');

include('Controller/funcoes/Adm/Create/criarTese.php');  
include('Controller/funcoes/Adm/Read/getTeses.php');
include('Controller/funcoes/Adm/Read/buscarFormTese.php');  
include('Controller/funcoes/Adm/Update/atualizarTese.php');

include('Controller/funcoes/Adm/Create/criarDissertacao.php');  
include('Controller/funcoes/Adm/Read/getDissertacoes.php');
include('Controller/funcoes/Adm/Read/buscarFormDissertacao.php');  
include('Controller/funcoes/Adm/Update/atualizarDissertacao.php');

include('Controller/funcoes/Adm/Create/criarNoticia.php');  
include('Controller/funcoes/Adm/Read/getNoticias.php');
include('Controller/funcoes/Adm/Read/buscarFormNoticia.php');  
include('Controller/funcoes/Adm/Update/atualizarNoticia.php');

include('Controller/funcoes/Adm/Create/criarFoto.php');  
include('Controller/funcoes/Adm/Read/getFotos.php');
include('Controller/funcoes/Adm/Read/buscarFormFoto.php');  
include('Controller/funcoes/Adm/Update/atualizarFoto.php');

include('Controller/funcoes/Adm/Create/criarLinha.php');  
include('Controller/funcoes/Adm/Read/getLinhas.php');
include('Controller/funcoes/Adm/Read/buscarFormLinha.php');  
include('Controller/funcoes/Adm/Update/atualizarLinha.php');
?>