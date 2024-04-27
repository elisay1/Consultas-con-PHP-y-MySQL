<div class="container" id="listado">
    <div class="row">
        <div class="col-md-12 offset-md-2">
            <div class="card">                
                <div class="card-header bg-primary text-white text-center">
                    <h4>Ingreso de nuevas profesiones</h4>
                </div>
                <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="col-md-3">
                                <label for="cod">Codigo: </label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="cod" name="cod" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <div class="form-row">
                            <div class="col-md-3">
                                <label for="prof">Profesión: </label>
                            </div>
                            <div class="col-md-5">
                                <input type="text" class="form-control" id="prof" name="prof" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12 text-center">

                        <div class="col-md-12">
                            <input type="button" class="btn btn-outline-primary" onclick="nuevoprofesion('listado');" value="Enviar">
                            <button class="btn btn-outline-danger" type="reset">Borrar</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </fieldset>
        </div>
    </div>
</div>
</div>