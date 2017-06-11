<!DOCTYPE html>
<html>
<head>
<?php include 'tpl/head.php'; ?>
</head>
<body>
<?php include 'tpl/header.php'; ?>
	
	<div class="col-xs-12 buscador">
		<div class="container sinpa">
			<h1>Buscador</h1>
			<form action="">
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">Nombre completo</p>
					<input name="nombre" id="nombre" type="text" disabled="true" value="Edwin Junior Deza Culque" class="col-xs-12 col-md-9" >
				</div>
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class="sinpa col-md-3 col-xs-12">DNI</p>
					<input name="dni" id="dni" type="text" disabled="true" value="71834023" class="col-xs-12 col-md-9" >
				</div>
				
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class=" sinpa col-md-3 col-xs-12">Fecha de Inicio</p>
					<input type="text" disabled="true" name="fechaini" id="fechaini" value="23/03/2016" class="col-xs-12 col-md-9" >
				</div>
				<div class=" col-xs-12 col-md-6 input-content sinpa_sm">
					<p class=" sinpa col-md-3 col-xs-12">Fecha de Fin</p>
					<input type="text" disabled="true" name="fechafin" id="fechafin" value="23/03/2017" class="col-xs-12 col-md-9" >
				</div>
			</form>
		</div>
	</div>
	<div class="buscador-resultado">
		<div class="container ">
			<h2>Resultados</h2>
			<div class="table-responsive">
				
				<table class="table table-bordered">
				    <thead>
				      <tr>
				        <th><b>#</b></th>
				        <td><b>Fecha</b></td>
				        <th><b>Disco</b></th>
				        <th><b>Directorio</b></th>
				        <td width="50px"><b>Abrir</b></td>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>1</td>
				        <td>15/03/2017</td>
				        <td>Local</td>
				        <td>C//soft/local/71834023/</td>
				        <td><center><a href="#"><img src="app/img/inicio/folder.png" alt=""></a></center></td>
				      </tr>
				      <tr>
				        <td>2</td>
				        <td>5/03/2017</td>
				        <td>Local</td>
				        <td>C//soft/local/71834023/</td>
				        <td><center><a href="#"><img src="app/img/inicio/folder.png" alt=""></a></center></td>
				      </tr>
				      <tr>
				        <td>3</td>
				        <td>15/01/2017</td>
				        <td>BackUp1</td>
				        <td>No disponible</td>
				        <td><center><a href="#"><img src="app/img/inicio/x.png" alt=""></a></center></td>
				      </tr>
				    </tbody>
				</table>
				
			</div>
		</div>
	</div>
<?php include 'tpl/footer.php'; ?>
</body>
</html>