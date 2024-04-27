function cargaurl(url, contenedor) {
  var url = url;
  var contenedor = contenedor;
  document.getElementById(contenedor).html =
    "<img src='imagenes/preload1.gif'width='16' height='16'>";
  $.get(url, {}, function (data) {
    $("#" + contenedor).html(data);
  });
}

// ESTE OCULTA
var detalle = document.getElementById("detalle");


function mostrarDetalle() {
  detalle.style.display = "block";
}


function ocultarDetalle() {
  detalle.style.display = "none";
}

// Función para cargo
function nuevocargo(contenedor) {
  var cod = $("#cod").val();
  var descrip = $("#descrip").val();

  $("#" + contenedor).html(
    "<img src='imagenes/preload1.gif' width='16' height='16'>"
  );

  $.post(
    "insertarcargobd.php",
    {
      cod: cod,
      descrip: descrip,
    },
    function (data) {
      $("#" + contenedor).html(data);
    }
  );
}

// Función para profesion
function nuevoprofesion(contenedor) {
  var cod = $("#cod").val(); 
  var prof = $("#prof").val(); 
  var contenedor = contenedor;


  $("#" + contenedor).html(
    "<img src='imagenes/preload1.gif' width='16' height='16'>"
  );

  // Enviar los datos al script PHP mediante una solicitud AJAX
  $.ajax({
    url: "insertarprofesionbd.php", 
    method: "POST", 
    data: {
      
      cod: cod,
      prof: prof,
    },
    success: function (data) {
     
      $("#" + contenedor).html(data); 
    },
  });
}


// Función para nuevos empleados
function nuevoempleado(contenedor) {
  var nombre = $("#nombre").val();
  var apep = $("#apep").val(); 
  var apepm = $("#apepm").val(); 
  var cargo = $("#cargo").val(); 
  var profesion = $("#profesion").val(); 

  
  if (
    nombre !== "" &&
    apep !== "" &&
    apepm !== "" &&
    cargo !== "" &&
    profesion !== ""
  ) {
   
    $("#" + contenedor).html(
      "<img src='imagenes/preload1.gif' width='16' height='16'>"
    );

    // Enviar los datos al script PHP mediante una solicitud AJAX
    $.ajax({
      url: "insertarempleadobd.php", 
      method: "POST", 
      data: {
        nombre: nombre,
        apep: apep,
        apepm: apepm,
        cargo: cargo,
        profesion: profesion,
      },
      success: function (data) {
        cargarTablaEmpleados();
      },
    });
  } else {
    alert(
      "Todos los campos son obligatorios. Por favor, complete el formulario antes de enviarlo."
    );
  }
}

// Función para cargar la tabla de empleados
function cargarTablaEmpleados() {
  $.ajax({
    url: "tablaempleados.php", 
    method: "GET", 
    success: function (data) {
      $("#listado").html(data);
    },
  });
}


