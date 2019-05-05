<!DOCTYPE html>
<html lang="es">

<?php
require_once('../../core/helpers/dashboard.php');
Dashboard::headerTemplate('Productos');
?>
<div class="container-fluid" id="container">
    <h1 class="text-center">PRODUCTOS</h1>
    <div class="search-box">
        <div class="row">
            <div class="col-sm-11 col-9">
                <input type="text" id="myInput" class="form-control" placeholder="Buscar">
            </div>
            <!-- Botón de agregar -->
            <div class="col-sm-1 col-3">
                <a href="#modal-create" class="btn btn-success tooltipped modal-trigger" data-toggle="modal"
                    data-tooltip="Agregar">
                    <span class="btn-label">
                        <i class="fa fa-plus"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
    <table class="highlight">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>PRECIO (US$)</th>
                <th>CATEGORÍA</th>
                <th>ESTADO</th>
                <th>ACCIÓN</th>
            </tr>
        </thead>
        <tbody id="tbody-read">
        </tbody>
    </table>
</div>
<!-- Fin contenido -->
<!-- Modal de Agregar -->
<div id="modal-create" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">AGREGAR PRODUCTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="form-create">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-list"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_nombre" type="text" name="create_nombre" class=" form-control validate"
                                placeholder="Nombre" required>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-file-alt"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_descripcion" type="text" name="create_descripcion"
                                class="form-control validate" placeholder="Descripción" required />
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_price" type="number" name="create_price"
                                class="form-control validate valid" max="999.99" min="0.01" placeholder="Precio"
                                required />
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fa fa-image"></i>
                        </div>
                        <div class="custom-file col s11 m6">
                            <input type="file" class="custom-file-input" id="create_archivo" name="create_archivo">
                            <label class="custom-file-label" for="create_archivo">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-1">
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="col-sm-11">
                            <input id="create_state" type="number" name="create_state"
                                class="form-control validate valid" max="1" min="0" placeholder="Estado" required />
                        </div>
                    </div>
                </div>
                <div class="input-group-prepend">
                <div class="col-sm-1">
                            <i class="fas fa-eye"></i>
                        </div>
                    <div class="col-lg-8">
                        <select class="custom-select" id="create_categoria">
    
                        </select>
                    </div>
                </div>
                <div class="modal-body text-center">
                    <button type="button" class="btn btn-secondary tooltipped" data-toogle="Cancelar">Cancelar</button>
                    <button type="submit" class="btn btn-primary tooltipped" data-tooltip="Crear">Aceptar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal de Modificar -->
<div class="modal fade" id="ventana2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">MODIFICAR PRODUCTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="preview">
                        </div>
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6 text-center">
                                <button id="triggerUpload" class="btn btn-primary"> <i class="fa fa-magic"></i>
                                    Subir imagen</button>
                                <input type="file" id="filePicker" />
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-sm-3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <i class="fa fa-hashtag"></i>
                    </div>
                    <div class="col-sm-11">
                        <input placeholder="Código" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <i class="fa fa-list"></i>
                    </div>
                    <div class="col-sm-11">
                        <input placeholder="Nombre" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <i class="fa fa-eye"></i>
                    </div>
                    <div class="col-sm-11">
                        <select class="form-control">
                            <option>Cámara</option>
                            <option>Accesorios</option>
                            <option>Paquete</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <i class="fa fa-file-alt"></i>
                    </div>
                    <div class="col-sm-11">
                        <textarea placeholder="Descripción" class="form-control" id="exampleFormControlTextarea1"
                            rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <i class="fa fa-dollar-sign"></i>
                    </div>
                    <div class="col-sm-11">
                        <input placeholder="Precio" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-1">
                        <i class="fa fa-box-open"></i>
                    </div>
                    <div class="col-sm-11">
                        <input placeholder="Cantidad" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal de Eliminar -->
<div class="modal fade" id="ventana3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ELIMINAR PRODUCTO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>¿Está seguro de que desea eliminar este
                    producto?
                </h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Aceptar</button>
            </div>
        </div>
    </div>
</div>

            <?php
Dashboard::footerTemplate('productos.js');
?>