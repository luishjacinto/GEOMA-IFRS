<!DOCTYPE html>
<title>Adm</title>
<?php include('View/Adm/header.php'); ?>
		<div class="col-10 hg-90">
			<br>
			<div class="container-fluid">
				Membros Cadastrados: <?php echo $data[4] ?>
				<br>
				Linhas de Pesquisa Cadastrados: <?php echo $data[8] ?>
				<br>
				Notícias Cadastrados: <?php echo $data[5] ?>
				<br>
				Artigos Cadastrados: <?php echo $data[0] ?>
				<br>	
				Dissertaçoes Cadastrados: <?php echo $data[1] ?>
				<br>
				Livros Cadastrados: <?php echo $data[3] ?>
				<br>
				Tccs Cadastrados: <?php echo $data[6] ?>
				<br>
				Teses Cadastrados: <?php echo $data[7] ?>
				<br>
				Fotos Postadas: <?php echo $data[2] ?>
			</div>
		</div>
	</div>
<?php include('View/Adm/footer.php'); ?>
