<?php
$conexion = mysqli_connect('localhost','root','','wichitrocov');

//mysql_select_db('wichitrocov',$conexion);


//Comprobamos que se haya presionado el boton enviar
if ($_SERVER['REQUEST_METHOD']=='POST'){
echo "holaj  ";

//Guardamos en variables los datos enviados
$codigo = $_POST['codigo'];
$descripcion= $_POST['descripcion'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$valor = $_POST['valorTotal'];


mysqli_query($conexion, "INSERT INTO producto (idProducto,descripcion,codigoProducto,producto,cantidad,Valor) 
VALUES ($codigo, '$descripcion', $codigo, '$producto', '$cantidad', '$valor')");

//echo mysql_query($sql);
echo '<script>alert("GUARDADO EXITOSAMENTE")</script>';
require_once("../../Public/wichitroco/productos.html");

}


if(isset($_POST['Borrar'])){

//Guardamos en variables los datos enviados
$codigo = $_POST['codigo'];


mysqli_query($conexion, "DELETE FROM  producto WHERE idProducto = '$codigo'");

//mysql_query($sql);
    
echo '<script>alert("BORRADO CON EXITO")</script>';
require_once("../../Public/wichitroco/productos.html");



}


if(isset($_POST['Actualizar'])){

$codigo = $_POST['codigo'];
$descripcion= $_POST['descripcion'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$valor = $_POST['valorTotal'];

mysqli_query($conexion,"UPDATE producto SET descripcion ='$descripcion', producto = '$producto', cantidad='$cantidad', Valor = '$valor' WHERE codigoProducto = '$codigo'  ");

//mysql_query($sql);

	echo '<script>alert("ACTUALIZADO EXITOSAMENTE")</script>';require_once("../../Public/wichitroco/productos.html");


}



?>





