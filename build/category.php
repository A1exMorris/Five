
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/i/logo2.png">
    <link rel="icon" href="assets/i/logo2.png">

    <title>NPhotography</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!--    <link href="assets/css/custom.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->

</head>

<body style="padding-top: 92px">
<?php include "assets/layouts/navbar.php";?>
<!--Navbar-->
<?php


$segments=explode('?',$uri);


$rootFoto=$segments[1];

?>
<div class="container">
    <div class="card-columns">
        <?php

        $files=array_diff(scandir('assets/i/category/'.$rootFoto.'/'),array('..','.'));

        foreach ($files as $file) {?>
            <div class="card" >
            <a href = "assets/i/category/<?php echo $rootFoto.'/'.$file?>" data-fancybox = "gallery" data-caption = "Caption1" >
                <div class="hover-image" >
                <img class="card-img-top scaleImage" src = "assets/i/category/<?php echo $rootFoto.'/'.$file?>" alt = "" />
                <div class="icon-expand" ></div >
                    </div >
            </a >
        </div >
        <?php }?>
  </div>

</div>

<?php include 'assets/layouts/footer.php'?>
<!--Footer-->
<script src="assets/js/main.js"></script>

</body>
</html>