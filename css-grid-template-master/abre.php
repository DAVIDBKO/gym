<?php

$conexion = new mysqli("localhost", "root","", "usuarios");
if ($conexion){
echo "la gestion fue exitosa !";
}else{

echo "Fallo la gestion";
}
?>