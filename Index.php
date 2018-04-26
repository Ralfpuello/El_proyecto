<?php
require 'vendor/autoload.php';
require_once('Public/clases/google_auth.php');
require_once('Public/init.php');

$googleClient = new Google_Client();
$auth= new GoogleAuth($googleClient);

if($auth->checkRedirectCode()){
	//die($_GET['code']);
	header('Location: Index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<title>TEKNOLOGI BUTIKK, Denke groß</title>
<link rel="stylesheet" type="text/css" href="css/style.css">

<link <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<body>

	<nav class="navbar navbar-info bg-info justify-content-between">
  <h1><span class="navbar-text">BIENVENIDO</span></h1>
</nav>
<center>
	<h1>TEKNOLOGI BUTIKK, Denke groß</h1>
  <br>
<img target="_blank" src="Public\imagen\ventas.png" border="1" alt="no pudo cargar">
  <br>
  <br>
  <br>
  <table>
    <tr>
      <td><a href="wichitroco/IniciarS.html"><button type="button" class="btn btn-info">Iniciar sesion</button></a></td>
      
  </table>
</center>
	<?php if (!$auth->isLoggedIn()):?>
	<center><a href="<?php echo $auth->getAuthUrl();?>">Inicia Sesion con Google</a></center>
<?php else: ?>
 <center><a href="logout.php"><button type="button" class="btn btn-info">Cerrar Sesion</button></a></center>
 <?php endif; ?>
</body>
</html>