

<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<h5 class="text-light-blue">Empresas</h5>
					</div>
					<br>
	<!-- :::::::::::.... TABLA DE EMPRESAS ....:::::::::: -->
	<div class="row">
				<table class="data-table hover">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">Foto</th>
							<th>Nombre</th>
							<th>Corportivo</th>
							<th>RFC</th>
							<th>Estado</th>
							<th>Acciones</th>
						</tr>
					</thead>
							
					<tbody>
						<tr>
							<td><img src="sources/img/user.png" class="img-thumbnail" width="35px"></td>
							<td class="table-plus">El Porton SA de CV</td>
							<td>Alsea</td>
							<td>ASD-020898</td>
							<td><button class="btn btn-success btn-sm">Completo</button></td>
							<td>
								<div class="btn-group">
								<button class="btn btn-outline-primary"><i class="fa fa-pencil"></i></button>
								<button class="btn btn-outline-dark" onclick="borrar();"><i class="fa fa-trash"></i></button>
								<button class="btn btn-outline-dark"><i class="fa fa-eye"></i></button>
								</div>

                  			</td>
						</tr>

						<tr>
							<td><img src="sources/img/user.png" class="img-thumbnail" width="35px"></td>
							<td class="table-plus">Gamesa</td>
							<td>Alsea</td>
							<td>ASD-020898</td>
							<td><button class="btn btn-warning btn-sm">Incompleto</button></td>
							<td>
								<div class="btn-group">
								<button class="btn btn-outline-primary"><i class="fa fa-pencil"></i></button>
								<button class="btn btn-outline-dark" onclick="borrar();"><i class="fa fa-trash"></i></button>
								<button class="btn btn-outline-dark"><i class="fa fa-eye"></i></button>
								</div>

                  			</td>
						</tr>
					</tbody>
					

				</table>
	</div>
	<!-- :::::::::::.... TERMINA TABLA DE EMPRESAS ....:::::::::: -->

</div>

<script>

	function borrar() {
		swal({
  title: "Eliminar empresa",
  text: "Una vez eliminado no se podra recuperar",
  icon: "warning",
  buttons: ["Cancelar", "Aceptar"],
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Empresa eliminada correctamente", {
	  icon: "success",
	  button: "Aceptar"
    });
  } else {
    
  }
});


	}
	
</script>