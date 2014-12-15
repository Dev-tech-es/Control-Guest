<?php 

class Control_guest
{	
	///////////////////////////////////////
	//Property
	private $type;
	private $browser;
	private $system;
	private $country;
	private $agent;
	private $robot;
	private $date;
	private $hour;
	private $ip;


	///////////////////////////////////////
	//Method: Construct
	 public function __construct($type='Local'){

		if ($type=='Local') {
			
			$this->type ="Local";
			

		}elseif ($type=='Remote') {

			$this->type ="Remote";
			
			
		}elseif ($type=='txt') {

			$this->type ="txt";
			
			
		}else{

			$this->type = "";
		}

		$this->browser 	= $this->browser();
		$this->system 	= $this->system();
		$this->agent  	= $_SERVER['HTTP_USER_AGENT'];
		$this->robot 	= $this->robot();
		$this->ip 		= $_SERVER['REMOTE_ADDR'];
		
	}
	////////////////////////////////////////////////////
	/// Metodo: Determinar fecha y horario
	public function time($timeZone ="Europe/Madrid")
	{
		date_default_timezone_set($timeZone);
		$this->date=date('d-m-y');
		$this->hour=date('H:i:s');
	}

	///////////////////////////////////////
	//Method: Create log.
	public function createLog($file=null){

		if ($this->type=='Local') {
		//In case of 'local' scope .	
			

		}elseif ($this->type=='Remote') {
		//In case of 'remote' scope .
			
			
		}elseif ($this->type=='txt') {
		//In case of 'txt' scope .

			if ($file==null) {
				$file = "log";
			}

			$directorio = $_SERVER['DOCUMENT_ROOT']."/log";
			$fileCreate = $file.".txt";
			
			$fileContruct=fopen($directorio."/".$fileCreate,"a") 
			or die ("The file '".$fileCreate."' could not be created.");

			fwrite($fileContruct, "Visit of the day ".$this->date." to ".$this->hour."");
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "Browser: ".$this->browser);
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "Operating System: ".$this->system);
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "Robot: ".$this->robot);
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "#######################################");

			fclose($fileContruct);

			if (fclose($fileContruct)==true) {
				//Log generado correctamente
				echo "<script>console.log('Log creado');</script>";

			}else{
				//No se creo el archivo $fileCreate
				echo "<script>console.log('Log no creado');</script>";

			}
			
			
		}


	}
	///////////////////////////////////////
	//Method: Browser.
	public  function browser()
	{	
		$agent = $this->agent;

		if (preg_match('/MSIE/i', $agent)
		&&!preg_match('/Opera/i', $agent)){
			$bname	="Internet Explorer";
			$ub 	= "MSIE";
		}elseif(preg_match('/Firefox/i', $agent)){
			$bname	="Mozilla Firefox";
			$ub 	= "Firefox";
		}elseif(preg_match('/Chrome/i', $agent)) {
			$bname	="Google Chrome";
			$ub 	= "Chrome";
		}elseif(preg_match('/Safari/i', $agent)) {
			$bname	="Apple Safari";
			$ub 	= "Safari";
		}elseif(preg_match('/Opera/i', $agent)) {
			$bname	="Opera";
			$ub 	= "Opera";
		}elseif(preg_match('/Netscape/i', $agent)) {
			$bname	="Netscape";
			$ub 	= "Netscape";
		}else{
			$bname	= 'Unknown';
		}

		return $bname;
	}

	///////////////////////////////////////
	//Method: System.
	public  function system()
	{
		$useragent = strtolower($this->agent);

	
		if (strpos($useragent, 'windows nt 5.1')!==FALSE) {
			return 'Windows XP';
		}elseif (strpos($useragent, 'windows nt 6.3')!==FALSE) {
			return 'Windows 8';
		}elseif (strpos($useragent, 'windows nt 6.1')!==FALSE) {
			return 'Windows 7';
		}elseif (strpos($useragent, 'windows nt 6.0')!==FALSE) {
			return 'Windows Vista';
		}elseif (strpos($useragent, 'windows 98')!==FALSE) {
			return 'Windows 98';
		}elseif (strpos($useragent, 'windows nt 5.0')!==FALSE) {
			return 'Windows 2000';
		}elseif (strpos($useragent, 'windows nt 5.2')!==FALSE) {
			return 'Windows 2003 Server';
		}elseif (strpos($useragent, 'windows nt')!==FALSE) {
			return 'Windows NT';
		}elseif (strpos($useragent, 'win 9x 4.90')!==FALSE
			&&strpos($useragent, 'win me')) {
			return 'Windows ME';
		}elseif (strpos($useragent, 'win ce')!==FALSE) {
			return 'Windows CE';
		}elseif (strpos($useragent, 'win 9x 4.90')!==FALSE) {
			return 'Windows ME';
		}elseif (strpos($useragent, 'iphone')!==FALSE) {
			return 'iPhone';
		}elseif (strpos($useragent, 'ipad')!==FALSE) {
			return 'iPad';
		}elseif (strpos($useragent, 'webOS')!==FALSE) {
			return 'webOS';
		}elseif (strpos($useragent, 'symbian')!==FALSE) {
			return 'Symbian';
		}elseif (strpos($useragent, 'android')!==FALSE) {
			return 'Android';
		}elseif (strpos($useragent, 'blackberry')!==FALSE) {
			return 'Blackberry';
		}elseif (strpos($useragent, 'macintosh')!==FALSE) {
			return 'Macintosh';
		}elseif (strpos($useragent, 'linux')!==FALSE) {
			return 'Linux';
		}elseif (strpos($useragent, 'freebsd')!==FALSE) {
			return 'Free BSD';
		}elseif (strpos($useragent, 'symbian')!==FALSE) {
			return 'Symbian';
		}else{
			return 'Unknown';
		}
			
	}

	//////////////////////////////////////
	//Method: Robot.
	public  function robot()
	{	
		
		$useragent = strtolower($this->agent);

		if (strpos($useragent, 'googlebot/2.1')!==FALSE) {
			return 'Robot: Googlebot/2.1';
		}elseif (strpos($useragent, 'nooglebot-news')!==FALSE) {
			return 'Robot: Googlebot News';
		}elseif (strpos($useragent, 'googlebot-image/1.0')!==FALSE) {
			return 'Robot: Googlebot Images';
		}elseif (strpos($useragent, 'googlebot-video/1.0')!==FALSE) {
			return 'Robot: Googlebot Video';
		}elseif (strpos($useragent, 'googlebot-mobile/2.1')!==FALSE) {
			return 'Robot: Google Mobile';
		}elseif (strpos($useragent, 'mediapartners-google/2.1')!==FALSE) {
			return 'Robot: Google Mobile AdSense';
		}elseif (strpos($useragent, 'mediapartners-google')!==FALSE) {
			return 'Robot: Google AdSense';
		}elseif (strpos($useragent, 'adsbot-google')!==FALSE) {
			return 'Robot: AdsBot-Google';
		}elseif (strpos($useragent, 'yahoo! slurp/3.0')!==FALSE) {
			return 'Robot: Yahoo';
		}elseif (strpos($useragent, 'bingbot/2.0')!==FALSE) {
			return 'Robot: Bing';
		}else{
			return 'Unknown';
		}
	}

	///////////////////////////////////////
	//Method: Country.
	public  function country()
	{
			
			echo $ipCliente='1.2.3.4';
			echo "<br>--------------<br>";
			// Ejemplo 1

			$ipCliente	= explode(".", $ipCliente);
			$red 		= (int)$ipCliente[0]; //Red
			$subred 	= (int)$ipCliente[1]; //Subred
			$dominio 	= (int)$ipCliente[2]; //Dominio
			$pc 		= (int)$ipCliente[3]; //Ordenador

			$ipnumerica = $pc+($dominio*256)+($subred*256*256)+($red*256*256*256);
			echo $ipnumerica;

	}
}

 ?>