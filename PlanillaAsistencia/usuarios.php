<!-- conexion a la base de datos -->
<?php
$link = mysql_connect("localhost","root","") or die ("<h2>Nada por aqui!!</h2>");
$db = mysql_select_db("usuarios",$link) or die ("<h2>Nada por alla</h2>");

// <!-- envia los valores del formulario a la base de datos -->
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$comunidad=$_POST["comunidad"];
$cargo=$_POST["cargo"];
$usuario=$_POST["usuario"];
$Pass=$_POST["contraseña"];
$RPass=$_POST["confirmar contraseña"];

// <!-- confirmacion de contraseña -->
if ($Pass != $rPass){
    die (No son igules algo esta mal)
}

// <!-- encriptar contraseñas -->
$contraseña = md5 ($Pass);

// <!-- ingresa la info a la tabla -->
mysql_query("INSERT INTO registro VALUES ('$nombre','$apellido','$comunidad','$cargo','$usuario','$contraseña')",$link) or die ("<h2>No se mando nada</h2>");

// <!-- redirige a la pagina -->
echo '
<a href="lista.html"></a>';
?>