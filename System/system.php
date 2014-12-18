<?php 
$useragent = strtolower($this->agent);

	
		if (strpos($useragent, 'windows nt 5.1')!==FALSE) {
			$system = 'Windows XP';
		}elseif (strpos($useragent, 'windows nt 6.3')!==FALSE) {
			$system = 'Windows 8';
		}elseif (strpos($useragent, 'windows nt 6.1')!==FALSE) {
			$system = 'Windows 7';
		}elseif (strpos($useragent, 'windows nt 6.0')!==FALSE) {
			$system = 'Windows Vista';
		}elseif (strpos($useragent, 'windows 98')!==FALSE) {
			$system = 'Windows 98';
		}elseif (strpos($useragent, 'windows nt 5.0')!==FALSE) {
			$system = 'Windows 2000';
		}elseif (strpos($useragent, 'windows nt 5.2')!==FALSE) {
			$system = 'Windows 2003 Server';
		}elseif (strpos($useragent, 'windows nt')!==FALSE) {
			$system = 'Windows NT';
		}elseif (strpos($useragent, 'win 9x 4.90')!==FALSE
			&&strpos($useragent, 'win me')) {
			$system = 'Windows ME';
		}elseif (strpos($useragent, 'win ce')!==FALSE) {
			$system = 'Windows CE';
		}elseif (strpos($useragent, 'win 9x 4.90')!==FALSE) {
			$system = 'Windows ME';
		}elseif (strpos($useragent, 'iphone')!==FALSE) {
			$system = 'iOS';
		}elseif (strpos($useragent, 'ipad')!==FALSE) {
			$system = 'iOS';
		}elseif (strpos($useragent, 'webOS')!==FALSE) {
			$system = 'webOS';
		}elseif (strpos($useragent, 'symbian')!==FALSE) {
			$system = 'Symbian';
		}elseif (strpos($useragent, 'android')!==FALSE) {
			$system = 'Android';
		}elseif (strpos($useragent, 'blackberry')!==FALSE) {
			$system = 'Blackberry';
		}elseif (strpos($useragent, 'macintosh')!==FALSE) {
			$system = 'Macintosh';
		}elseif (strpos($useragent, 'linux')!==FALSE) {
			$system = 'Linux';
		}elseif (strpos($useragent, 'freebsd')!==FALSE) {
			$system = 'Free BSD';
		}elseif (strpos($useragent, 'symbian')!==FALSE) {
			$system = 'Symbian';
		}else{
			$system = 'Unknown';
		}

 ?>