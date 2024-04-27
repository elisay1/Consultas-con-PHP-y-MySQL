<?php
include 'conexion.php';


if (isset($_POST['descrip'])) {
     
    $cod = $_POST['cod'];
    $descrip = strtoupper($_POST['descrip']);

   
    $conn = Conectarse();

   
    $sql = "INSERT INTO cargo (codcargo, descri) VALUES ('$cod', '$descrip')";

    if (mysqli_query($conn, $sql)) {
        
        echo "Datos insertados correctamente";
    } else {
        
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    
    mysqli_close($conn);
} else {
    
    echo "La clave 'descrip' no está definida en el array \$_POST";
}

?>

<script type="text/javascript">cargaurl('cargo.php', 'listado');</script>
