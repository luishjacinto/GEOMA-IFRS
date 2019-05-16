<!DOCTYPE html>
<title>Adm - Membros</title>
<?php include('View/Adm/header.php'); ?>

<div class="col-10 pd-0 main-section">
	<br>
	<h3 class="text-center">Membros</h3>
	<div class="container-fluid-adm lista radiusLeft">
		<table class="table1 table table-striped table-dark text-center">
			<?php echo $data ?>
		</table>
	</div>
	<br>

	<h3 class="text-center">Adicionar Membro</h3>
	<div class="container-fluid-adm formsCRUD">
		<form method="POST" action="criar_membro" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" name="nome" placeholder="Insira o nome do membro" required>
			</div>
			<div class="form-group">
				<label for="cargo">Curriculo Lattes</label>
				<input type="text" class="form-control" name="lattes" placeholder="Insira o nome do membro" required>
			</div>
			<label for="cargo">Cargo</label>
			<select name="cargo" class="form-control form-control-sm" required>
				<option value="0">Pesquisador</option>
				<option value="1">Técnico</option>
				<option value="2">Estudante</option>
			</select>
			<br>
			<div class="form-group">
				<label for="arquivo">Foto do membro</label>
				<input type="file" name="arquivo" class="form-control-file" id="">
			</div>
			<button type="submit" class="btn btn-primary">Adicionar Membro</button>
		</form>
	</div>
	<br>
</div>
</div>
<?php include('View/Adm/footer.php'); ?>
