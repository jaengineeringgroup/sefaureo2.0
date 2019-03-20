document.addEventListener('DOMContentLoaded', function () {
	// console.log("Dentro de login!!");
    document.querySelector('#ingUsuario').addEventListener('change',function() {
    	var usu = document.getElementById('ingUsuario').value; 
    	var pas = document.getElementById('pass').value; 
    	if ((usu != '') && (pas != '') && (pas.legth >= 4)){
            document.getElementById("btn-iniciar").disabled = false;
    	} else {
			document.getElementById("btn-iniciar").disabled = true;
		}
	});
	document.querySelector('#pass').addEventListener('change',function() {
    	var usu = document.getElementById('ingUsuario').value; 
    	var pas = document.getElementById('pass').value; 
    	if ((usu != '') && (pas != '') && (pas.legth >= 4)){
            document.getElementById("btn-iniciar").disabled = false;
    	} else {
			document.getElementById("btn-iniciar").disabled = true;
		}
	});
	document.querySelector('#ingUsuario').addEventListener('keyup', function(e) {
		var usu = document.getElementById('ingUsuario').value; 
    	var pas = document.getElementById('pass').value; 
		console.log("dentro de pass", usu, pas);
    	if ((pas.length >= 4 ) && (usu != '') ) {
			document.getElementById("btn-iniciar").disabled = false;
			// console.log("Dentro");
    	} else {
			document.getElementById("btn-iniciar").disabled = true;
			// console.log("Fuera");
		}
	});
	document.querySelector('#pass').addEventListener('keyup', function(e) {
		var usu = document.getElementById('ingUsuario').value; 
    	var pas = document.getElementById('pass').value; 
		console.log("dentro de pass", usu, pas);
    	if ((pas.length >= 4 ) && (usu != '') ) {
			document.getElementById("btn-iniciar").disabled = false;
			// console.log("Dentro");
    	} else {
			document.getElementById("btn-iniciar").disabled = true;
			// console.log("Fuera");
		}
	});
}); 