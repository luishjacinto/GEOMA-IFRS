<!DOCTYPE html>
<title>Administração - Linhas de Pesquisa</title>
<?php include('View/Adm/header.php'); ?>

<div class="col-10 pd-0 main-section">
	<br>
	<h3 class="text-center">Linhas de Pesquisa</h3>
	<div class="container-fluid-adm lista radiusLeft">
		<table class="table1 table table-striped table-dark text-center">
			<?php echo $data ?>
		</table>
	</div>
	<br>

	<h3 class="text-center">Adicionar Linha de Pesquisa</h3>
	<div class="container-fluid-adm formsCRUD">
		<form method="POST" action="criar_linha" enctype="multipart/form-data">
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" name="nome" placeholder="Insira o nome da linha de pesquisa" required>
			</div>
			<button type="submit" class="btn btn-primary">Adicionar Linha de Pesquisa</button>
		</form>
	</div>
	<br>
</div>
</div>
<?php include('View/Adm/footer.php'); ?>
