<?
// Formulario php comentado. Los items en naranja pueden eliminarse
// y son explicaciones de cada paso.

// declaración de variables globales.
$nombreyapellido=$_GET['nombreyapellido'];
$telefono=$_GET['telefono'];
$correo=$_GET['correo'];
$nombreyapellidodelchico=$_GET['nombreyapellidodelchico'];
$edad=$_GET['edad'];
$fechadenacimiento=$_GET['fechadenacimiento'];
$horario=$_GET['horario'];
$empresa=$_GET['empresa'];
$consulta=$_GET['consulta'];

//Aquí se coloca el destinatario del mail (entre comillas dobles)
mail("diegofarah@outlook.com",

// Aqui va el asunto del mail (entre comillas dobles)
"Consulta de Tesla MD",

// Aqui van cada una de las variables (campos del formulario entre comillas dobles)
// en el órden en que se reciben en el cuerpo del mail
"\nnombreyapellido:$nombreyapellido
\ntelefono:$telefono
\ncorreo:$correo
\nnombreyapellidodelchico:$nombreyapellidodelchico
\nedad:$edad
\nfechadenacimiento:$fechadenacimiento
\nhorario:$horario
\nempresa:$empresa
\nconsulta:$consulta",

// Aqui va el Remitente del mail
"From: diegofarah@outlook.com");

// Aqui va la url del archivo de respuesta que indica al usuario que el formulario fué enviado
// El comando header es el equivalente a link de html
header("Location: gracias.html");
?>
