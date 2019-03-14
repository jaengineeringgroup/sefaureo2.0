$(document).ready(function(){
	// console.log("Dentro de login!!");
    $('#ingUsuario, #ingPassword').on('change',function(){
    	var usu = $('#ingUsuario').val(); 
    	var pas = $('#ingPassword').val(); 
    	if ((usu != '') && (pas != '') && (pas.legth >= 4)){
            document.getElementById("btn-iniciar").disabled = false;
    	} else {
			document.getElementById("btn-iniciar").disabled = true;
		}
	});
	$('#ingUsuario, #ingPassword').keyup( function(e) {
		// console.log("dentro de pass");
    	if (($('#ingPassword').val().length >= 4 ) && ($('#ingUsuario').val() != '') ) {
			document.getElementById("btn-iniciar").disabled = false;
			// console.log("Dentro");
    	} else {
			document.getElementById("btn-iniciar").disabled = true;
			// console.log("Fuera");
		}
	});
	
}); 