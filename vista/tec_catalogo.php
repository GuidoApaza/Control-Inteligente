<?php 
session_start();
if ($_SESSION['us_tipo']==2) {
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tecnico</title>
</head>
<body>
	<h1>Hola Tecnico</h1>
	<a href="../controlador/Logout.php">Cerrar Sesion</a>
	<div class="card-body">
		      		<div class="alert alert-success text-center" id="add" style="display: none;">
		        		<span><i class="fas fa-check m-1"></i>Se agrego correctamente</span>
		       		 </div>
		        	<div class="alert alert-danger text-center" id="noadd" style="display: none;">
		        		<span><i class="fas fa-times m-1"></i>El C.I ya existe en otro usuario</span>
		       		 </div>
		      		<form id="form-crear">
		      			<div class="form-group">
		      				<label for="nombre">Nombres</label>
		      				<input id="nombre" type="text" class="form-control" placeholder="Ingrese nombre" required>
		      			</div>
		      			<div class="form-group">
		      				<label for="apellido">Apellidos</label>
		      				<input id="apellido" type="text" class="form-control" placeholder="Ingrese apellido" required>
		      			</div>
		      			<div class="form-group">
		      				<label for="edad">Nacimiento</label>
		      				<input id="edad" type="date" class="form-control" placeholder="Ingrese nacimiento" required>
		      			</div>
		      			<div class="form-group">
		      				<label for="dni">C.I</label>
		      				<input id="dni" type="text" class="form-control" placeholder="Ingrese C.I" required>
		      			</div>
						  <div class="form-group">
		      				<label for="dir">Direccion</label>
		      				<input id="dir" type="text" class="form-control" placeholder="Ingrese su Dirreccion" required>
		      			</div>
						  <div class="form-group">
		      				<label for="cel">Celular</label>
		      				<input id="cel" type="text" class="form-control" placeholder="Ingrese Celular" required>
		      			</div>
						  <div class="form-group">
		      				<label for="tel">Telefono</label>
		      				<input id="tel" type="text" class="form-control" placeholder="Ingrese Telefono" required>
		      			</div>
		      			<div class="form-group">
		      				<label for="pass">Contraseña</label>
		      				<input id="pass" type="password" class="form-control" placeholder="Ingrese contraseña" required>
		      			</div>
	      		</div>
		   
</body>
</html>
<?php 
}
else{
header('Location:../index.php');
}

 ?>