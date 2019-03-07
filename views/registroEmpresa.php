<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<!--ESTILOS PARA EL FORMULARIO-->
	<link rel="stylesheet" href="views/src/plugins/formulario/dist/css/smart_wizard.css">
	<link href="views/src/plugins/formulario/dist/css/smart_wizard_theme_circles.css" rel="stylesheet" type="text/css" />
	<link href="views/src/plugins/formulario/src/css/estilos.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" type="text/css" href="views/src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css">
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	
	<div class="main-container animated lightSpeedIn">
		<div class="pd-ltr-20 customscroll customscroll-20-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<!--::::::::::::::::::.... CONTENIDO DEL SITIO WEB ....:::::::::::::::::::::::::::::::::-->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="clearfix">
						<h5 class="text-light-blue">Registro de empresa</h5>
					</div>

		 <!-- COMIENZA EL FORMULARIO -->
		<div id="smartwizard">
            <ul class="pasos">
                <li><a href="#step-1" id="condicion" onclick="validar();">1<br /><small class="titulos">Datos Generales</small></a></li>
                <li><a href="#step-2" id="condicion1" onclick="validar();">2<br /><small>Dirección</small></a></li>
                <li><a href="#step-3" id="condicion2" onclick="validar();">3<br /><small>Clientes</small></a></li>
                <li><a href="#step-4" id="condicion3" onclick="validar();">4<br /><small>Descripción</small></a></li>
            </ul>

            <div>
                <!--OPCION 1-->
                <div id="step-1" class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre:</label>
                                <input type="text" class="form-control" id="txt_nombre">
                            </div>

                            <div class="form-group">
                                <label>Sucursal: </label>
                                <input type="text" class="form-control" id="txt_sucursal">
                            </div>

                            <div class="form-group">
                                <label>Corporativo:</label>
                                <input type="text" class="form-control" id="txt_corp">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Imagen</label>
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>
					</div>
					<!--BOTONES DE SIGUIENTE Y ATRAS -->
					<div class="col-12 col-lg-6 col-sm-12 centrarBotones">
						<div class="btn-group col-lg-6 col-sm-12" role="group">
							<button class="btn btn-warning btn-atras" id="prev-btn1" type="button" onclick="datosGenerales();">Atras</button>
							<button class="btn btn-warning btn-siguiente" id="next-btn1" type="button" onclick="datosGenerales('#next-btn1');">Siguiente</button>
						</div>
					</div>
					<!--TERMINAN BOTONES DE SIGUIENTE Y ATRAS -->
                </div>

                <!--OPCION 2-->
                <div id="step-2" class="">
                    <div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label >Calle:</label>
											<input type="text" class="form-control" id="txt_calle">
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label >Numero exterior:</label>
											<input type="text" class="form-control" id="txt_numext">
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label >Numero interior:</label>
											<input type="text" class="form-control" id="txt_numint">
										</div>
									</div>

									<div class="col-md-2">
										<div class="form-group">
											<label >Codigo postal:</label>
											<input type="text" class="form-control" id="txt_cp">
										</div>
									</div>

								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Colonia:</label>
											<input type="text" class="form-control" id="txt_colonia">
										</div>
									</div>
								</div>

								<div class="row">

									<div class="col-md-4">
										<div class="form-group">
											<label>Estado:</label>
											<select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
												<optgroup label="Mexico">
													<option value="mx">Estado de Mexico</option>
													<option value="df">Distrito Federal</option>
												</optgroup>
											</select>	
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label>Municipio:</label>
											<select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
												<optgroup label="Mexico">
													<option value="acu">Aculco</option>
													<option value="cali">Calimaya</option>
												</optgroup>
											</select>	
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label>Pais</label>
											<input type="text" class="form-control" value="México" readonly>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Dirigido a: </label>
											<input type="text" class="form-control" placeholder="Dirigido a 1" id="txt_dirg1">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Dirigido a: </label>
											<input type="text" class="form-control" placeholder="Dirigido a 2" id="txt_dirg2">
										</div>
									</div>
								</div>
						<!--BOTONES DE SIGUIENTE Y ATRAS -->
						<div class="col-12 col-lg-6 col-sm-12 centrarBotones">
							<div class="btn-group col-lg-6 col-sm-12" role="group">
								<button class="btn btn-warning btn-atras" id="prev-btn2" type="button" onclick="direccion('#prev-btn2');">Atras</button>
								<button class="btn btn-warning btn-siguiente" id="next-btn2" type="button" onclick="direccion('#next-btn2');">Siguiente</button>
							</div>
						</div>
					<!--TERMINAN BOTONES DE SIGUIENTE Y ATRAS -->

				</div>
				
				<!--PASO 3-->
                <div id="step-3" class="">
					<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label >Cliente:</label>
											<input type="text" class="form-control" id="txt_cliente">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label >Representante legal:</label>
											<input type="text" class="form-control" id="txt_reprlegal">
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label >R.F.C</label>
											<input type="text" class="form-control" id="txt_rfc">
										</div>
									</div>
						</div>

						<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label>Telefono:</label>
												<input type="text" class="form-control" id="txt_tel">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Celular:</label>
												<input type="text" class="form-control" id="txt_cel">
											</div>
										</div>
										
										<div class="col-md-3">
											<div class="form-group">
												<label>Correo electronico:</label>
												<input type="text" class="form-control" id="txt_email">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Sitio web:</label>
												<input type="text" class="form-control" id="txt_web">
											</div>
									</div>
						</div>

						<div class="row">

									<div class="col-md-3">
											<div class="form-group">
												<label>Horario laboral:</label>
												<select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
													<optgroup label="Mexico">
														<option value="lu">Lunes</option>
														<option value="ma">Martes</option>
														<option value="mi">Miercoles</option>
														<option value="ju">Jueves</option>
														<option value="vi">Viernes</option>
														<option value="sa">Sabado</option>
														<option value="do">Domingo</option>
													</optgroup>
												</select>
												<small>(Días de la semana)</small>
											</div>
									</div>

									<div class="col-md-3">
											<div class="form-group">
												<label>A:</label>
												<select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
													<optgroup label="Mexico">
														<option value="lu">Lunes</option>
														<option value="ma">Martes</option>
														<option value="mi">Miercoles</option>
														<option value="ju">Jueves</option>
														<option value="vi">Viernes</option>
														<option value="sa">Sabado</option>
														<option value="do">Domingo</option>
													</optgroup>
												</select>	
											</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label>DE:</label>
											<input class="form-control time-picker" placeholder="Hora entrada" type="text">
											<small>(Inicio)</small>
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
												<label>A:</label>
												<input class="form-control time-picker" placeholder="Hora salida" type="text">
												<small>(Fin)</small>
										</div>	
									</div>
								</div>
						<!--BOTONES DE SIGUIENTE Y ATRAS -->
						<div class="col-12 col-lg-6 col-sm-12 centrarBotones">
							<div class="btn-group col-lg-6 col-sm-12" role="group">
								<button class="btn btn-warning btn-atras" id="prev-btn3" type="button" onclick="clientes();">Atras</button>
								<button class="btn btn-warning btn-siguiente" id="next-btn3" type="button" onclick="clientes('#next-btn3');">Siguiente</button>
							</div>
						</div>
						<!--TERMINAN BOTONES DE SIGUIENTE Y ATRAS -->

                </div>

                <div id="step-4" class="">
						<div class="row">
								<div class="col-md-6">
										<div class="col-md-12 col-sm-12">
											<div class="form-group">
												<label>Distancia en KM aproximada al volcán: <small> (opcional, si es > 500)</small></label>
												<input id="txt_distancia" type="text" value="10" name="demo_vertical2">
											</div>
										</div>

										<div class="col-md-12 col-sm-12">
											<div class="form-group">
												<label>Descripción del inmueble:</label>
												<input type="text" class="form-control" id="txt_descripInmueble">
											</div>
										</div>
								</div>

								<div class="col-md-6">
										<div class="col-md-12">
											<div class="form-group">
												<label>Descripción del giro de la empresa</label>
												<textarea class="form-control" id="txt_descripEmpresa" rows="2"></textarea>
											</div>
										</div>
								</div>
						</div>

						<!--BOTONES DE SIGUIENTE Y ATRAS -->
						<div class="col-12 col-lg-6 col-sm-12 centrarBotones">
							<div class="btn-group col-lg-6 col-sm-12" role="group">
								<button class="btn btn-warning btn-atras" id="prev-btn4" type="button" onclick="descripcion();">Atras</button>
								<button class="btn btn-warning btn-siguiente" id="next-btn4" type="button" onclick="descripcion('#next-btn4');">Siguiente</button>
							</div>
						</div>
						<!--TERMINAN BOTONES DE SIGUIENTE Y ATRAS -->	
				</div>
            </div>
        </div>
		<!--TERMINA EL FORMULARIO-->

				</div>
				<!--::::::::::::::::::.... FIN DELCONTENIDO DEL SITIO WEB ....:::::::::::::::::::::::::-->
			</div>
			<?php include('include/footer.php'); ?>
		</div>
	</div>
	<?php include('include/script.php');?>

	
	<!--::::::::::::::::::.... SCRIPT DEL FORMULARIO ....:::::::::::::::::::::::::-->
	<script src="views/src/plugins/jquery-steps/build/jquery.steps.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script type="text/javascript" src="views/src/plugins/formulario/dist/js/jquery.smartWizard.min.js"></script>
	<script src="views/src/plugins/formulario/src/js/validacion.js"></script>
	<!-- bootstrap-touchspin js -->
	<script src="views/src/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js"></script>
	<script type="text/javascript">
        $(document).ready(function() {
            // Step show event
            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection, stepPosition) {
                //alert("You are on step "+stepNumber+" now");
                if (stepPosition === 'first') {
                    $("#prev-btn").addClass('disabled');
                } else if (stepPosition === 'final') {
                    $("#next-btn").addClass('disabled');
                } else {
                    $("#prev-btn").removeClass('disabled');
                    $("#next-btn").removeClass('disabled');
                }
            });
            // Smart Wizard
            $('#smartwizard').smartWizard({
                theme: 'circles',
                selected: 0,
				cycleSteps: true,
                transitionEffect: 'fade',
                showStepURLhash: false,
                toolbarSettings: {
                    showNextButton: false,
                    showPreviousButton: false,
                    toolbarButtonPosition: 'right'
                }
			});
			
			$("input[name='demo_vertical2']").TouchSpin({
			verticalbuttons: true,
			verticalupclass: 'fa fa-plus',
			verticaldownclass: 'fa fa-minus'
		});

        });
	</script>
<!--TERMINAN LOS SCRITS DEL FORMULARIO-->


</body>
</html>