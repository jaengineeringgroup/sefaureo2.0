	<!-- js -->
	<script src="views/vendors/scripts/script.js"></script>
	<!--::::::::::::::::::.... SCRIPT DEL FORMULARIO ....:::::::::::::::::::::::::-->
	<script src="views/src/plugins/jquery-steps/build/jquery.steps.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
	<script type="text/javascript" src="views/src/plugins/formulario/dist/js/jquery.smartWizard.min.js"></script>
	<script src="views/src/plugins/formulario/src/js/validacion.js"></script>
    <!-- script de login  -->
    <script src="sources/login.js"></script>
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