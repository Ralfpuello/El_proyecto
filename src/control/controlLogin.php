<?php
require '../usuario/Login.php';

if ($_SERVER['REQUEST_METHOD']=='POST'){
	
	if (isset($_POST['username'])&& 
		isset($_POST['password'])){
		
		$response = Login::loguin(
			$_POST['username'],
			$_POST['password']);
		if ($response){
			$meta["message"]="OK";
			$meta["data"]=$response;
			$meta["success"]= true;
//			print json_encode($meta);
			require_once("../../Public/wichitroco/menu.html");
		}else{
			$meta['success']=false;
			$meta['message']="ERROR";
			//print json_encode($meta);
			echo '<script>alert("ERROR DE INICIO DE SESION")</script>';
			require_once("../../Public/wichitroco/IniciarS.html");
		}
	}
}

