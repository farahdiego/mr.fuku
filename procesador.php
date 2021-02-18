<?
// Formulario php comentado. Los items en naranja pueden eliminarse
// y son explicaciones de cada paso.

// declaración de variables globales.
$nombre=$_GET['nombre'] ?: '(sin nombre)';
$correo=$_GET['correo'];
$empresa=$_GET['empresa'];
$consulta=$_GET['consulta'];

//Aquí se coloca el destinatario del mail (entre comillas dobles)
mail("ral@teslamd.com",

// Aqui va el asunto del mail (entre comillas dobles)
"Consulta de $nombre para Tesla MD",

// Aqui van cada una de las variables (campos del formulario entre comillas dobles)
// en el órden en que se reciben en el cuerpo del mail
"\nNombre: $nombre
\nCorreo: $correo
\nEmpresa: $empresa
\nConsulta: $consulta",

// Aqui va el Remitente del mail
"From: consulta_web@teslamd.com");

// Aqui va la url del archivo de respuesta que indica al usuario que el formulario fué enviado
// El comando header es el equivalente a link de html
header("Location: gracias.html");
?>
