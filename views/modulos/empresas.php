<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<h5 class="text-light-blue">Empresas</h5>
					</div>
	<!-- :::::::::::.... TABLA DE EMPRESAS ....:::::::::: -->
	<div class="row">
				<table class="data-table hover">
					<thead>
						<tr>
							<th class="table-plus datatable-nosort">Nombre</th>
							<th>Corportivo</th>
							<th>RFC</th>
							<th>Acciones</th>
						</tr>
					</thead>
							
					<tbody>
						<tr>
							<td class="table-plus">El Porton SA de CV Sucursal Tezontle</td>
							<td>Alsea</td>
							<td>ASD-020898</td>
							<td>
								<div class="btn-group">
								<button class="btn btn-outline-primary"><i class="fa fa-pencil"></i></button>
								<button class="btn btn-outline-dark" onclick="borrar();"><i class="fa fa-trash"></i></button>
								</div>

                  			</td>
						</tr>

						<tr>
							<td class="table-plus">Gamesa</td>
							<td>Gamesa</td>
							<td>ASD-020898</td>
							<td>
								<div class="btn-group">
								<button class="btn btn-outline-primary"><i class="fa fa-pencil"></i></button>
								<button class="btn btn-outline-dark" onclick="borrar();"><i class="fa fa-trash"></i></button>
								</div>

                  			</td>
						</tr>

						<tr>
							<td class="table-plus">El Porton SA de CV Sucursal Tezontle</td>
							<td>Alsea</td>
							<td>ASD-020898</td>
							<td>
								<div class="btn-group">
								<button class="btn btn-outline-primary"><i class="fa fa-pencil"></i></button>
								<button class="btn btn-outline-dark" onclick="borrar();"><i class="fa fa-trash"></i></button>
								</div>

                  			</td>
						</tr>

						<tr>
							<td class="table-plus">El Porton SA de CV Sucursal Tezontle</td>
							<td>Alsea</td>
							<td>ASD-020898</td>
							<td>
								<div class="btn-group">
								<button class="btn btn-outline-primary"><i class="fa fa-pencil"></i></button>
								<button class="btn btn-outline-dark" onclick="borrar();"><i class="fa fa-trash"></i></button>
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