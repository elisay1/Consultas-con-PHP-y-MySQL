<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASO001</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="mb-0 text-center">Ingresos</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><button type="button" class="btn btn-primary btn-block"
                                    onclick="cargaurl('cargo.php', 'detalle')">Cargos</button></li>
                            <li class="list-group-item"><button type="button" class="btn btn-primary btn-block"
                                    onclick="cargaurl('profesiones.php', 'detalle')">Profesiones</button></li>
                            <li class="list-group-item"><button type="button" class="btn btn-primary btn-block"
                                    onclick="cargaurl('empleados.php', 'detalle')">Empleados</button></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h2 class="mb-0 text-center">Consultas</h2>
                    </div>
                    <div class="card-body">
                    <button type="button" class="btn btn-info btn-block" onclick="cargaurl('consultas/consulta1.php', 'detalle')">consulta 1</button>
                    <button type="button" class="btn btn-info btn-block" onclick="cargaurl('consultas/consulta2.php', 'detalle')">consulta 2</button>
                    <button type="button" class="btn btn-info btn-block" onclick="cargaurl('consultas/consulta3.php', 'detalle')">consulta 3</button>
                    <button type="button" class="btn btn-info btn-block" onclick="cargaurl('consultas/consulta4.php', 'detalle')">consulta 4</button>
                    <button type="button" class="btn btn-info btn-block" onclick="cargaurl('consultas/consulta5.php', 'detalle')">consulta 5</button>
                    <button type="button" class="btn btn-info btn-block" onclick="cargaurl('consultas/consulta6.php', 'detalle')">consulta 6</button>
                    <button type="button" class="btn btn-info btn-block" onclick="cargaurl('consultas/consulta7.php', 'detalle')">consulta 7</button>
                    <button type="button" class="btn btn-info btn-block" onclick="cargaurl('consultas/consulta8.php', 'detalle')">consulta 8</button>
                    <button type="button" class="btn btn-info btn-block" onclick="cargaurl('consultas/consulta9.php', 'detalle')">consulta 9</button>
                    <button type="button" class="btn btn-info btn-block" onclick="cargaurl('consultas/consulta10.php', 'detalle')">consulta 10</button>
                        
                    </div>
                </div>
            </div>
            <div id="detalle" class="col-md-9"></div>

            
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/funciones.js"></script>

</html>