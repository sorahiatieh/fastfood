<?php
	$CP=array();
	
	SiteBase::setSiteTitle($setting_db->getSetting('site_title'));
	
	// اسلایدر
	require SECTIONS."main/slider.controller.php";
	// بخش سرویس ها
	//require SECTIONS."main/services.controller.php";
	// آخرین نمونه کارها
	require SECTIONS."main/portfolio.controller.php";
	
	
	
	SiteBase::setData("main",$CP);
	
	//Head::addScript("assets/js/jquery.nivo.slider.js");
	
	
	/*echo "<pre>";
	print_r($CP);
	echo "</pre>";
	exit;*/
?>