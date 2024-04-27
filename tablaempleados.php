<?php

include_once 'conexion.php';


$cn = Conectarse();


$sql = "SELECT e.id, CONCAT(e.nombres, ' ', e.apepaterno, ' ', e.apematerno) AS nombrecompleto, c.descri AS cargo, p.profesion
        FROM empleado e
        JOIN cargo c ON e.codcargo = c.codcargo
        JOIN profesion p ON e.codpro = p.codpro
        ORDER BY e.id DESC";
$resultado = mysqli_query($cn, $sql);


if ($resultado && mysqli_num_rows($resultado) > 0) {
   
    echo '<div class="table-responsive">';
    echo '<table class="table table-striped table-bordered">';
    echo '<thead style="background-color: #007BFF; color: white;">';
    echo '<tr><th>Codigo</th><th>Nombre Completo</th><th>Cargo</th><th>Profesión</th></tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo '<tr>';
        echo '<td>' . $fila['id'] . '</td>';
        echo '<td>' . $fila['nombrecompleto'] . '</td>';
        echo '<td>' . $fila['cargo'] . '</td>';
        echo '<td>' . $fila['profesion'] . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo "No se encontraron empleados.";
}


mysqli_close($cn);
?>
<br/>
<script type="text/javascript">cargaurl('profeciones.php', 'listado');</script>
