<?php
$conexion = mysqli_connect('localhost','root','','wichitrocov');
if($_SERVER['REQUEST_METHOD']=='POST'){

$Empresa= $_POST['empresa'];
$codigo = $_POST['codigo'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$valor = $_POST['valor'];


mysqli_query($conexion, "UPDATE venta SET  empresa = '$Empresa', codigoProducto= $codigo, producto = '$producto', cantidad = $cantidad ,totalventa = $valor
WHERE idventa = '$codigo'");

//mysql_query($sql);
    
echo '<script>alert("ACTUALIZADO EXITOSAMENTE")</script>';require_once("../../Public/wichitroco/pedidoUpdate.html");



}

?>