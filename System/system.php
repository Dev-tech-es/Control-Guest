<?php 
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
			return 'iOS';
		}elseif (strpos($useragent, 'ipad')!==FALSE) {
			return 'iOS';
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

 ?>