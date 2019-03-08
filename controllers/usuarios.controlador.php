<?php
class ControladorUsuarios{
    /* ......::::::: INGREGO DE USUARIO :::::::.... */
    static public function ctrIngresoUsuario(){
        /* DEFINE SI LA VARIBALE ESTA DEFINIDA EN ESTE CASO SI LA VARIBALE POST "ingUsuario
        esta definina (tiene datos) se esta intentando entrar al sistema"*/
        if(isset($_POST["ingUsuario"])) {

            /* Este if es solo para permitir ciertos caracteres por cuestiones de seguridad evitar el SQLInyeccion
                preg_match permite comprar cadenas con expresiones
                regulares en este caso definidas por nosotros mismos */
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"])  && 
               preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingPassword"]))

            {
                /* Variable de la tabla */
                $tabla = "1";
                /* Variable de la columna usuario */
                
                $item = "usuario";
                /* TOMA EL VALOR DEL INPUT ING USUARIO */
                $valor = $_POST["ingUsuario"];

                /* Se esta instanciando el metodo y todo se esta guardando en la variable
                respuesta */
                $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

                /*CON ESTA FUNCION SE IMPRIME TODO LO QUE SE ALMACENO EN LA VARIABLE DE
                " respuesta"  */
                var_dump($respuesta["usuario"]);

                /* $respuesta["campo de la tabla de BD"] */
                if ($respuesta["usuario"] == $_POST["ingUsuario"] && 
                    $respuesta["password"] == $_POST["ingPassword"]) {
                        
                        $_SESSION["iniciarSesion"] = "ok";


                        echo '<script>
                                swal({
                                    title: "¡Bienvenido a SEFAUREO 2.0!",
                                    text: "Haz iniciado sesión correctamente",
                                    icon: "success",
                                    button: "Aceptar"
                                }).then(function(){
                                    window.location = "inicio";
                                   
                                });
                            </script>';
                }
                else{
                    echo ' <script>
                            swal({
                                    title: "¡Error al iniciar sesión!",
                                    text: "Por favor intente de nuevo",
                                    icon: "error",
                                    button: "Aceptar",
                                });
                           </script>
                        ';
                    /* echo '<br> <div class="alert alert-danger">Error al iniciar Sesion</div>'; */
                }
               

            }
           
        }
    }
}