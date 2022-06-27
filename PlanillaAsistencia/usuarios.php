<!-- conexion a la base de datos -->
<?php
$enlace = mysqli_connect("localhost","root","");
if (!$enlace) {
    die('Nada por aqui: '.mysqli_error());
} 
$db_seleccionada = mysqli_select_db('usuarios', $enlace);
if (!$enlace){
    die ('Nada por alla: '.mysqli_error());
} 

// <!-- envia los valores del formulario a la base de datos -->
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$comunidad = $_POST["comunidad"];
$cargo = $_POST["cargo"];
$usuario = $_POST["usuario"];
$Pass = $_POST["contrasenia"];
$RPass = $_POST["confirmar contrasenia"];

// <!-- confirmacion de contraseña -->
if ($Pass != $Pass)
    die ("<h2>Algo esta mal<h2>");


// <!-- encriptar contraseñas 
$contraseña = md5 ($Pass);

// <!-- ingresa la info a la tabla -->
$sql = "insert into registro values ('$nombre','$apellido','$comunidad','$cargo','$usuario','$contraseña'),$enlace)" or die ("<h2>No se mando nada</h2>");

// <!-- redirige a la pagina -->
echo 
'por que no anda';
?>