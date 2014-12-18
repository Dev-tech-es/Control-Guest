<?php 

		$useragent = strtolower($this->agent);

		if (strpos($useragent, 'googlebot/2.1')!==FALSE) {
			$robot = 'Robot: Googlebot/2.1';
		}elseif (strpos($useragent, 'nooglebot-news')!==FALSE) {
			$robot = 'Robot: Googlebot News';
		}elseif (strpos($useragent, 'googlebot-image/1.0')!==FALSE) {
			$robot = 'Robot: Googlebot Images';
		}elseif (strpos($useragent, 'googlebot-video/1.0')!==FALSE) {
			$robot = 'Robot: Googlebot Video';
		}elseif (strpos($useragent, 'googlebot-mobile/2.1')!==FALSE) {
			$robot = 'Robot: Google Mobile';
		}elseif (strpos($useragent, 'mediapartners-google/2.1')!==FALSE) {
			$robot = 'Robot: Google Mobile AdSense';
		}elseif (strpos($useragent, 'mediapartners-google')!==FALSE) {
			$robot = 'Robot: Google AdSense';
		}elseif (strpos($useragent, 'adsbot-google')!==FALSE) {
			$robot = 'Robot: AdsBot-Google';
		}elseif (strpos($useragent, 'yahoo! slurp/3.0')!==FALSE) {
			$robot = 'Robot: Yahoo';
		}elseif (strpos($useragent, 'bingbot/2.0')!==FALSE) {
			$robot = 'Robot: Bing';
		}else{
			$robot = 'Unknown';
		}

 ?>