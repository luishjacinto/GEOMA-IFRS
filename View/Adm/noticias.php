<!DOCTYPE html>
<title>Adm - Noticias</title>
<?php include('View/Adm/header.php'); ?>

<div class="col-10 pd-0 main-section">
	<br>
	<h3 class="text-center">Notícias</h3>
	<div class="container-fluid-adm lista radiusLeft">
		<table class="table1 table table-striped table-dark text-center">
			<?php echo $data ?>
		</table>
	</div>
	<br>

	<h3 class="text-center">Adicionar Notícia</h3>
	<div class="container-fluid-adm formsCRUD">
		<form method="POST" action="criar_noticia" enctype="multipart/form-data">
			<div class="form-group">
				<label for="titulo">Titulo</label>
				<input type="text" class="form-control" name="titulo" placeholder="Insira o titulo da notícia" required>
			</div>
			<div class="form-group">
				<label for="conteudo">Conteudo</label>
				<input type="text" class="form-control" name="conteudo" placeholder="Insira o conteudo da notícia" required>
			</div>
			<label for="membro">Autor</label>
			<select name="membro" class="form-control form-control-sm" required>
				<?php echo $membros ?>
			</select>
			<br>
			<button type="submit" class="btn btn-primary">Adicionar Notícia</button>
		</form>
	</div>
	<br>
</div>
</div>
<?php include('View/Adm/footer.php'); ?>
