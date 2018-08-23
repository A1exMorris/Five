$(window).ready(function(){





    /* немного другой эффект появления, и задержка в 2 секунды */
    $('.fadeInTitle').fadeIn(3000);


    var deviceAgent = navigator.userAgent.toLowerCase();

    if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
        $('.paral').removeClass('paral');
    }
    $(window).scroll(function(e) {
        // Get the position of the location where the scroller starts.
        var scroller_anchor = $('.text-center').offset().top;

        // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top
        if ($(this).scrollTop() > 100)
        {    // Change the CSS of the scroller to hilight it and fix it at the top of the screen.
            // $('.upTop').css('display', 'block');
            $('.upTop').fadeIn('slow');
            $('.navbar').addClass('bg-white');
            $('.navbar').removeClass('bg-secondary');
        }
        else if ($(this).scrollTop() < 100)
        {    // If the user has scrolled back to the location above the scroller anchor place it back into the content.

            // Change the height of the scroller anchor to 0 and now we will be adding the scroller back to the content.
            $('.upTop').fadeOut('slow');
            $('.navbar').addClass('bg-secondary');
            $('.navbar').removeClass('bg-white');
        }
    });
    $('.upTop').click(
        function(e){
            $('html,body').animate({scrollTop: $('.upTop').height()-200},800);

        }
    );

    $('.navbar-toggler').click(
        function(e){
            if($(this).hasClass('collapsed')&&!$('.navbar').hasClass('bg-white')) {


                $('.navbar').addClass('bg-white');
                $('.navbar').removeClass('bg-secondary');
            }
            else {

            }

        }
    )

});

$(window).load(function () {
    setTimeout(function(){
        $('body').addClass('loaded');

    });
    AOS.init({
        easing: 'ease-in-out-sine'
    });
});