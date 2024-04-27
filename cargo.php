<div class="container">
    <div class="row">
        <div class="col-md-12 offset-md-2">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Ingreso de nuevos cargos</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="cod" class="col-sm-3 col-form-label">Código:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="cod" name="cod" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descrip" class="col-sm-3 col-form-label">Descripción:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="descrip" name="descrip" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 text-center">
                                <button type="button" class="btn btn-primary mr-2" onclick="nuevocargo('listado')">Enviar</button>
                                <button type="reset" class="btn btn-secondary">Borrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
