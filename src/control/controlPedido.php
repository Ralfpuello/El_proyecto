<?php
$conexion = mysqli_connect('localhost','root','','wichitrocov');

//mysql_select_db('wichitrocov',$conexion);
if ($_SERVER['REQUEST_METHOD']=='POST'){
//$codigo_venta = $_POST['codigo_venta'];
$empresa= $_POST['empresa'];
$codigo = $_POST['codigo'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$valor = $_POST['valor'];

mysqli_query($conexion, "INSERT INTO venta (idventa,codigoProducto, empresa,cantidad,totalventa,producto) 
VALUES ($codigo, $codigo , '$empresa', $cantidad,$valor,'$producto')");
}


if($_SERVER['REQUEST_METHOD']=='POST'){

//Guardamos en variables los datos enviados
$codigo_venta = $_POST['codigo_venta'];


mysqli_query($conexion,"DELETE FROM venta WHERE idVenta = $codigo_venta");

//mysql_query($sql);
    
//echo '<script>alert("BORRADO CON EXITO")</script>';
//require_once("../../Public/wichitroco/pedidos.html");



}

//Comprobamos que se haya presionado el boton enviar
if(isset($_POST['Guardar'])){

//Guardamos en variables los datos enviados
$codigo_venta = $_POST['codigo_venta'];
$empresa= $_POST['empresa'];
$codigo = $_POST['codigo'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$valor = $_POST['valor'];

mysqli_query($conexion, "INSERT INTO venta (idventa,codigoProducto,empresa,cantidad,totalventa,producto) 
VALUES ($codigo_venta, $codigo, '$empresa', $cantidad,$valor,'$producto')");

//echo mysql_query($sql);

    
echo '<script>alert("GUARDADO EXITOSAMENTE")</script>';
require_once("../../Public/wichitroco/pedidos.html");


}


if(isset($_POST['Borrar'])){

//Guardamos en variables los datos enviados
$codigo_venta = $_POST['codigo_venta'];


mysqli_query($conexion,"DELETE FROM venta WHERE idVenta = $codigo_venta");

//mysql_query($sql);
    
echo '<script>alert("BORRADO CON EXITO")</script>';
require_once("../../Public/wichitroco/pedidos.html");



}





if(isset($_POST['Actualizar'])){

$codigo_venta = $_POST['codigo_venta'];
$Empresa= $_POST['empresa'];
$codigo = $_POST['codigo'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$valor = $_POST['valor'];


mysqli_query($conexion, "UPDATE venta SET  empresa = '$Empresa', codigoProducto= $codigo, producto = '$producto', cantidad = $cantidad ,totalventa = $valor
WHERE idventa = '$codigo_venta'  ");

//mysql_query($sql);
    
echo '<script>alert("ACTUALIZADO EXITOSAMENTE")</script>';
require_once("../../Public/wichitroco/productos.html");



}



?>





