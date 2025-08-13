<?php
	$CP=array();
	
	SiteBase::setSiteTitle($setting_db->getSetting('site_title'));
	
	
	require SECTIONS."main/slider.controller.php";
	
	require SECTIONS."main/portfolio.controller.php";
	
	require SECTIONS."main/offer-menu.controller.php";
	
	require SECTIONS."main/atmosphere.controller.php";
	
	require SECTIONS."main/selected-pizza.controller.php";
	
	require SECTIONS."main/bg-salad.controller.php";
	
	require SECTIONS."main/people-say.controller.php";
	
	require SECTIONS."main/gallery.controller.php";
	
	require SECTIONS."main/book-your.controller.php";
	
	require SECTIONS."main/connection-box.controller.php";
	
	SiteBase::setData("main",$CP);
	
	//Head::addScript("assets/js/jquery.nivo.slider.js");
	
	
	/*echo "<pre>";
	print_r($CP);
	echo "</pre>";
	exit;*/
?>


