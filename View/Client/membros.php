<!DOCTYPE html>
<title>Membros</title>
<?php include('View/Client/header.php'); ?>
<div class="container-fluid">
	<h2 class="text-center titulo-padrao">MEMBROS DO GRUPO</h2>
	<hr class="divisoria">
	<h4 class="text-center titulo-membros">Líderes:</h4>

	<!-- DECK MUDAR? -->
	<div class="card-deck" style="margin-left: 10%; margin-top: 5%; width: 80%; height: 80%;">

		<div class="card bg-dark">
			<img class="card-img-top" src="View/Imagens/avatar.jpg" alt="Card image" style="padding: 8% 8% 0% 8%;">
			<div class="card-body">
				<h4 class="card-title">Jean Marcel de Almeida Espinoza</h4>
				<a href="#" class="btn btn-light btn-block">Currículo Lattes</a>
			</div>
		</div>
		<div class="card bg-dark" id="ct2">
			<img class="card-img-top" src="View/Imagens/miguel.jpg" alt="Card image" style="padding: 8% 8% 0% 8%;">
			<div class="card-body">
				<h4 class="card-title">Miguel da Guia Albuquerque</h4>
				<a href="#" class="btn btn-light btn-block">Currículo Lattes</a>
			</div>
		</div>
	</div>
</div>
<?php include('View/Client/footer.php'); ?>