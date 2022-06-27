<!-- conexion a la base de datos -->
<?php
$enlace = mysqli_connect("localhost","root","",);
if (!$enlace) {
    die('Nada por aqui: '.mysqli_error());
} 
$db = mysqli_select_db('mysqli','usuarios');
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
$Rpass = $_POST["confirmar_contrasenia"];

// <!-- confirmacion de contraseña -->
if ($Pass != $Rpass)
    die ("<h2>Algo esta mal<h2>");


// <!-- encriptar contraseñas 
$contrasenia = md5($Pass);

// <!-- ingresa la info a la tabla -->
$sql = "insert into registro values ('$nombre','$apellido','$comunidad','$cargo','$usuario','$contrasenia'),$enlace)";

// <!-- redirige a la pagina -->
echo 
'por que no anda';
?>