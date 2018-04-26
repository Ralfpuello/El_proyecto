<?php
$conexion = mysqli_connect('localhost','root','','wichitrocov');

//mysql_select_db('wichitrocov',$conexion);
if($_SERVER['REQUEST_METHOD']=='POST'){

//Guardamos en variables los datos enviados
$codigo = $_POST['codigo'];


mysqli_query($conexion,"DELETE FROM  usuario WHERE codigoUsuario = '$codigo'");

//mysql_query($sql);
    
echo '<script>alert("BORRADO CON EXITO")</script>';
require_once("../../Public/wichitroco/crearUsuario.html");

}


?>
