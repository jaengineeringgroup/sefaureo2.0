
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box pd-0 border-radius-5" style="filter:alpha(opacity=85); opacity:0.85;" >
            
            <!-- :::::::::.. IMAGEN DE SEFAUREO ..::::::::: -->
            <div class="col-md-12 logimg">
                <img src="views/vendors/images/sefaureo.png" alt="login" class="login-img">
            </div>
             <!-- :::::::::.. TERMINA IMAGEN DE SEFAUREO ..::::::::: -->

             <div class="col-md-12 col-xs-12">
            <form method="post">

                    <div class="col-md-12">
                                <div class="input-group">
                                    <button class="btn btn-warning btn-sm btn-block btn-iniciar" href="inicio" type="submit">Iniciar sesión</button>
                                </div>
                    </div>  

				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control sefaureo-style" placeholder="Usuario" name="ingUsuario" required>
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control sefaureo-style" placeholder="Contraseña" name="ingPassword" id="pass"required>
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
                </div>
                

                <!-- :::::::::.. SESION CONTRASEÑA Y CUENTA ..::::::: -->
				<div class="row">
					<div class="col-sm-12">
						<div class="cuenta">
                            <p>
                                 <a href="#">¿Olvidaste tu contraseña?</a>
                            </p>
                            
                        </div>
                    </div>
                    
                    <div class="col-sm-12">
						<div class="forgot-password padding-top-10 cuenta">
                            <p>
                                ¿No tienes una cuenta?
                            
                            <a href="#">Registrate</a>
                            </p>
                        </div>
					</div>
                </div>
                <!-- :::::::::.. TERMINA SESION CONTRASEÑA Y CUENTA ..::::::: -->

                 <!-- CODIGO DE PHP PARA EL FORMULARIO -->
            <?php

                /* SE CREA EL OBJETO CONTROLADOR USUARIOS  */
                 $login = new ControladorUsuarios(); 
                /* EJECUTA EL METODO DE LA CLASE "ControladorUsuarios" */
                 $login -> ctrIngresoUsuario(); 
            ?>
            <!-- TERMINA EL CODIGO DE PHP -->

            </form>
        </div>
		</div>
	</div>
    
   