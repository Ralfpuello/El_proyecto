<?php
class database
{
	private $servername;
	private $username;
	private $password;
	private $database;
	//Función para conectarse a la base de datos
	public function conect()
	{
		$result = false;
		$this->servername = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->database = "wichitrocov";
		$mysqli = new mysqli($this->servername, $this->username, $this->password, $this->database);
		
		return $mysqli;
}
}
?>