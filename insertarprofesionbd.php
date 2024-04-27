<?php
include 'conexion.php';


$cod = $_POST['cod'];
$prof = strtoupper($_POST['prof']);


$conn = Conectarse();

$sql = "INSERT INTO profesion (codpro, profesion) VALUES ('$cod', '$prof')";

if (mysqli_query($conn, $sql)) {
    
    echo "Datos insertados correctamente";
} else {
    
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
?>

<script type="text/javascript">cargaurl('profesiones.php', 'listado');</script>
