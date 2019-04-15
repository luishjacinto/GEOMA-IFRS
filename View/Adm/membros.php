<!DOCTYPE html>
<title>Adm - Membros</title>
	
		<div class="col-10 pd-0">
			<br>				
			<h3 class="text-center">Membros</h3>
			<table class="table table-striped table-dark mg-0 table-title">
				<thead>
					<tr>
						<th scope="col">id</th>
						<th scope="col">Nome</th>
						<th scope="col">Cargo</th>
						<th scope="col">Lattes</th>
						<th scope="col">Ações</th>
					</tr>
				</thead>
			</table>
			<div class="container-fluid-adm lista">
				<table class="table table-striped table-dark">
					<?php getData(); ?>

						<tbody class="">
							<tr>
							<th scope="row">1</th>
								<td>Mark</td>
								<td>Otto</td>
								<td>@mdo</td>
								<td><button type="button" class="btn btn-primary">
									<i class="material-icons">edit</i></button>
									<button type="button" class="btn btn-danger"><i class="material-icons">delete</i></button>
								</td>
							</tr>
							<tr>
							<th scope="row">2</th>
								<td>Jacob</td>
								<td>Thornton</td>
								<td>@fat</td>
							</tr>
							<tr>
							<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
							<tr>
							<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
							<tr>
							<th scope="row">3</th>
								<td>Larry</td>
								<td>the Bird</td>
								<td>@twitter</td>
							</tr>
						</tbody>
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
