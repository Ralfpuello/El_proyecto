<?php
$conexion = mysqli_connect('localhost','root','','wichitrocov');
require_once("../../Public/wichitroco/existentes.html");

//mysql_select_db('wichitrocov',$conexion);


//Comprobamos que se haya presionado el boton enviar
if(isset($_POST['codigo1'])){

//Guardamos en variables los datos enviados
$codigo = $_POST['codigo'];

$result = mysqli_query($conexion, "SELECT idProducto, descripcion, codigoProducto, producto, cantidad, Valor FROM producto  WHERE codigoProducto like '%{$codigo}%'");
echo"<center>";
if ($row = mysqli_fetch_array($result)){
	echo "<table border = '1' bgcolor = '#99ccff' > \n"; 
	echo "<tr>
	<td>CODIGO</td>
	<td>PRODUCTO.</td>
	<td>DESCRIPCION</td>
	<td>CANTIDAD</td>
	<td>VALOR</td>
	</tr> \n"; 
	do { 
		echo "<tr>
		<td>".$row["codigoProducto"]."</td>
		<td>".$row["producto"]."</td>
		<td>".$row["descripcion"]."</td>
		<td>".$row["cantidad"]."</td>
		<td>".$row["Valor"]."</td>
		</tr> \n"; 
   }while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
   echo"</center>";
}else{ 
	echo '<script>alert("ERROR NO SE ENCONTRO REGISTRO")</script>';
			require_once("../../Public/wichitroco/existentes.html"); 
}
}
if(isset($_POST['producto1'])){

//Guardamos en variables los datos enviados
$producto = $_POST['producto'];

$result = mysqli_query($conexion, "SELECT idProducto, descripcion, codigoProducto, producto, cantidad, Valor FROM producto  WHERE producto  like '%{$producto}%'");

echo"<center>";
if ($row = mysqli_fetch_array($result)){
	echo "<table border = '1' bgcolor = '#99ccff' > \n"; 
	echo "<tr>
	<td>CODIGO</td>
	<td>PRODUCTO.</td>
	<td>DESCRIPCION</td>
	<td>CANTIDAD</td>
	<td>VALOR</td>
	</tr> \n"; 
	do { 
		echo "<tr>
		<td>".$row["codigoProducto"]."</td>
		<td>".$row["producto"]."</td>
		<td>".$row["descripcion"]."</td>
		<td>".$row["cantidad"]."</td>
		<td>".$row["Valor"]."</td>
		</tr> \n"; 
   }while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
   echo"</center>";
}else{ 
	echo '<script>alert("ERROR NO SE ENCONTRO REGISTRO")</script>';
			require_once("../../Public/wichitroco/existentes.html"); 
}
}

if(isset($_POST['Todo'])){

$result = mysqli_query($conexion, "SELECT * FROM producto");
echo"<center>";
if ($row = mysqli_fetch_array($result)){
	echo "<table border = '1' bgcolor = '#99ccff'> \n"; 
	echo "<tr>
	<td>CODIGO.</td>
	<td>PRODUCTO</td>
	<td>DESCRIPCION</td>
	<td>CANTIDAD</td>
	<td>VALOR</td>
	</tr> \n"; 
	do { 
		echo "<tr>
		<td>".$row["codigoProducto"]."</td>
		<td>".$row["producto"]."</td>
		<td>".$row["descripcion"]."</td>
		<td>".$row["cantidad"]."</td>
		<td>".$row["Valor"]."</td>
		</tr> \n"; 
   }while ($row = mysqli_fetch_array($result)); 
   echo "</table> \n"; 
   echo"</center>";
}else{ 
	echo '<script>alert("ERROR NO SE ENCONTRO REGISTRO")</script>';
			require_once("../../Public/wichitroco/existentes.html");
		}
	}
?>