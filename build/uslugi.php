
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/i/logo2(2).png">

    <title>NPhotography</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!--    <link href="assets/css/custom.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->

</head>

<body style="height: 100%; padding-top: 95px;" >

<?php include "assets/layouts/navbar.php";?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div class="navigation" style="position: fixed; bottom: 10px; z-index: 10; display: inline; text-align: center; list-style-type: none;">
                <li data-slide="1" class="active">Индивидуальная фотосъемка</li>
                <li data-slide="2" >Лавстори, друзья</li>
                <li data-slide="3" >Семейная съемка</li>
                <li data-slide="4" >Подарочный сертификат</li>
                <li data-slide="5" >Дополнительные услуги</li>
            </div>

        </div>
        <div class="col-sm-4"></div>

    </div>

<div class="slide" id="slide1" data-slide="1"  style="z-index: 1; ; top:0;">
 <div class="row m-0 bg-white " style="height: 33vh"></div>
    <a href="#1">
         <div class="row m-0 bg-gray-100 text-gray-800" style="height: 34vh">
<!--             <div class="col-12 my-auto text-center h2 " style="font-family: cheltenham" style="font-family: cheltenham" > Индивидуальная фотосъемка</div>-->
             <button type="button" class="btn btn-outline-primary btn-lg btn-block " style="font-family: cheltenham; white-space: normal;"  style="font-family: cheltenham" data-toggle="modal"  data-target="#ModalCenter1">
                 <h2 class="pb-2">Индивидуальная фотосъемка</h2>
                 Подробнее</button>
         </div>

    </a>
 <div class="row m-0 bg-white " style="height: 33vh"></div>
</div><!--End Slide 1-->
<div class="scroller_anchor"></div>
<div class="slide scroller" id="slide2" data-slide="2"  style="z-index: 2;">
    <div class="row m-0   bg-transparent " style="height: 33vh"></div>
    <a href="#2"  data-toggle="modal" data-target="#ModalCenter2" >
        <div class="row m-0 bg-gray-300 text-gray-800 " style="height: 34vh">
<!--            <div class="col-12 my-auto text-center h2 " style="font-family: cheltenham">Лавстори, друзья </div>-->
            <button type="button" class="btn btn-outline-primary btn-lg btn-block " style="font-family: cheltenham; white-space: normal;"  data-toggle="modal" data-target="#ModalCenter2">
                <h2>Лавстори, друзья</h2>
                Подробнее</button>
        </div>
    </a>
    <div class="row m-0   bg-transparent " style="height: 33vh"></div>
</div><!--End Slide 2-->
<div class="scroller_anchor1"></div>
<div class="slide scroller1" id="slide3" data-slide="3"  style="z-index: 2">
    <div class="row m-0    bg-transparent " style="height: 33vh"></div>
    <a href="#3"  data-toggle="modal" data-target="#ModalCenter3">
        <div class="row m-0 bg-gray-400 text-gray-800" style="height: 34vh">
<!--            <div class="col-12 my-auto text-center h2 " style="font-family: cheltenham"> Семейная съемка </div>-->
            <button type="button" class="btn btn-outline-primary btn-lg btn-block " style="font-family: cheltenham; white-space: normal;"  data-toggle="modal" data-target="#ModalCenter3">
                <h2 >Семейная съемка</h2>
                Подробнее</button>
        </div>
    </a>
    <div class="row m-0    bg-transparent " style="height: 33vh"></div>
</div><!--End Slide 3-->
<div class="scroller_anchor2"></div>
<div class="slide scroller2" id="slide4" data-slide="4"  style="z-index: 2">
    <div class="row m-0    bg-transparent " style="height: 33vh"></div>
    <a href="#4"   data-toggle="modal" data-target="#ModalCenter4">
        <div class="row m-0 bg-gray-600 text-gray-100" style="height: 34vh" >
