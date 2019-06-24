<!DOCTYPE html>
<title>Administração - Teses</title>
<?php include('View/Adm/header.php'); ?>

<div class="col-10 pd-0 main-section">
	<br>
	<h3 class="text-center">Teses</h3>
	<div class="container-fluid-adm lista radiusLeft">
		<table class="table1 table table-striped table-dark text-center">
			<?php echo $data ?>
		</table>
	</div>
	<br>

	<h3 class="text-center">Adicionar Tese</h3>
	<div class="container-fluid-adm formsCRUD">
		<form method="POST" action="criar_tese" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" name="nome" placeholder="Insira o nome do TCC" required>
			</div>
			<div class="form-group">
				<label for="caminho">Link para Tese</label>
				<input type="text" class="form-control" name="caminho" placeholder="Insira o link do TCC" required>
			</div>
			<label for="membro">Autor</label>
			<select name="membro" class="form-control form-control-sm" required>
				<?php echo $membros ?>
			</select>
			<br>
			<button type="submit" class="btn btn-primary">Adicionar Tese</button>
		</form>
	</div>
	<br>
</div>
</div>
<?php include('View/Adm/footer.php'); ?>
