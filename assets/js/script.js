$(document).ready(function(){
    $('#slider').nivoSlider({
    effect:'random',
    slices: 15,
    boxCols: 8,
    boxRows: 4,
    animSpeed: 500,
    pauseTime: 3000,
    startSlide: 0,
    directionNav:true,
    controlNav:false,
    controlNavThumbs:false,
    pauseOnHover:true,
    manualAdvance:false,
    randomStart:false,
    beforeChange:function(){},
    afterChange:function(){},
    slideshowEnd:function(){},
    lastSlide:function(){},
    afterLoad:function(){}
});

    $('#owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        items:4,
        center: true,
        autoplay: true,
        autoplayTimeout:2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 3
            }
        },
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[979,3],
        itemsTablet:[768,2],
        navigation:true,
        pagination:false
    });

    $('#owl-box').owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        items:4,
        center: true,
        autoplay: false,
        autoplayTimeout:2000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 5
            }
        },
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[979,3],
        itemsTablet:[768,2],
        navigation:true,
        pagination:false
    });

    // With the element initially hidden, we can show it slowly:
    
    $( ".service-line" ).fadeIn( "slow", function() {
        // Animation complete
    });
    
    // animate in pages
   /* wow=new WOW({
        animatedClass: ' animated',
        offset: 160
    });
    new WOW().init();*/
    wow = new WOW(
        {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0,          // default
            mobile:       true,       // default
            live:         true        // default
        }
    )
    wow.init();
    
    
    $('#frmReserve').submit(function(e){
        e.preventDefault();

        getReserve();
    })
    
    $('#frmContacts').submit(function(e){
        e.preventDefault();
        
        sendContacts();
    })
});

function getReserve(){
    $.ajax({
        url: 'pages/reserve_table.php',
        type:'POST',
        data:$('#frmReserve').serialize(),
        dataType: 'json',
        success: function($result){
            if($result.Status==1){
                alert('ok');
            }
            else{
                alert($result.Text);
            }
        }
    })
}

function sendContacts(){
    $.ajax({
        url:'process/save_contact.php',
        type: 'POST',
        data:$('#frmContacts').serialize(),
        dataType: 'json',
        success: function($result){
            if($result.Status==1){
                alert('ok');
            }
            else{
                alert($result.Text);
            }
        }
    })
}

function pendingButton($selector){
    $($selector).prop('disabled',true);
    $($selector).val('pending message...');
}

function resetButton($selector){
    $($selector).prop('disabled',false);
    $($selector).val('send message');
}