<!--            <div class="col-12 my-auto text-center h2 " style="font-family: cheltenham"> Подарочный сертификат </div>-->
            <button type="button" class="btn btn-outline-gray-300 btn-lg btn-block " style="font-family: cheltenham; white-space: normal;" data-toggle="modal" data-target="#ModalCenter4">
                <h2 >Подарочный сертификат</h2>
                Подробнее</button>
        </div>
    </a>
    <div class="row m-0    bg-transparent " style="height: 33vh"></div>
</div><!--End Slide 4-->
<div class="scroller_anchor3"></div>
<div class="slide scroller3" id="slide5" data-slide="5"  style="z-index: 2">
    <div class="row m-0    bg-transparent " style="height: 33vh; pointer-events: none; "></div>
    <a href="#5"  data-toggle="modal" data-target="#ModalCenter5">
        <div class="row m-0 bg-gray-800 text-gray-100 text-center align-self-center" style="height: 34vh">
<!--            <div class="col-12 my-auto text-center h2 " style="font-family: cheltenham"> Дополнительные услуги </div>-->
            <button type="button" class="btn btn-outline-gray-100 btn-lg btn-block " style="font-family: cheltenham; white-space: normal;" data-toggle="modal" data-target="#ModalCenter5">
                <h2 > Дополнительные услуги </h2>
            Подробнее</button>
        </div>
    </a>
    <div class="row m-0    bg-white " style="height: 33vh;"></div>
</div><!--End Slide 5-->


<!-- Button trigger modal -->


<?php //include 'assets/layouts/footer.php'?>
<div style="z-index:55; background-color: white;border-radius: 20%; height: 50px; width: 50px; display: none; position: fixed; right: 20px; bottom: 10px;" class="upTop">
    <div class="arrow-up icon"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalCenter1" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle1" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Индивидуальная фотосъемка</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul><b>Первый вариант</b>
                    <li>1-2 часа  занятости</li>
                    <li>1-2 образа</li>
                    <li>15 обработанных фотографий</li>
                </ul>
                <ul><b>Второй вариант</b>

                    <li>2-3 часа общей занятости</li>
                    <li>1-3 образа</li>
                    <li>25 обработанных фотографий</li>
                </ul>
            </div>
            <div class="modal-footer" style="justify-content: center">
                <a href="contacts.php" type="button" class="btn btn-primary">Узнать стоимость</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalCenter2" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Love story, друзья</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul><b>Первый вариант</b>
                    <li>1-2 часа  занятости</li>
                    <li>1-2 образа</li>
                    <li>15 обработанных фотографий</li>
                </ul>
                <ul><b>Второй вариант</b>

                    <li>2-3 часа общей занятости</li>
                    <li>1-3 образа</li>
                    <li>25 обработанных фотографий</li>
                </ul>
            </div>
            <div class="modal-footer" style="justify-content: center">
                <a href="contacts.php" type="button" class="btn btn-primary">Узнать стоимость</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalCenter3" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Семейная съемка</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>2 часа  занятости</li>
                    <li>1-2 образа</li>
                    <li>25 обработанных фотографий</li>
                </ul>
            </div>
            <div class="modal-footer" style="justify-content: center">
                <a href="contacts.php" type="button" class="btn btn-primary">Узнать стоимость</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalCenter4" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Подарочный сертификат</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               Подарите яркое впечатление другу или любимому человеку!
            </div>
            <div class="modal-footer" style="justify-content: center">
                <a href="contacts.php" type="button" class="btn btn-primary">Узнать стоимость</a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalCenter5" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle5" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle" style="font-family: cheltenham; white-space: normal;">Дополнительные услуги</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" >
                    <li>   Обработка дополнительных фотографий</li>
                <li>   Обработка фото стороннего фотографа или вашего исполнения</li>
            </div>
            <div class="modal-footer" style="justify-content: center">
                <a href="contacts.php" type="button" class="btn btn-primary align-self-center">Узнать стоимость</a>
            </div>
        </div>
    </div>
</div>

