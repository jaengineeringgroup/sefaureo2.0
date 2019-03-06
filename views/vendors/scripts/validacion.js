function colorRojo() {
    obj = document.getElementById('bandera');
    obj.style.backgroundColor = (obj.style.backgroundColor == 'rgba(215, 40, 40, 0.9);') ? 'transparent' : '#FF0000';
}

function colorAmarillo() {
    obj = document.getElementById('bandera');
    obj.style.backgroundColor = (obj.style.backgroundColor == 'rgba(255, 255, 0, 1);') ? 'transparent' : '#F7FF00';
}

function colorVerde() {
    obj = document.getElementById('bandera');
    obj.style.backgroundColor = (obj.style.backgroundColor == 'rgba(20, 177, 52, 1);') ? 'transparent' : '#009624';
}


$(document).ready(function() {

    var boton;

    boton = $('#hola');

    boton.on('click', function() {

        var nombre, apellido, edad;

        nombre = $('#txt_nombre').val();
        apellido = $("#txt_sucursal").val();
        edad = $("#txt_corp").val();

        if (nombre === '' && apellido === '' && edad === '') {
            colorRojo();


        } else if (nombre === '' || apellido === '' || edad === '') {
            colorAmarillo();


        } else {
            colorVerde();

        }

    });

});