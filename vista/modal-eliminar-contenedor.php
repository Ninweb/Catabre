<!--Modal Eliminar-->


<div class="modal fade" id="eliminar-contenedor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" 
                       data-dismiss="modal">
                           <span aria-hidden="true">&times;</span>
                           <span class="sr-only">Cerrar</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">
                       Aviso
                    </h4>
                </div>
                
            <!-- Modal Body -->
                 <div class="modal-body">
                     <center>
                        <div class="alert alert-danger">
                            <strong><i class="fa fa-exclamation-triangle fa-2x" aria-hidden="true"></i></strong> ¿Está Seguro de eliminar este Contenedor?
                        </div>  
                    </center>                   
                </div>
                
            <!-- Modal Footer -->
                <div class="modal-footer">
                     <form id="formularioEliminarContenedor">
                        <input type="hidden" name="id_contenedor" value="">
                        <input type="hidden" name="funcion" value="eliminar">
                         <div class="form-group">        
                            <div class="col-sm-offset-2 col-sm-12">
                                <button type="button" class="btn btn-default"
                                data-dismiss="modal">
                                    Cancelar
                                 </button>    
                                <button type="submit" name="eliminar" class="btn btn-primary">Eliminar</button>
                             </div>
                          </div>
                    </form>

                    <div id="mostrarDatos"></div>

                </div>
            </div>
         </div>
    </div>

   <script src="js/ajaxRegistros.js"></script>