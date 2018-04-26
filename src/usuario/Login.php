<?php
require'../db.php';
/**
* 
*/
class Login
{
	

	public static function loguin (
		$usuario,
		$pass){
		$db = new database;
		$con = $db->conect();
		if($con->connect_error){
			$this->insert=false;
		}else{
		$result = $con->query("SELECT idUsuario, codigoUsuario, nombre, apellido, usuario,pass FROM usuario WHERE usuario = '{$usuario}' AND pass = '{$pass}'");

			if($result->num_rows === 0){
				$x=false;
			}else{
				$x = true;
			}
		}
		return $x;
	}
}
?>
