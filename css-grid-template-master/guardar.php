<?php

include("abre.php");

$nombre = $_POST ['nombre'];
$apellido = $_POST [ 'apellidos'];
$correo = $_POST ['correo'];
$contrasena = $_POST ['contrasena'];


$consulta = "INSERT INTO datos(nombre, apellido, correo , contrasena) VALUES
('$nombre', '$apellido','$correo','$contrasena')";
if ($conexion->query($consulta) === TRUE) {
header ("Location: index.html");/* regresa al formulario*/
}else{
echo  "Error: " .$consulta ."<br>" . $conexion->error;
}
$conexion->close();
?>