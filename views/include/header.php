	
	<div class="pre-loader"></div>
	<div class="header clearfix">

		<div class="header-right ">
			<div class="brand-logo">
				<a href="inicio">
					<img src="views/vendors/images/logo.png" alt="" class="mobile-logo">
				</a>
			</div>

			<!-- :::: FECHA ::::: -->
			<div class="fecha"> 
				<!-- <p>martes, 19 de febrero del 2019</p> -->
				<?php 
					$fec = new funcionGral(); 
					echo $fec -> fecha();  
				?>
			</div>


	
			<!-- :::: MENU DE OPCIONES EN RESPONSIVO ::::: -->
			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>

			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon"><i class="fa fa-user-o"></i></span>
						<span class="user-name">Gabriel Cervantes</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a>
						<a class="dropdown-item" href="#"><i class="fa fa-cog" aria-hidden="true"></i> Configuración</a>
						<a class="dropdown-item" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a>
					</div>
				</div>
			</div>

			<div class="user-notification ">
				<!--ANIMATED PARA NOTIFICACIONES
				heartBeat
				bounceIn
				-->
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<span class="badge notification-active animated infinite heartBeat delay-2s"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<!--
										<h3 class="clearfix">John Doe <span>3 mins ago</span></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
										-->
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>