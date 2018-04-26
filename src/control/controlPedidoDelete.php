<?php
$conexion = mysqli_connect('localhost','root','','wichitrocov');
if($_SERVER['REQUEST_METHOD']=='POST'){

//Guardamos en variables los datos enviados
$codigo_venta = $_POST['codigo'];


mysqli_query($conexion,"DELETE FROM venta WHERE idVenta = $codigo_venta");

//mysql_query($sql);
    
echo '<script>alert("BORRADO CON EXITO")</script>';
require_once("../../Public/wichitroco/pedidos.html");

}
?>