
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/i/logo2.png">

    <title>NPhotography</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!--    <link href="assets/css/custom.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->

</head>

<body style="padding-top: 92px;">
<?php include "assets/layouts/navbar.php";?>
<!--Navbar-->

<div class="container pt-5" >

    <div class="container d-inline-block">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/i/mainSlider1.jpg" style="width: 100%" alt="Chania">
                    <div class="carousel-caption">
                        <h3> </h3>
                        <p> </p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="assets/i/mainSlider2.jpg" style="width: 100%" alt="Chicago">
                    <div class="carousel-caption">
                        <h3> </h3>
                        <p> </p>
                    </div>
                </div>

                <div class="carousel-item" >
                    <img src="assets/i/mainSlider3.jpg" style="width: 100%" alt="New York">
                    <div class="carousel-caption">
                        <h3></h3>
                        <p> </p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>

 <!--   <img class="imageTrans" src="assets/i/piter.jpg" style="width: 120px; height: 120px; border-radius: 50%; position: absolute; right: 0;top: 0;">
    <div class="loader" style="position: absolute; right: 0;top:0;"></div>-->
    <div class="container pt-5 pb-5 ">
        <div class="row">
            <div class="col-6">
                <h1>Контакты</h1>
                <p>Мы всегда рады новым встречам!</p>
                <p>Тел.: 8 996 768 62 20</p>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="guestName" placeholder="Ваше имя">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="guestEmail" placeholder="Ваша почта">
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="textGuest" placeholder="Ваше сообщение" rows="3"></textarea>
                </div>
                <button type="submit" class="btn-lg btn-primary"> ОТПРАВИТЬ </button>
            </div>
        </div>
    </div>
</div>
<?php include 'assets/layouts/footer.php'?>
<!--Footer-->
<script src="assets/js/main.js"></script>

</body>
</html>