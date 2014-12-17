<?php 

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


 ?>