<?php 

///////////////////////////////////////////
/// Developer : Sergio González Garrido
///	Location : Barcelona (Spain)
///	Create : 15/12/2014
///	Version: 1.0
///////////////////////////////////////////

//error_reporting(0);

class Control_guest
{	
	public $version = '1.0';

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
	protected $api = "http://www.telize.com/geoip/%s";
	protected $properties = [];
	private $host;		
	private $user_host; 
	private $user_pass; 
	private $database;
	



	///////////////////////////////////////
	//Method: Construct
	 public function __construct($type='txt'){

		if ($type=='local') {
			
			$this->type ="local";
			$verificar = true;

		}elseif ($type=='remote') {

			$this->type ="remote";
			$verificar = true;
		
		}elseif ($type=='txt') {

			$this->type ="txt";
			$verificar = true;
		
		}elseif ($type=='test') {	
			
			$this->type ="test";
			$verificar = true;

		}else{

			echo "<div style='position: fixed;top: 0;z-index: 999;background: rgb(229, 97, 97);color: white;padding: 9px;width: 100%;'>Introdujo un parametro no valido.</div>";
			$verificar = false;
		}

		if ($verificar==true) {

			$this->browser 	= $this->browser();
			$this->system 	= $this->system();
			$this->agent  	= $_SERVER['HTTP_USER_AGENT'];
			$this->robot 	= $this->robot();
			$this->ip 		= $_SERVER['REMOTE_ADDR'];
		}
		
		
	}


	public function __get($key)
	{
		if (isset($this->properties[$key])) {
			return $this->properties[$key];
		}

		return null;
	}

	////////////////////////////////////////////////////
	/// Metodo: Configuración del hosting
	public function config($host=null,$user_host=null,$user_pass=null,$database=null,$default=false){

		if ($default==true) {
			if (isset($host)&&!empty($host)&&
				isset($user_host)&&!empty($user_host)&&
				isset($user_pass)&&!empty($user_pass)&&
				isset($database)&&!empty($database)) {
			
			$this->host= $host;		
			$this->user_host= $user_host; 
			$this->user_pass= $user_pass; 
			$this->database= $database;

		}else{
			echo "<script>console.log('No introdujo todos los datos. Debe introducir los 4 datos requeridos: host, user, pass, database')</script>";
		}
		}else{
			echo "<script>console.log('La base de datos no fue activada.')</script>";
		}
		
		
	}

	
	///////////////////////////////////////
	//Method: Create log.
	public function createLog($file=null){

		if ($this->type=='local') {
		//In case of 'local' scope .

		require 'TypeRecord/local.php';
			
		}elseif ($this->type=='remote') {
		//In case of 'remote' scope .
		
		require_once 'TypeRecord/remote.php';
		return $info;
		

		}elseif ($this->type=='txt') {
		//In case of 'txt' scope .

		require 'TypeRecord/txt.php';

		}elseif ($this->type=='test') {
		//In case of 'test' scope .
		
		require_once 'TypeRecord/test.php';

		return $data;//Return array

		}


	}
	///////////////////////////////////////
	//Method: Browser.
	public  function browser()
	{	
		require 'Browser/browser.php';
		return $bname;
	}

	///////////////////////////////////////
	//Method: System.
	public  function system()
	{
		require 'System/system.php';
		return $system;
	}

	//////////////////////////////////////
	//Method: Robot.
	public  function robot()
	{	
		require 'Robot/robot.php';
		return $robot;
	}

	///////////////////////////////////////
	//Method: Dispositivo
	public function dispo()
	{
		require 'Smartphone';
		return $smartphone;
	}


	///////////////////////////////////////
	//Method: Country.
	public function geo(){

		//$ip = '64.233.166.104';/*IP DE PRUEBAS*/
				
		$ip = $_SERVER['REMOTE_ADDR'];
		
		$url = sprintf($this->api, $ip);

		$data =$this->sendRequest($url);

		$this->properties= json_decode($data,true);

 	}

 	////////////////////////////////////////////////////
	/// Metodo: Determinar fecha y horario
	public function dateHour()
	{
		if (isset($this->timezone)&&!empty($this->timezone)) {
			date_default_timezone_set($this->timezone);
		}else{
			date_default_timezone_set('Europe/Madrid');
		}
		
		$this->date=date('d-m-y');
		$this->hour=date('H:i:s');

		
	}

	public function sendRequest($url)
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_URL, $url);

		return curl_exec($curl);
	}

	
}

 ?>