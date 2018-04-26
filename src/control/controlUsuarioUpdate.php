<?php
$conexion = mysqli_connect('localhost','root','','wichitrocov');

//mysql_select_db('wichitrocov',$conexion);
if($_SERVER['REQUEST_METHOD']=='POST'){

//Guardamos en variables los datos enviados
$codigo = $_POST['codigo'];
$name= $_POST['name'];
$lastname = $_POST['lastname'];
$usuario = $_POST['usuario'];
$pass= $_POST['pass'];

mysqli_query ($conexion,"UPDATE usuario SET nombre ='$name', apellido = '$lastname', usuario = '$usuario',pass = '$pass' 
WHERE codigoUsuario = '$codigo'");

//mysql_query($sql);
    
echo '<script>alert("ACTUALIZADO EXITOSAMENTE")</script>';
require_once("../../Public/wichitroco/crearUsuario.html");

}

?>





