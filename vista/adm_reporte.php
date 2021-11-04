<?php 
session_start();
if ($_SESSION['us_tipo']==1){
	include_once 'layouts/header.php';
?>
	 <title>Adm|Reportes de Ventas</title>
	  <!-- Tell the browser to be responsive to screen width -->
		<?php 
			include_once 'layouts/nav.php';
		 ?>	
		 <!-- ModalVentas-->
<div class="modal fade" id="vista_venta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl">
	    <div class="modal-content">
	      	<div class="card card-success">
		      	<div class="card-header">
		      		<h3 class="card-title">Registro de venta</h3>
		      		<button data-dismiss="modal" aria-label="close" class="close">
		      			<span arial-hidden="true">&times;</span>
		      		</button>
		      	</div>
	      		<div class="card-body">
		      		<div class="form-group">
		      			<label for="codigo_venta">Codigo Venta: </label>
		      			<span id="codigo_venta"></span>
		      		</div>
		      		<div class="form-group">
		      			<label for="fecha">Fecha: </label>
		      			<span id="fecha"></span>
		      		</div>
		      		<div class="form-group">
		      			<label for="cliente">Cliente: </label>
		      			<span id="cliente"></span>
		      		</div>
		      		<div class="form-group">
		      			<label for="dni">C.I: </label>
		      			<span id="dni"></span>
		      		</div>
		      		<div class="form-group">
		      			<label for="vendedor">Vendedor: </label>
		      			<span id="vendedor"></span>
		      		</div>
		      		<table class="table table-hover text-nowrap">
		      			<thead class="table-success">
		      				<tr>
		      					<th>Cantidad</th>
		      					<th>Precio</th>
		      					<th>Producto</th>
		      					<th>Concentracion</th>
		      					<th>Laboratorio</th>
		      					<th>Presentacion</th>
		      					<th>Tipo</th>
		      					<th>Subtotal</th>
		      				</tr>
		      			</thead>
		      			<tbody class="table-warning" id="registros">
						  <div class="card-body">
                    <div class="alert alert-success text-center" id="add" style="display: none;">
                        <span><i class="fas fa-check m-1"></i>Se agrego correctamente</span>
                    </div>
                    <div class="alert alert-danger text-center" id="noadd" style="display: none;">
                        <span><i class="fas fa-times m-1"></i>El C.I ya existe</span>
                    </div>
                    <div class="alert alert-success text-center" id="edit-client" style="display: none;">
                        <span><i class="fas fa-check m-1"></i>Se edito correctamente</span>
                     </div>
                    <form id="form-crear-cliente">		
		      			</tbody>
		      		</table>
		      		<div class="float-md-right input-group-append">
		      			<h3 class="m-3">Total: </h3>
		      			<h3 class="m-3" id="total"></h3>
		      		</div>
	      		</div>
		      	<div class="card-footer">		      		
		      		<button type="button" data-dismiss="modal" class="btn btn-outline-secondary float-right m-1">Cerrar</button>
		      	</div>
	    	</div>
		</div>
 	</div>
</div>	
	  <!-- Content Wrapper. Contains page content -->
	 
	  <!-- /.content-wrapper -->
	  <!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-6">
	            <h1>Reporte de Ventas</h1>
	          </div>
	          <div class="col-sm-6">
	            <ol class="breadcrumb float-sm-right">
	              <li class="breadcrumb-item"><a href="#">Home</a></li>
	              <li class="breadcrumb-item active">Reporte de ventas</li>
	            </ol>
	          </div>
	        </div>
	      </div><!-- /.container-fluid -->
	    </section>

	  
<?php 
	include_once 'layouts/footer.php';
}
else{
header('Location:../index.php');
}

?>
<script src="../js/datatables.js"></script>
 <script src="../js/reporte.js"></script>

