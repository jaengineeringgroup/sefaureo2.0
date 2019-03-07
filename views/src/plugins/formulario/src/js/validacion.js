/*VARIABLES DE LOS BOTONES */

boton = $('#next-btn');
boton2 = $('#prev-btn');

/*COLORES DE ADVERTENCIA */
function colorNormal(id) {
    obj = document.getElementById(id);
    obj.style.backgroundColor = (obj.style.backgroundColor == 'rgb(178, 140, 0);') ? 'transparent' : '#B28C00';
}

function error(id) {
    obj = document.getElementById(id);
    obj.style.backgroundColor = (obj.style.backgroundColor == 'rgb(221, 65, 61);') ? 'transparent' : '#DD413D';
}

function warning(id) {
    obj = document.getElementById(id);
    obj.style.backgroundColor = (obj.style.backgroundColor == 'rgb(239, 183, 56);') ? 'transparent' : '#EFB738';

}

function correcto(id) {
    obj = document.getElementById(id);
    obj.style.backgroundColor = (obj.style.backgroundColor == 'rgb(63, 203, 95);') ? 'transparent' : '#3FCB5F';

}

/*FUNCIONES DE VALIDACION */
function validarPaso1() {

    nombre = $('#txt_nombre').val();
    sucursal = $("#txt_sucursal").val();
    corp = $("#txt_corp").val();

    var id = "condicion";
    if (nombre === '' && sucursal === '' && corp === '') {
        error(id);
    } else if (nombre === '' || sucursal === '' || corp === '') {
        warning(id);
    } else {
        correcto(id);
    }
}

function validarPaso2() {


    calle = $('#txt_calle').val();
    numext = $("#txt_numext").val();
    numint = $("#txt_numint").val();

    cp = $('#txt_cp').val();



    colonia = $('#txt_colonia').val();
    /*
    dirigido = $('#txt_dir1').val();
    */


    var id = "condicion1";


    if (calle === '' && numext === '' && numint === '' && cp === '' && colonia === '') {
        error(id);
    } else if (calle === '' || numext === '' || numint === '' || cp === '' || colonia === '') {
        warning(id);
    } else {
        correcto(id);
    }
}

function validarPaso3() {
    var id = "condicion2";
    cliente = $('#txt_cliente').val();
    replegal = $("#txt_reprlegal").val();
    rfc = $("#txt_rfc").val();
    tel = $("#txt_tel").val();
    cel = $("#txt_cel").val();
    email = $("#txt_email").val();

    if (cliente === '' && replegal === '' && rfc === '' && tel === '' && cel === '' && email === '') {
        error(id);
    } else if (cliente === '' || replegal === '' || rfc === '' || tel === '' || cel === '' || email === '') {
        warning(id);
    } else {
        correcto(id);
    }

}

function validarPaso4(){
    distancia = $('#txt_distancia').val();
    inmueble = $('#txt_descripInmueble').val();
    descripcion = $('#txt_descripEmpresa').val();

    id = "condicion3"; 

    if (distancia === '' && inmueble === '' && descripcion === '') {
        error(id);
    }else if(distancia === '' || inmueble === '' || descripcion === ''){
        warning(id);
    }else {
        correcto(id);
    }
}



function validar() {
    validarPaso1();
    validarPaso2();
    validarPaso3();
    validarPaso4();
}

function datosGenerales(boton) {
    btn = "#next-btn1"
    if (boton === btn) {
        $('#smartwizard').smartWizard("next");
    } else {
        $('#smartwizard').smartWizard("prev");

    }

    validarPaso1();

}

function direccion(boton) {
    btn = "#next-btn2";
    btn2 = "#prev-btn2";
    color = 'condicion';

    if (boton === btn) {
        $('#smartwizard').smartWizard("next");


    } else if (boton === btn2) {
        $('#smartwizard').smartWizard("prev");



    }
    validarPaso2();
}

function clientes(boton) {
    btn = "#next-btn3"
    if (boton === btn) {
        $('#smartwizard').smartWizard("next");
    } else {
        $('#smartwizard').smartWizard("prev");

    }
    validarPaso3();

}


function descripcion(boton) {
    btn = "#next-btn4";
    if (boton === btn) {
        $('#smartwizard').smartWizard("next");
    } else {
        $('#smartwizard').smartWizard("prev");

    }
    validarPaso4();

}