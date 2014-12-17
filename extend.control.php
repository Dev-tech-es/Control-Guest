<?php 
class iNeed extends Control_guest {
    
	private $geolaction;

	public function needData($datos){
		//var_dump($datos);
		$array = explode("//", $datos);
		
		$count =count($array);

		for ($i=0; $i<$count ; $i++) { 
			echo $array[$i]."<br>";
		}
		
		if (in_array("Geolocation", $array)) {
    		$this->geolaction= true;
    		echo true;
		}else{
			$this->geolaction= false;
		}
	}
}

 ?>