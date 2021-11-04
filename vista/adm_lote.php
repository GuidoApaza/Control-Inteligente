<?php 
session_start();
if ($_SESSION['us_tipo']==1){
	include_once 'layouts/header.php';
?>

	  <title>Adm|Gestion Lote</title>
	  <!-- Tell the browser to be responsive to screen width -->
		<?php 
			include_once 'layouts/nav.php';
		 ?>	

<!-- ModalCrearLote -->
<div class="modal fade" id="editarlote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content">
	      	<div class="card card-primary">
		      	<div class="card-header">
		      		<h3 class="card-title">Editar lote</h3>
		      		<button data-dismiss="modal" aria-label="close" class="close">
		      			<span arial-hidden="true">&times;</span>
		      		</button>
		      	</div>
	      		<div class="card-body">
		      		<div class="alert alert-success text-center" id="edit-lote" style="display: none;">
		        		<span><i class="fas fa-check m-1"></i>Se modiico correctamente</span>
		       		</div>		        
		      		<form id="form-editar-lote">
		      			<div class="form-group">
		      				<label for="codigo_lote" for="stock">Codigo lote: </label>
		      				<label id="codigo_lote" >Codigo lote</label>		      				
		      			</div>		      			
		      			<div class="form-group">
		      				<label for="stock">Stock</label>
		      				<input id="stock" type="text" class="form-control" placeholder="Ingrese Sotck" required>
		      			</div>		
						  <div class="form-group">
		      				<label for="venta">Venta</label>
		      				<input id="venta" type="text" class="form-control" placeholder="Ingrese vneta" required>
		      			</div>	      					
		      			<input type="hidden" id="id_lote_prod"> 
	      		</div>
		      	<div class="card-footer">
		      		<button type="submit" class="btn bg-gradient-primary float-right m-1">Guardar</button>
		      		</form>
		      		<button type="button" data-dismiss="modal" class="btn btn-outline-secondary float-right m-1">Cerrar</button>
		      	</div>
	    	</div>
		</div>
 	</div>
</div>

	  <!-- Content Wrapper. Contains page content -->
	  <div class="content-wrapper">
	    <!-- Content Header (Page header) -->
	    <section class="content-header">
	      <div class="container-fluid">
	        <div class="row mb-2">
	          <div class="col-sm-12">
	            <h1>Gestion lote</h1>	            	            
	          </div>
	        </div>
	      </div><!-- /.container-fluid -->
	    </section>	
	    
	  </div>
	  <!-- /.content-wrapper -->

	  
<?php 
	include_once 'layouts/footer.php';
}
else{
header('Location:../index.php');
}

?>
 <script src="../js/Lote.js"></script>
