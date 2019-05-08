<!DOCTYPE html>
<title>Adm - Fotos</title>
<?php include('View/Adm/header.php'); ?>
	<div class="col-10 pd-0 main-section">
		<br>
		<h3 class="text-center">Fotos</h3>
		<div class="container-fluid-adm galeria-adm radiusLeft img-container">
			<?php echo $data ?>
		</div>
		<br>
		<h3 class="text-center">Adicionar Foto</h3>
		<div class="container-fluid-adm formsCRUD">
			<form method="POST" action="criar_foto" enctype="multipart/form-data">
				<div class="form-group">
					<label for="legenda">Legenda</label>
					<input type="text" class="form-control" name="legenda" placeholder="Insira a legenda da Foto" required>
				</div>
				<div class="form-group">
					<label for="arquivo">Foto</label>
					<input type="file" name="arquivo" class="form-control-file" id="">
				</div>
				<br>
				<button type="submit" class="btn btn-primary">Adicionar Foto</button>
			</form>
		</div>
		<br>
	</div>
</div>
<?php include('View/Adm/footer.php'); ?>
