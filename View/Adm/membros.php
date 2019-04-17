<!DOCTYPE html>
<title>Adm - Membros</title>
<?php include('View/Adm/header.php'); ?>

<div class="col-10 pd-0">
	<br>
	<h3 class="text-center">Membros</h3>

	<div class="container-fluid-adm lista">
		<table class="table1 table table-striped table-dark text-center">
			<?php echo $data ?>
			<!--<thead>
				<tr>
					<th scope="col">id</th>
					<th scope="col">Nome</th>
					<th scope="col">Cargo</th>
					<th scope="col">Lattes</th>
					<th>Ações</th>
				</tr>
			</thead>
			<tbody class="">
				<tr>
					<td scope="row">1</td>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
					<td>
						<a href="/editar_membro?1" class="mg-20"><i class=material-icons>edit</i></a>
						<a href="/deletar_membro?1"><i class=material-icons>delete</i></a>
					</td>
				</tr>
				<tr>
					<td scope="row">2</td>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@fat</td>
				</tr>
			</tbody>-->
		</table>
	</div>
	<br>
	<div class="container-fluid-adm formsCRUD">
		<form method="POST" action="">
			<div class="form-group">
				<label for="name">Nome</label>
				<input type="text" class="form-control" name="name" placeholder="Insira o nome do membro">
			</div>
			<div class="form-group">
				<label for="cargo">Curriculo Lattes</label>
				<input type="text" class="form-control" name="lattes" placeholder="Insira o nome do membro">
			</div>
			<label for="cargo">Cargo</label>
			<select class="form-control form-control-sm">
				<option>Pesquisador</option>
				<option>nao sei</option>
			</select>
			<br>
			<div class="form-group">
				<label for="exampleFormControlFile1">Foto do membro</label>
				<input type="file" class="form-control-file" id="">
			</div>
			<button type="submit" class="btn btn-primary">Adicionar Membro</button>
		</form>
	</div>
	<br>
</div>
</div>
<?php include('View/Adm/footer.php'); ?>
