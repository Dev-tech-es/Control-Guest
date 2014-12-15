<?php 

			if ($file==null) {
				$file = "log";
			}

			$directorio = $_SERVER['DOCUMENT_ROOT']."/web/log";
			$fileCreate = $file.".txt";
			
			$fileContruct=fopen($directorio."/".$fileCreate,"a") 
			or die ("The file '".$fileCreate."' could not be created.");

			fwrite($fileContruct, "Visit of the day ".$this->date." to ".$this->hour."");
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "Browser: ".$this->browser());
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "Operating System: ".$this->system());
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "Robot: ".$this->robot());
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "City: ".$this->city);
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "Ip: ".$this->ip);
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "Country code: ".$this->country_code);
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "Continent Code: ".$this->continent_code);
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "Alt: ".$this->latitude);
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "Long: ".$this->longitude);
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "Asn: ".$this->asn);
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "Isp: ".$this->isp);
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "Time zone: ".$this->timezone);
			fwrite($fileContruct, "\n");
			fwrite($fileContruct, "#######################################");
			fwrite($fileContruct, "\n");
			$close = fclose($fileContruct);

			if ($close==true) {
				//Log generado correctamente
				echo "<script>console.log('Log creado');</script>";

			}else{
				//No se creo el archivo $fileCreate
				echo "<script>console.log('Log no creado');</script>";

			}

 ?>