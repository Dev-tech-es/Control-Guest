<?
	
	$host_remote = ''; //Insert your domain	
	$user_remote = ''; //Insert your user
	$pass_remote = ''; //Insert your pass_user
	$db_remote 	 = ''; //Insert your name database
		
	$connect = mysqli_connect($host_remote, $user_remote, $pass_remote, $db_remote)
	or die("No se ha podido conectar: " . mysql_error()); //'error connect'

	mysqli_set_charset($connect,'utf8');

	return $connect;

?>