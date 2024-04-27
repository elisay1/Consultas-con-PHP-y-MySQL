<?php
include_once 'conexion.php';

?>
<div class="container" id="listado">
    <div class="row">
        <div class="col-md-12">

            <div class="card-header bg-primary text-white text-center">
                <h4>Ingreso de nuevos Empleados</h4>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-md-12">
                    <div class="form-row">
                        <div class="col-md-3">
                            <label for="nombre">Nombre: </label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <div class="form-row">
                        <div class="col-md-3">
                            <label for="apep">Apellido Paterno: </label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="apep" name="apep" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <div class="form-row">
                        <div class="col-md-3">
                            <label for="apem">Apellido Materno: </label>
                        </div>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="apepm" name="apepm" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <div class="form-row">
                        <div class="col-md-3">
                            <label for="cargo">Cargo:</label>
                        </div>
                        <div class="form-row">
                            <div class="col-md-10">
                                <?php

                                $conn = Conectarse();


                                $sql = "SELECT codcargo, descri FROM cargo";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<select class="form-control" name="cargo" id="cargo" required>';
                                    echo '<option value="">Seleccionar...</option>';
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['codcargo'] . '">' . $row['descri'] . '</option>';
                                    }
                                    echo '</select>';
                                } else {
                                    echo 'No se encontraron cargos en la base de datos.';
                                }

                                // Cerrar la conexión
                                //$conn->close();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                <div class="col-md-12">
                    <div class="form-row">
                        <div class="col-md-3">
                            <label for="prof">Profesion:</label>
                        </div>
                        <div class="form-row">
                            <div class="col-md-10">
                                <?php

                                $conn = Conectarse();


                                $sql = "SELECT codpro, profesion FROM profesion";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    echo '<select class="form-control" name="profesion" id="profesion" required>';
                                    echo '<option value="">Seleccionar...</option>';

                                    while ($row = $result->fetch_assoc()) {
                                        echo '<option value="' . $row['codpro'] . '">' . $row['profesion'] . '</option>';
                                    }
                                    echo '</select>';
                                } else {
                                    echo 'No se encontraron profesiones en la base de datos.';
                                }

                                // Cerrar la conexión
                                //$conn->close();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12 text-center">

                    <div class="col-md-12">
                        <input type="button" class="btn btn-outline-primary" onclick="nuevoempleado('listado');" value="Enviar">
                        <button type="reset" class="btn btn-secondary">Borrar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container">
    <button class="btn btn-primary" onclick="cargarTablaEmpleados('listado')">Ver Tabla de Empleados</button>
    <div id="listado">


    </div>
</div>