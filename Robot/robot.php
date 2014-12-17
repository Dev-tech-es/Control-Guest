<?php 

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

 ?>