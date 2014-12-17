<?php
//Vinculamos la clase al sitio 
require '../control.class.php';

//Llamamos a la classe
///*Parametros permitido: local, remote, txt, test*/
$test = new Control_guest('test'); 

//Llamamos a los metodos
//$test-> config('','','','',false);//Si necesitamos configurar una base de datos
//$test -> geo();	//Metodo que activa la geolocalización
$test -> dateHour();	//Metodo que determina el tiempo actual
$data = $test->createLog();//Creacion del registro

//////////////////////////////////////////////////////////
/// Como hemos selecionado el parametro 'test',
/// este nos devuelve un array con todos los datos
/// recabados. Puede hacer un var_dump para ver el array.
/// var_dump($data);
//////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////
// Para mostrar el array solo debe indicar que dato necesitamos
// $data['insertar parametro']
// Parametros validos: date,hour,browser,system,city,ip
// country_code, continent_code,latitude,longitude
// asn,	timezone
//////////////////////////////////////////////////////////

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contol-Guest | Test</title>
	<meta   name="description" content="Desarrollo de aplicaciones y librerias de PHP y Javascript">
	<link 	rel="shortcut icon" href="img/favicon.ico">
	<meta 	name="author" content="Sergio González Garrido">
	<meta 	name="organization" content="Chabudai">
	<meta 	name="locality" content="Barcelona, Spain">
	<meta 	name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="responsive">
		
		<h1>Chabudai | GitHub</h1>
		<h2>Desarrollo de aplicaciones y librerias de PHP y Javascript</h2>

		<h3>Control-Guest | Test</h3>

		<div class="box">
			<h3>Datos que recabamos cuando una visita entra en el sitio web.</h3>
<table>
	<tbody>
		<tr>
			<td>Ip :</td><td><?php echo $_SERVER['REMOTE_ADDR'];?></td>
		</tr>
		<tr>
			<td>User Agent :</td><td><?php echo $_SERVER['HTTP_USER_AGENT']; ?></td>
		</tr>
	</tbody>
</table>

<h3>Datos que tratamos con Control-Guest</h3>
<table>
	<tbody>
		<tr>
			<td>Dia :</td><td><?php echo $data['date'];?></td>
		</tr>
		<tr>
			<td>Hora :</td><td><?php echo $data['hour'];?></td>
		</tr>
		<tr>
			<td>Navegador :</td><td><?php echo $data['browser'];?></td>
		</tr>
		<tr>
			<td>Sistema operativo :</td><td><?php echo $data['system'];?></td>
		</tr>
		<tr>
			<td>Robot (Determinta si es un robot, como por ejemplo: Googlebot) :</td><td><?php echo $data['robot'];?></td>
		</tr>
		<tr>
			<td>Ciudad :</td><td><?php echo $data['city'];?></td>
		</tr>
		<tr>
			<td>Ip :</td><td><?php echo $data['ip'];?></td>
		</tr>
		<tr>
			<td>Codigo del pais :</td><td><?php echo $data['country_code'];?></td>
		</tr>
		<tr>
			<td>Codigo del continente :</td><td><?php echo $data['continent_code'];?></td>
		</tr>
		<tr>
			<td>Altura :</td><td><? echo $data['latitude'];?></td>
		</tr>
		<tr>
			<td>Longitud :</td><td><? echo $data['longitude'];?></td>
		</tr>
		<tr>
			<td>ASN (Asignación de números de sistema autónomo) :</td><td><? echo $data['asn'];?></td>
		</tr>
		<tr>
			<td>ISP (Proveedor de servicio de internet) :</td><td>Google Inc.</td>
		</tr>
		<tr>
			<td>Zona horaria :</td><td><? echo $data['timezone'];?></td>
		</tr>
	</tbody>
</table>
	

		</div>
		<br>
<a href="http://chabudai.es/GitHub">Mas info en Chabudai | GitHub</a>
	</div>
</body>
</html>