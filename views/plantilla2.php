
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include('include/head.php'); ?>
</head>
<body>
	<?php include('include/header.php'); ?>
	<?php include('include/sidebar.php'); ?>
	
	<div class="main-container">

		<div id="particles-js"></div>
		<div class="pd-ltr-20 customscroll customscroll-20-p height-100-p xs-pd-20-10 formulario">
			<div class="min-height-200px" style="filter:alpha(opacity=85); opacity:0.85;">
			<!--AQUI SE METERA EL CONTENIDO DEL SITIOS WEB-->
			<?php
				if(isset($_GET["ruta"])){
					if ($_GET["ruta"] == "inicio" ||
					$_GET["ruta"] == "registroEmpresa" ||
					$_GET["ruta"] == "empresas" ||
					$_GET["ruta"] == "carta" ||
					$_GET["ruta"] == "resumen" ||
					$_GET["ruta"] == "pipc" ||
					$_GET["ruta"] == "diplomas" ||
					$_GET["ruta"] == "nuevaPlantilla" ||
					$_GET["ruta"] == "plantillas" ||
					$_GET["ruta"] == "reportes" ||
					$_GET["ruta"] == "capacitacion" ||
					$_GET["ruta"] == "registroUsuario" ||
					$_GET["ruta"] == "usuarios") 
					{
					/* SE CONCATENA EL INCLUDE PARA QUE SE COMPARE CON EL VALOR DE LA VARIABLE */
					include "modulos/".$_GET["ruta"].".php";
					/* EN CASO DE NO ENCONTRAR LA RUTA NOS LLEVARA A LA PAGINA 404 */
					} else {
					include "modulos/404.php";
					}
					/* SI NO SE MANDA NINGUN VARIABLE MANDAR A LA PAGINA DE INICIO */
				}else{
					include "modulos/inicio.php";
				}
			?>
				</div>
			
			</div>
			<?php include('include/footer.php');?>
	</div>
	
	<?php include('include/script.php');?>
	<script src="views/src/plugins/particulas/js/particles.js"></script>
    <script src="views/src/plugins/particulas/js/app.js"></script>
    <!-- stats.js -->
    <script src="views/src/plugins/particulas/js/lib/stats.js"></script>
</body>
</html>