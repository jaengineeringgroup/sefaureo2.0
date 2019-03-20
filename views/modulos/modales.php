
<div class="modal animated fadeIn" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-full" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Creacion de plantillas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body p-4" id="result">
                    <div class="row">
                        <div class="col-md-8 col-lg-8">
                            <textarea id="basic-example">
                            
                            </textarea>
                        </div>
                        
                        <div class="col-md-4 col-lg-4">
                            <label class="weight-600">Ejemplo 1</label>
                            <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Sistema</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Numero</label>
                                        </div> 
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio3">Corta</label>
                                        </div>  
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio4">Parrafo</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio5">Seleccion</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio6">Casilla</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio7">Despegable</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio8">Fecha</label>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4">
                                        <div class="custom-control custom-radio mb-5">
                                            <input type="radio" id="customRadio9" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio9">Hora</label>
                                        </div>
                                    </div>

                            </div>
                            </div>   
						</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
    <?php
    include "views/include/footer.php";
    ?>

<style>
.modal-full {
    min-width: 100%;
    margin: 0px;
}

.modal-full .modal-content {
    min-height: 100vh;

}

.modal-header {
    /*
    margin-top: 65px;
    */
}

</style>