<?php
include_once 'conexion.php'; 

// Obtener datos 
$nombre = strtoupper($_POST['nombre']);
$apep = strtoupper($_POST['apep']);
$apepm = strtoupper($_POST['apepm']);
$cargo = $_POST['cargo'];
$profesion = $_POST['profesion'];


$conn = Conectarse();


$sql = "INSERT INTO empleado (nombres, apepaterno, apematerno, codcargo, codpro) 
        VALUES ('$nombre', '$apep', '$apepm', '$cargo', '$profesion')";

if (mysqli_query($conn, $sql)) {
} else {
  
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>
<script type="text/javascript">cargaurl('empleado.php', 'listado');</script>
