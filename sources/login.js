$(document).ready(function(){
    $('#ingUsuario, #ingPassword').on('change',function(){
    	var usu = $('#ingUsuario').val(); 
    	var pas = $('#ingPassword').val(); 
    	console.log(usu, pas);
    	if ((usu != '') && (pas != '')){
            document.getElementById("btn-iniciar").disabled = false;
    	}
    }); 
}); 
