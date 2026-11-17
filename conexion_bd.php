<?php
$conexion = mysqli_connect("localhost","root","","datos");

if($conexion) {
echo "Conexion exitosa";
}else {
echo "Conexión fallida";

}
?>
