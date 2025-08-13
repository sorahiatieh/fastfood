
<?php
    require SECTIONS."main/slider.view.php";
    
    $CP=SiteBase::getData("main");
?>
<div class="container">
    <?php
        //خدمات شرکت-
        require SECTIONS."main/offer-menu.view.php";
        
        require SECTIONS."main/atmosphere.view.php";
       
        require SECTIONS."main/selected-pizza.view.php";
       
        require SECTIONS."main/bg-salad.view.php";
       
        require SECTIONS."main/people-say.view.php";
       
        require SECTIONS."main/gallery.view.php";
        
        require SECTIONS."main/book-your.view.php";
        
        require SECTIONS."main/connection-box.view.php";
    ?>
</div>


