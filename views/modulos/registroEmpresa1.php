
<div class="pd-20 border-radius-4 box-shadow mb-30 contenido">
				
					<div class="clearfix tituloSeccion">
						<h5 class="text-light-blue">Registro de Empresa</h5>
						<div class="grafica">
						
						<div class="row">
							<div class="col-sm-3 col-md-2">
								<div class="progress" data-percentage="80">
									<span class="progress-left">
									<span class="progress-bar"></span>
									</span>
									<span class="progress-right">
									<span class="progress-bar"></span>
									</span>
									<div class="progress-value">
										<div id="porcentaje">
											<span>80%</span>
										</div>
									</div>
								</div>
							</div>
							</div>
							
					</div>
					</div>
				
		 <!-- COMIENZA EL FORMULARIO -->
		 <div id="smartwizard">
				<ul class="pasos animated fadeIn">
					<li class=""><a href="#step-1" id="condicion" onclick="validar();"><br/></a></li>
					<li class=""><a href="#step-2" id="condicion1" onclick="validar();"><br/></a></li>
					<li class=""><a href="#step-3" id="condicion2" onclick="validar();"><br/></a></li>
					<li class=""><a href="#step-4" id="condicion3" onclick="validar();"><br/></a></li>
				</ul>
				

            <div class="contenidoFormulario">
                <!--OPCION 1-->
                <div id="step-1" class="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre:</label>
                                <input type="text" class="form-control sefaureo-style" id="txt_nombre">
                            </div>

                            <div class="form-group">
                                <label>Sucursal: </label>
                                <input type="text" class="form-control sefaureo-style" id="txt_sucursal">
                            </div>

                            <div class="form-group">
                                <label>Corporativo:</label>
                                <input type="text" class="form-control sefaureo-style" id="txt_corp">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Imagen</label>
                                <textarea class="form-control sefaureo-style"></textarea>
                            </div>
                        </div>
					</div>

					<!--BOTONES DE SIGUIENTE Y ATRAS -->
					<div class="row">
							<div class="col-md-12 col-xs-12">
								<button class="btn btn-warning tema-btn" id="prev-btn1" type="button" onclick="datosGenerales();"><span class="fa fa-angle-double-left"></span></button>
								<button class="btn btn-warning tema-btn pull-right" id="next-btn1" type="button" onclick="datosGenerales('#next-btn1');"><span class="fa fa-angle-double-right"></span></button>
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
											<input type="text" class="form-control sefaureo-style" id="txt_calle">
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label >Numero exterior:</label>
											<input type="text" class="form-control sefaureo-style" id="txt_numext">
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label >Numero interior:</label>
											<input type="text" class="form-control sefaureo-style" id="txt_numint">
										</div>
									</div>

									<div class="col-md-2">
										<div class="form-group">
											<label >Codigo postal:</label>
											<input type="text" class="form-control sefaureo-style" id="txt_cp">
										</div>
									</div>

								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Colonia:</label>
											<input type="text" class="form-control sefaureo-style" id="txt_colonia">
										</div>
									</div>
								</div>

								<div class="row">

									<div class="col-md-4">
										<div class="form-group">
											<label>Estado:</label>
											<select class="custom-select2 form-control sefaureo-style" name="state" style="width: 100%; height: 38px;">
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
											<select class="custom-select2 form-control sefaureo-style" name="state" style="width: 100%; height: 38px;">
												<optgroup label="Mexico">
													<option value="acu">Aculco</option>
													<option value="cali">Calimaya</option>
												</optgroup>
											</select>	
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group sefaureo-style">
											<label>Pais</label>
											<input type="text" class="form-control" value="México" readonly>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Dirigido a: </label>
											<input type="text" class="form-control sefaureo-style" placeholder="Dirigido a 1" id="txt_dirg1">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Dirigido a: </label>
											<input type="text" class="form-control sefaureo-style" placeholder="Dirigido a 2" id="txt_dirg2">
										</div>
									</div>
								</div>
						<!--BOTONES DE SIGUIENTE Y ATRAS -->
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<button class="btn btn-warning tema-btn" id="prev-btn2" type="button" onclick="direccion('#prev-btn2');"><span class="fa fa-angle-double-left"></span></button>
								<button class="btn btn-warning tema-btn pull-right" id="next-btn2" type="button" onclick="direccion('#next-btn2');"><span class="fa fa-angle-double-right"></span></button>
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
											<input type="text" class="form-control sefaureo-style" id="txt_cliente">
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label >Representante legal:</label>
											<input type="text" class="form-control sefaureo-style" id="txt_reprlegal">
										</div>
									</div>

									<div class="col-md-3">
										<div class="form-group">
											<label >R.F.C</label>
											<input type="text" class="form-control sefaureo-style" id="txt_rfc">
										</div>
									</div>
						</div>

						<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<label>Telefono:</label>
												<input type="text" class="form-control sefaureo-style" id="txt_tel">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Celular:</label>
												<input type="text" class="form-control sefaureo-style" id="txt_cel">
											</div>
										</div>
										
										<div class="col-md-3">
											<div class="form-group">
												<label>Correo electronico:</label>
												<input type="text" class="form-control sefaureo-style" id="txt_email">
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group">
												<label>Sitio web:</label>
												<input type="text" class="form-control sefaureo-style" id="txt_web">
											</div>
									</div>
						</div>

						<div class="row">

									<div class="col-md-3">
											<div class="form-group">
												<label>Horario laboral:</label>
												<select class="custom-select2 form-control" name="state" style="width: 100%; height: 38px;">
													<optgroup label="Mexico" class="seleccion">
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
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<button class="btn btn-warning tema-btn" id="prev-btn3" type="button" onclick="clientes();"><span class="fa fa-angle-double-left"></span></button>
								<button class="btn btn-warning tema-btn pull-right" id="next-btn3" type="button" onclick="clientes('#next-btn3');"><span class="fa fa-angle-double-right"></span></button>
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
												<input id="txt_distancia" type="text" value="10" name="demo_vertical2" class="sefaureo-style">
											</div>
										</div>

										<div class="col-md-12 col-sm-12">
											<div class="form-group">
												<label>Descripción del inmueble:</label>
												<input type="text" class="form-control sefaureo-style" id="txt_descripInmueble">
											</div>
										</div>
								</div>

								<div class="col-md-6">
										<div class="col-md-12">
											<div class="form-group">
												<label>Descripción del giro de la empresa</label>
												<textarea class="form-control sefaureo-style" id="txt_descripEmpresa" rows="2"></textarea>
											</div>
										</div>
								</div>
						</div>
						<!--BOTONES DE SIGUIENTE Y ATRAS -->
						<div class="row">
							<div class="col-md-12 col-xs-12">
								<button class="btn btn-warning tema-btn" id="prev-btn4" type="button" onclick="descripcion();"><span class="fa fa-angle-double-left"></span></button>
								<button class="btn btn-warning tema-btn pull-right" id="next-btn4" type="button" onclick="descripcion('#next-btn4');"><span class="fa fa-angle-double-right"></span></button>
							</div>		
						</div>
						<!--TERMINAN BOTONES DE SIGUIENTE Y ATRAS -->
				</div>
            </div>
        </div>
		<!--TERMINA EL FORMULARIO-->
</div>