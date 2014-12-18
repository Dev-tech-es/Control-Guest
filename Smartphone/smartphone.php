<?php 
$useragent = strtolower($this->agent);

if (strpos($useragent, 'bb10; touch')!==FALSE) {
	$smartphone = 'Blackberry Z10, Z30';
}elseif (strpos($useragent, 'lumia 820')!==FALSE) {
	$smartphone = 'Nokia Lumbia';
}elseif (strpos($useragent, 'ipad; cpu os 4_3_5')!==FALSE) {
	$smartphone = 'iPad 1/2, Mini';
}elseif (strpos($useragent, 'ipad; cpu os 7_0')!==FALSE) {
	$smartphone = 'iPad 3/4';
}elseif (strpos($useragent, 'iphone os 7_0')!==FALSE) {
	$smartphone = 'iPhone 5';
}elseif (strpos($useragent, 'iphone os 8_0')!==FALSE) {
	$smartphone = 'iPhone 6';
}elseif (strpos($useragent, 'iphone os 4_2_1')!==FALSE) {
	$smartphone = 'iPhone 4, 3GS';
}elseif (strpos($useragent, 'htc one x')!==FALSE) {
	$smartphone = 'HTC One, Evo LTE';
}elseif (strpos($useragent, 'lg-e975')!==FALSE) {
	$smartphone = 'LG Omptimus G';
}elseif (strpos($useragent, 'nexus 4')!==FALSE) {
	$smartphone = 'Google Nexus 4';
}elseif (strpos($useragent, 'nexus 5')!==FALSE) {
	$smartphone = 'Google Nexus 5';
}elseif (strpos($useragent, 'gt-i9505')!==FALSE) {
	$smartphone = 'Samsumg Galaxy S4';
}elseif (strpos($useragent, 'nexus 10')!==FALSE) {
	$smartphone = 'Google Nexus 10';
}elseif (strpos($useragent, 'nexus 7')!==FALSE) {
	$smartphone = 'Google Nexus 7';
}elseif (strpos($useragent, 'milestone')!==FALSE) {
	$smartphone = 'Motorola Defy,Droid, Droid X, Milestone';
}elseif (strpos($useragent, 'gt-i9000')!==FALSE) {
	$smartphone = 'Samsumg Galaxy S, SII, W';
}elseif (strpos($useragent, 'lg-ms690')!==FALSE) {
	$smartphone = 'LG Optimus One';
}elseif (strpos($useragent, 'droid')!==FALSE) {
	$smartphone = 'Motorola Droid 3/4/Atrix';
}elseif (strpos($useragent, 'lg-p990')!==FALSE) {
	$smartphone = 'LG Optimus 2X/3D/Black';
}elseif (strpos($useragent, 'sch-i800')!==FALSE) {
	$smartphone = 'Samsumg Galaxy Tab';
}elseif (strpos($useragent, 'sprint apa9292kt')!==FALSE) {
	$smartphone = 'HTC Evo/Touch HD/Desire HD/Desire';
}elseif (strpos($useragent, 'nexus s')!==FALSE) {
	$smartphone = 'Google Nexus S';
}elseif (strpos($useragent, 'droid razr 4g')!==FALSE) {
	$smartphone = 'Motorola Droid Razr HD';
}elseif (strpos($useragent, 'lg-p930')!==FALSE) {
	$smartphone = 'LG Optimus LTE/4X HD';
}elseif (strpos($useragent, 'samsumg-sgh-i717')!==FALSE) {
	$smartphone = 'Samsumg Galaxy Note';
}elseif (strpos($useragent, 'sonyericssonsst25i')!==FALSE) {
	$smartphone = 'Sony Xperia Sola, U';
}elseif (strpos($useragent, 'xoom')!==FALSE) {
	$smartphone = 'Motorola Xoom/ Xyboard';
}elseif (strpos($useragent, 'htc sensation')!==FALSE) {
	$smartphone = 'HTC Sensation/EVO 3D';
}elseif (strpos($useragent, 'gt-i9300')!==FALSE) {
	$smartphone = 'Samsumg Galaxy SIII, Galaxy Nexus';
}elseif (strpos($useragent, 'lt28at')!==FALSE) {
	$smartphone = 'Sony Experia S, Ion';
}elseif (strpos($useragent, 'lg-ms690')!==FALSE) {
	$smartphone = 'LG Optimus One';
}elseif (strpos($useragent, 'gt-n7100')!==FALSE) {
	$smartphone = 'Samsumg Galaxy Note II';
}elseif (strpos($useragent, 'sonyc6903')!==FALSE) {
	$smartphone = 'Sony Xperia Z/Z1';
}elseif (strpos($useragent, 'sm-n900t')!==FALSE) {
	$smartphone = 'Samsumg Galaxy Note III';
}elseif (strpos($useragent, 'kfapwi')!==FALSE) {
	$smartphone = 'Amazon Kindle Fire HDX 8,9"';
}elseif (strpos($useragent, 'kfthwi')!==FALSE) {
	$smartphone = 'Amazon Kindle Fire HDX 7"';
}elseif (strpos($useragent, 'Silk/1.0.141.16-Gen4_11004310')!==FALSE) {
	$smartphone = 'Amazon Kindle Fire(1Generation)';
}elseif (strpos($useragent, 'rim tablet os 2.1.0')!==FALSE) {
	$smartphone = 'Blackberry Playbook';
}elseif (strpos($useragent, 'aquaris e5 hd')!==FALSE) {
	$smartphone = 'BQ E5 HD';	
}elseif (strpos($useragent, 'nokia97')!==FALSE) {
	$smartphone = 'Nokia C5/C6/C7/N97';		
}else{
	$smartphone = 'Unknown';
}
?>