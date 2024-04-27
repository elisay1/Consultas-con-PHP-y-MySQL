<?php

include_once '../conexion.php';

$conn = Conectarse();

$sql = "SELECT e.apepaterno, e.apematerno, e.nombres, c.descri AS cargo, p.profesion
        FROM empleado e, profesion p, cargo c
        WHERE e.codpro = p.codpro
        AND e.codcargo = c.codcargo
        LIMIT 0, 30";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo '<div class="table-responsive">';
    echo '<table class="table table-striped table-bordered">';
    echo '<thead style="background-color: #17A2B8; color: white;">';
    echo '<tr>';
    echo '<th>Apellido Paterno</th>';
    echo '<th>Apellido Materno</th>';
    echo '<th>Nombres</th>';
    echo '<th>Cargo</th>';
    echo '<th>Profesión</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['apepaterno'] . '</td>';
        echo '<td>' . $row['apematerno'] . '</td>';
        echo '<td>' . $row['nombres'] . '</td>';
        echo '<td>' . $row['cargo'] . '</td>';
        echo '<td>' . $row['profesion'] . '</td>';
        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo 'No se encontraron empleados.';
}


$conn->close();
?>
