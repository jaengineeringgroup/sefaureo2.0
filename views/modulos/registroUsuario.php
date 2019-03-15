<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<h5 class="text-light-blue">Registrar Usuario</h5>
					</div>


<!-- CREACION DEL FORMULARIO-->
<form action="">
	<div class="row">
		<div class="col-md-3">

		<div class="form-group">
                <div class="file-loading">
                    <input id="file-4" type="file" class="file" data-upload-url="#" data-theme="fas">
                </div>
            </div>
			
			<!--
			<h3>
				<img src="sources/img/user.png" alt="">
			</h3>
-->
		</div>

		<div class="col-md-9">
		
			<div class="row">
				<div class="form-group col-md-6">
					<label >Nombre:</label>
					<input type="text" class="form-control sefaureo-style" id="txt_nombre">
				</div>
				<div class="form-group col-md-6">
					<label >Apellidos:</label>
					<input type="text" class="form-control sefaureo-style" id="txt_apellidos">
				</div>
			</div>

			<div class="row">
				<div class="form-group col-md-4">
					<label>Usuario:</label>
					<input type="text" class="form-control sefaureo-style" id="txt_nombre">
				</div>
				<div class="form-group col-md-5">
					<label >Correo Electronico:</label>
					<input type="text" class="form-control sefaureo-style" id="txt_apellidos">
				</div>

				<div class="col-md-3">
					<div class="form-group">
						<label>Tipo:</label>
						<select class="custom-select2 form-control sefaureo-style" name="state" style="width: 100%; height: 38px;">
							<optgroup>
								<option value="Admi">Administrador</option>
								<option value="Cap">Capturista</option>
								<option value="ro">Root</option>
								<option value="sup">Supervisor</option>
							</optgroup>
						</select>	
					</div>
				</div>

			</div>

			<div class="row">
				<div class="form-group col-md-5">
					<label>Contraseña:</label>
					<input type="text" class="form-control sefaureo-style" id="txt_nombre">
				</div>
				<div class="form-group col-md-4">
					<label >Confirmar contraseña:</label>
					<input type="text" class="form-control sefaureo-style" id="txt_apellidos">
				</div>
				<div class="form-group col-md-3 float-right">
					<label>&nbsp;</label>
					<button class="btn btn-warning btn-block tema-btn float-right" id="prev-btn1" type="button"><span class="fa fa-save"></span> Guardar</button>
				</div>
			</div>


		</div>
	</div>
</form>
<!-- CREACION DEL FORMULARIO-->

</div>
<!-- SCRIPT PARA INICIAR EL FILE INPUT -->

<!-- TERMINA EL SCRIPT -->
