<?php 

			if ($file==null) {
				
				if (isset($this->timezone)&&!empty($this->timezone)) {
					date_default_timezone_set($this->timezone);
				}else{
					date_default_timezone_set('Europe/Madrid');
				}
				
				$file = date('m-y');
			}
			//crear carpeta log

			$directorio = $_SERVER['DOCUMENT_ROOT']."/Control-Guest-logs";

			if(!file_exists($directorio))
			{
			mkdir ($directorio);
			echo "<script>console.log('Directorio creado')</script>";
			}

			$fileCreate = "log.".$file.".txt";
			
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