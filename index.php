<?php
    require 'include/config.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="http://localhost/projects/fastfood/">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" href="assets/css/font-icon.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

    <script type="text/javascript" src="assets/js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
</head>
<body>
    <section class="section header-section">
        <?php
            require "pages/requires/header.php";
        ?>
    </section>
    
    <?php
	    $page_name=SiteBase::getPageName();
	    
	    if(SiteBase::getHasView()){
		    $filename=SECTIONS.$page_name.".view.php";
		    require $filename;
	    }else{
		    require PAGE_PATH."public_page.php";
	    }
    ?>

    <footer class="footer-modern-footer">
        <?php
            require "pages/requires/footer.php";
        ?>
    </footer>
</body>
</html>