</div>
<!--Footer-->
<script src="assets/js/main.min.js"></script>
<script>
    $(document).ready(function() {

        

        $('#slide1').click('shown.bs.modal', function (e) {
            $('#myInput').trigger('focus')
        });
        $('#slide2').click('shown.bs.modal', function (e) {
            $('#myInput').trigger('focus')
        });
        $('#slide3').click('shown.bs.modal', function (e) {
            $('#myInput').trigger('focus')
        });
        $('#slide4').click('shown.bs.modal', function (e) {
            $('#myInput').trigger('focus')
        });
        $('#slide5').click('shown.bs.modal', function (e) {
            $('#myInput').trigger('focus')
        });

/*
        $(window).scroll(function(e) {
            // Get the position of the location where the scroller starts.
            var scroller_anchor = $(".scroller_anchor").offset().top;

            // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top
            if ($(this).scrollTop() > scroller_anchor && $('.scroller').css('position') != 'fixed')
            {    // Change the CSS of the scroller to hilight it and fix it at the top of the screen.
                $('.scroller_anchor').css('height', '90vh');
                $('.scroller').css({
                    'position': 'fixed',
                    'top': '0vh',
                    'z-index': '-1'
                });
                $('#slide1').css({'z-index':'-2'});
                $('#slide2').css({'z-index':'1'});
                // Changing the height of the scroller anchor to that of scroller so that there is no change in the overall height of the page.

            }
            else if ($(this).scrollTop() < scroller_anchor && $('.scroller').css('position') != 'relative')
            {    // If the user has scrolled back to the location above the scroller anchor place it back into the content.

                // Change the height of the scroller anchor to 0 and now we will be adding the scroller back to the content.
                $('.scroller_anchor').css('height', '0vh');
                $('#slide1').css({'z-index':'1'});
                $('#slide2').css({'z-index':'2'});
                // Change the CSS and put it back to its original position.
                $('.scroller').css({
                    'position': 'relative'
                });
            }
        });
        $(window).scroll(function(e) {
            // Get the position of the location where the scroller starts.
            var scroller_anchor = $(".scroller_anchor1").offset().top;

            // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top
            if ($(this).scrollTop() > scroller_anchor && $('.scroller1').css('position') != 'fixed')
            {    // Change the CSS of the scroller to hilight it and fix it at the top of the screen.
                $('.scroller1').css({
                    'position': 'fixed',
                    'top': '0vh',
                    'z-index': '-1'
                });
                $('#slide2').css({'z-index':'-2'});
                $('#slide3').css({'z-index':'1'});
                // Changing the height of the scroller anchor to that of scroller so that there is no change in the overall height of the page.
                $('.scroller_anchor1').css('height', '90vh');
            }
            else if ($(this).scrollTop() < scroller_anchor && $('.scroller1').css('position') != 'relative')
            {    // If the user has scrolled back to the location above the scroller anchor place it back into the content.
                $('#slide2').css({'z-index':'1'});
                $('#slide3').css({'z-index':'2'});
                // Change the height of the scroller anchor to 0 and now we will be adding the scroller back to the content.
                $('.scroller_anchor1').css('height', '0vh');

                // Change the CSS and put it back to its original position.
                $('.scroller1').css({
                    'position': 'relative'
                });
            }
        });
        $(window).scroll(function(e) {
            // Get the position of the location where the scroller starts.
            var scroller_anchor = $(".scroller_anchor2").offset().top;

            // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top
            if ($(this).scrollTop() > scroller_anchor && $('.scroller2').css('position') != 'fixed')
            {    // Change the CSS of the scroller to hilight it and fix it at the top of the screen.
                $('.scroller2').css({
                    'position': 'fixed',
                    'top': '0vh',
                    'z-index': '-1'
                });
                $('#slide3').css({'z-index':'-2'});
                $('#slide4').css({'z-index':'1'});
                // Changing the height of the scroller anchor to that of scroller so that there is no change in the overall height of the page.
                $('.scroller_anchor2').css('height', '90vh');
            }
            else if ($(this).scrollTop() < scroller_anchor && $('.scroller2').css('position') != 'relative')
            {    // If the user has scrolled back to the location above the scroller anchor place it back into the content.
                $('#slide3').css({'z-index':'1'});
                $('#slide4').css({'z-index':'2'});
                // Change the height of the scroller anchor to 0 and now we will be adding the scroller back to the content.
                $('.scroller_anchor2').css('height', '0vh');

                // Change the CSS and put it back to its original position.
                $('.scroller2').css({
                    'position': 'relative'
                });
            }
        });
//        $(window).scroll(function(e) {
//            // Get the position of the location where the scroller starts.
//            var scroller_anchor = $(".scroller_anchor3").offset().top;
//
//            // Check if the user has scrolled and the current position is after the scroller start location and if its not already fixed at the top
//            if ($(this).scrollTop() > scroller_anchor && $('.scroller3').css('position') != 'fixed')
//            {    // Change the CSS of the scroller to hilight it and fix it at the top of the screen.
//                $('.scroller3').css({
//                    'position': 'fixed',
//                    'top': '0px',
//                    'z-index': '-1'
//                });
//                $('#slide4').css({'z-index':'-2'});
//                $('#slide5').css({'z-index':'1'});
//                // Changing the height of the scroller anchor to that of scroller so that there is no change in the overall height of the page.
//                $('.scroller_anchor3').css('height', '90vh');
//            }
//            else if ($(this).scrollTop() < scroller_anchor && $('.scroller3').css('position') != 'relative')
//            {    // If the user has scrolled back to the location above the scroller anchor place it back into the content.
//                $('#slide4').css({'z-index':'1'});
//                $('#slide5').css({'z-index':'2'});
//                // Change the height of the scroller anchor to 0 and now we will be adding the scroller back to the content.
//                $('.scroller_anchor3').css('height', '0px');
//
//                // Change the CSS and put it back to its original position.
//                $('.scroller3').css({
//                    'position': 'relative'
//                });
//            }
//        });
*/

        //Cache some variables
        var links = $('.navigation').find('li');
        slide = $('.slide');
        button = $('.button');
        mywindow = $(window);
        htmlbody = $('html,body');


        //Setup waypoints plugin
        slide.waypoint(function (event, direction) {

            var dataslide = $(this.element).attr("data-slide");
            //cache the variable of the data-slide attribute associated with each slide


            //If the user scrolls up change the navigation link that has the same data-slide attribute as the slide to active and
            //remove the active class from the previous navigation link
            if (event === 'down') {
                $('.navigation li[data-slide="' + dataslide + '"]').addClass('active').prev().removeClass('active');

            }
            // else If the user scrolls down change the navigation link that has the same data-slide attribute as the slide to active and
            //remove the active class from the next navigation link
            else {
                var tempdataslide = (dataslide - 1);
                $('.navigation li[data-slide="' + tempdataslide + '"]').addClass('active').next().removeClass('active');
            }

        });

        //waypoints doesnt detect the first slide when user scrolls back up to the top so we add this little bit of code, that removes the class
        //from navigation link slide 2 and adds it to navigation link slide 1.
        mywindow.scroll(function () {
            if (mywindow.scrollTop() == 0) {
                $('.navigation li[data-slide="1"]').addClass('active');
                $('.navigation li[data-slide="2"]').removeClass('active');
            }
        });

        //Create a function that will be passed a slide number and then will scroll to that slide using jquerys animate. The Jquery
        //easing plugin is also used, so we passed in the easing method of 'easeInOutQuint' which is available throught the plugin.
        function goToByScroll(dataslide) {
            htmlbody.animate({
                scrollTop: $('.slide[data-slide="' + dataslide + '"]').offset().top+1
            }, 2000, 'easeInOutQuint');
        }



        //When the user clicks on the navigation links, get the data-slide attribute value of the link and pass that variable to the goToByScroll function
        links.click(function (e) {
            e.preventDefault();
            dataslide = $(this).attr('data-slide');
            goToByScroll(dataslide);
        });

        //When the user clicks on the button, get the get the data-slide attribute value of the button and pass that variable to the goToByScroll function
        button.click(function (e) {
            e.preventDefault();
            dataslide = $(this).attr('data-slide');
            goToByScroll(dataslide);

        });

    });

</script>
</body>
</html>