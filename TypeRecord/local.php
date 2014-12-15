<?
	
	$host_local = 'localhost';		
	$user_local = ''; //Insert your user
	$pass_local = ''; //Insert your pass_user
	$db_local 	= ''; //Insert your name database
		
	$connect = mysqli_connect($host_local, $user_local, $pass_local, $db_local)
	or die("No se ha podido conectar: " . mysql_error()); //'error connect'

	mysqli_set_charset($connect,'utf8');

	return $connect;

?>