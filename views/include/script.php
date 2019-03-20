	<!-- js -->
	<script src="views/vendors/scripts/script.js"></script>
	<!--::::::::::::::::::.... SCRIPT DEL FORMULARIO ....:::::::::::::::::::::::::-->
	<script src="views/src/plugins/jquery-steps/build/jquery.steps.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script type="text/javascript" src="views/src/plugins/formulario/dist/js/jquery.smartWizard.min.js"></script>
    <script src="views/src/plugins/formulario/src/js/validacion.js"></script>
    <script src="sources/js/login.js"></script>
    <script src="views/src/plugins/formulario/src/js/validacion.js"></script>
    
<!-- SCRITP DE CHART JS --> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<!-- SCRITP DE CHART JS -->

    <!-- script de login  -->
    <!-- <script src="sources/login.js"></script> -->

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

<!-- SCRIPTS DE LAS TABLAS -->
<script src="views/src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="views/src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
<script src="views/src/plugins/datatables/media/js/dataTables.responsive.js"></script>
<script src="views/src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>

<script>
		$('document').ready(function(){
			$('.data-table').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "Todos"]],
				"language": {
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "zeroRecords": "No se encontraron resultados en su busqueda",
                    "searchPlaceholder": "Buscar...",
                    "info": "Mostrando registros de _START_ al _END_ de un total de  _TOTAL_ registros",
                    "infoEmpty": "No existen registros",
                    "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                    "search": "Buscar:",
                    "paginate": {
                        "first": "Primero",
                        "last": "Último",
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
				},
			});
		});
    </script>
    
<!--Scripts de los inputFile Drop  -->
<!-- PLUGIN DRAG AN DROP FILE-->
<script src="views/src/plugins/fileInput/js/plugins/sortable.js" type="text/javascript"></script>
<script src="views/src/plugins/fileInput/js/fileinput.js" type="text/javascript"></script>
<script src="views/src/plugins/fileInput/js/locales/fr.js" type="text/javascript"></script>
<script src="views/src/plugins/fileInput/js/locales/es.js" type="text/javascript"></script>
<script src="views/src/plugins/fileInput/themes/fas/theme.js" type="text/javascript"></script>
<script src="views/src/plugins/fileInput/themes/explorer-fas/theme.js" type="text/javascript"></script>
<!-- // PLUGIN DRAG AN DROP FILE-->

<!--Scripts de los inputFile Drop  -->
<script>
	  $("#input-b3").fileinput({
        theme: 'fas',
        language: 'es',
        allowedFileExtensions: ['jpg', 'png'],
        uploadExtraData: {
            kvId: '20'
        }
    });
</script>
<!--Scripts de los inputFile Drop  -->

<!--Scripts de los inputFile Drop  -->


<!-- SCRIPT PARA HACER PANTALLA COMPLETA-->
<script type="text/javascript">
        <!--
        window.onerror = new Function("return true");

        function fullscr() {
            if (document.documentElement.requestFullscreen) {
                document.documentElement.requestFullscreen()
            }
            if (document.documentElement.msRequestFullscreen) {
                document.documentElement.msRequestFullscreen()
            }
            if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen()
            }
            if (document.documentElement.webkitRequestFullScreen) {
                document.documentElement.webkitRequestFullScreen()
            }
            if (typeof window.ActiveXObject !== "undefined") {
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}")
                }
            }
        }

        function fullcls() {
            if (document.exitFullscreen) {
                document.exitFullscreen()
            }
            if (document.msExitFullscreen) {
                document.msExitFullscreen()
            }
            if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen()
            }
            if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen()
            }
            if (typeof window.ActiveXObject !== "undefined") {
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}")
                }
            }
        }

        document.onkeydown = function(e) {
                e = e ? e : window.event;
                if (e.keyCode == 13) {
                    fullscr();
                    return false;
                }
                if (e.keyCode == 27) {
                    fullcls();
                    return false;
                }
            }
            //-->
    </script>
<!-- TERMINA EL SCRIPT DE LA PANTALLA COMPLETA -->

<script>
new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [2478,5267,734,784,433]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
</script>