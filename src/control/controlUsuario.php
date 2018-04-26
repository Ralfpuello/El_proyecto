<?php
$conexion = mysqli_connect('localhost','root','','wichitrocov');

//Comprobamos que se haya presionado el boton enviar
if(isset($_POST['Guardar'])){

//Guardamos en variables los datos enviados
$codigo = $_POST['codigo'];
$name= $_POST['name'];
$lastname = $_POST['lastname'];
$usuario = $_POST['usuario'];
$pass= $_POST['pass'];

mysqli_query($conexion, "INSERT INTO usuario (idUsuario,codigoUsuario, nombre, apellido, usuario,pass) VALUES ('$codigo','$codigo', '$name', '$lastname', '$usuario', '$pass')");

//mysqli_query($sql);
    
echo '<script>alert("GUARDADO EXITOSAMENTE")</script>';
require_once("../../Public/wichitroco/crearUsuario.html");


}


if(isset($_POST['Borrar'])){

//Guardamos en variables los datos enviados
$codigo = $_POST['codigo'];


mysqli_query($conexion,"DELETE FROM  usuario WHERE codigoUsuario = '$codigo'");

//mysql_query($sql);
    
echo '<script>alert("BORRADO CON EXITO")</script>';
require_once("../../Public/wichitroco/crearUsuario.html");



}


if(isset($_POST['Actualizar'])){

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





