<?php include ("header.php"); ?>
<div class="container-fluid">
    <h1 class="display-4 text-center">Medicamentos</h1>
    <hr>
    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#agregar">Nuevo medicamento</button>
    <form method="post">
        <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="modalMedicamentos" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalMedicamentos">Nuevo medicamento</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body mx-3">
                            <div class="form-group">
                                <label for="campo1">Campo 1</label>
                                <input type="text" class="form-control" name="campo1" id="campo1">
                            </div>
                            <div class="form-group">
                                <label for="campo2">Campo 2</label>
                                <input type="text" class="form-control" name="campo2" id="campo2">
                            </div>
                            <div class="form-group">
                                <label for="campo3">Campo 3</label>
                                <input type="text" class="form-control" name="campo3" id="campo3">
                            </div>
                            <div class="form-group">
                                <label for="campo4">Campo 4</label>
                                <input type="text" class="form-control" name="campo4" id="campo4">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-primary">Aceptar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Tabla que contiene los medicamentos -->
        <table class="table table-striped table-hover table-bordered" id="tabla">
            <thead class="thead-dark">
                <tr class="text-center align-middle">
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td class="text-center align-middle">Acetaminofén</td>
                        <td class="text-center align-middle">
                            <button class="btn btn-outline-primary">Detalles</button>
                            <button class="btn btn-outline-danger">Eliminar</button>
                        </td>
                    </tr>
            </tbody>
        </table>
    <!-- Fin tabla que contiene los medicamentos -->
</div>