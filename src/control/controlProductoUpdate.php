<?php
$conexion = mysqli_connect('localhost','root','','wichitrocov');



if ($_SERVER['REQUEST_METHOD']=='POST'){

$codigo = $_POST['codigo'];
$producto = $_POST['producto'];
$descripcion= $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$valor = $_POST['valor'];

mysqli_query($conexion,"UPDATE producto SET descripcion ='$descripcion', producto = '$producto', cantidad='$cantidad', Valor = '$valor' WHERE codigoProducto = '$codigo'  ");

//mysql_query($sql);

	echo '<script>alert("ACTUALIZADO EXITOSAMENTE")</script>';require_once("../../Public/wichitroco/productos.html");


}



?>





