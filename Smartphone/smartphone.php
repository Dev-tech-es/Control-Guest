<?php 
$useragent = strtolower($this->agent);

if (strpos($useragent, 'bb10; touch')!==FALSE) {
	return 'Blackberry Z10, Z30';
}elseif (strpos($useragent, 'lumia 820')!==FALSE) {
	return 'Nokia Lumbia';
}elseif (strpos($useragent, 'ipad; cpu os 4_3_5')!==FALSE) {
	return 'iPad 1/2, Mini';
}elseif (strpos($useragent, 'ipad; cpu os 7_0')!==FALSE) {
	return 'iPad 3/4';
}elseif (strpos($useragent, 'iphone os 7_0')!==FALSE) {
	return 'iPhone 5';
}elseif (strpos($useragent, 'iphone os 8_0')!==FALSE) {
	return 'iPhone 6';
}elseif (strpos($useragent, 'iphone os 4_2_1')!==FALSE) {
	return 'iPhone 4, 3GS';
}elseif (strpos($useragent, 'htc one x')!==FALSE) {
	return 'HTC One, Evo LTE';
}elseif (strpos($useragent, 'lg-e975')!==FALSE) {
	return 'LG Omptimus G';
}elseif (strpos($useragent, 'nexus 4')!==FALSE) {
	return 'Google Nexus 4';
}elseif (strpos($useragent, 'nexus 5')!==FALSE) {
	return 'Google Nexus 5';
}elseif (strpos($useragent, 'gt-i9505')!==FALSE) {
	return 'Samsumg Galaxy S4';
}elseif (strpos($useragent, 'nexus 10')!==FALSE) {
	return 'Google Nexus 10';
}elseif (strpos($useragent, 'nexus 7')!==FALSE) {
	return 'Google Nexus 7';
}elseif (strpos($useragent, 'milestone')!==FALSE) {
	return 'Motorola Defy,Droid, Droid X, Milestone';
}elseif (strpos($useragent, 'gt-i9000')!==FALSE) {
	return 'Samsumg Galaxy S, SII, W';
}elseif (strpos($useragent, 'lg-ms690')!==FALSE) {
	return 'LG Optimus One';
}elseif (strpos($useragent, 'droid')!==FALSE) {
	return 'Motorola Droid 3/4/Atrix';
}elseif (strpos($useragent, 'lg-p990')!==FALSE) {
	return 'LG Optimus 2X/3D/Black';
}elseif (strpos($useragent, 'sch-i800')!==FALSE) {
	return 'Samsumg Galaxy Tab';
}elseif (strpos($useragent, 'sprint apa9292kt')!==FALSE) {
	return 'HTC Evo/Touch HD/Desire HD/Desire';
}elseif (strpos($useragent, 'nexus s')!==FALSE) {
	return 'Google Nexus S';
}elseif (strpos($useragent, 'droid razr 4g')!==FALSE) {
	return 'Motorola Droid Razr HD';
}elseif (strpos($useragent, 'lg-p930')!==FALSE) {
	return 'LG Optimus LTE/4X HD';
}elseif (strpos($useragent, 'samsumg-sgh-i717')!==FALSE) {
	return 'Samsumg Galaxy Note';
}elseif (strpos($useragent, 'sonyericssonsst25i')!==FALSE) {
	return 'Sony Xperia Sola, U';
}elseif (strpos($useragent, 'xoom')!==FALSE) {
	return 'Motorola Xoom/ Xyboard';
}elseif (strpos($useragent, 'htc sensation')!==FALSE) {
	return 'HTC Sensation/EVO 3D';
}elseif (strpos($useragent, 'gt-i9300')!==FALSE) {
	return 'Samsumg Galaxy SIII, Galaxy Nexus';
}elseif (strpos($useragent, 'lt28at')!==FALSE) {
	return 'Sony Experia S, Ion';
}elseif (strpos($useragent, 'lg-ms690')!==FALSE) {
	return 'LG Optimus One';
}elseif (strpos($useragent, 'gt-n7100')!==FALSE) {
	return 'Samsumg Galaxy Note II';
}elseif (strpos($useragent, 'sonyc6903')!==FALSE) {
	return 'Sony Xperia Z/Z1';
}elseif (strpos($useragent, 'sm-n900t')!==FALSE) {
	return 'Samsumg Galaxy Note III';
}elseif (strpos($useragent, 'kfapwi')!==FALSE) {
	return 'Amazon Kindle Fire HDX 8,9"';
}elseif (strpos($useragent, 'kfthwi')!==FALSE) {
	return 'Amazon Kindle Fire HDX 7"';
}elseif (strpos($useragent, 'Silk/1.0.141.16-Gen4_11004310')!==FALSE) {
	return 'Amazon Kindle Fire(1Generation)';
}elseif (strpos($useragent, 'rim tablet os 2.1.0')!==FALSE) {
	return 'Blackberry Playbook';
}elseif (strpos($useragent, 'aquaris e5 hd')!==FALSE) {
	return 'BQ E5 HD';	
}elseif (strpos($useragent, 'nokia97')!==FALSE) {
	return 'Nokia C5/C6/C7/N97';		
}else{
	return 'Unknown';
}
?>