
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/i/logo2(2).png">
    <link rel="icon" href="assets/i/logo2(2).png">

    <title>NPhotography</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!--    <link href="assets/css/custom.css" rel="stylesheet">-->

    <!-- Custom styles for this template -->

</head>

<body style="padding-top: 95px" >
<?php include "assets/layouts/navbar.php";?>
<!--Navbar-->
<?php $segments=explode('?',$uri);
$rootFoto=$segments[1];
?>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb rounded-0 bg-gray-light d-flex justify-content-center">
        <li class="breadcrumb-item active " ><a href="portfolio.php">Назад</a></li>
    </ol>
</nav>
<div id="loader-wrapper">
    <div id="loader"></div>
</div>
<div class="container">
    <?php

    $files=array_diff(scandir('assets/i/category/'.$rootFoto.'/'),array('..','.'));

    if ( count($files)<15){
        $columnsCount='card-columns2';
    }
    else{
        $columnsCount='card-columns';
    }
    ?>


    <div class=" <?php echo $columnsCount?>" >


        <?php foreach ($files as $file) {?>
            <div class="card" data-aos="fade-up" > <!--data-aos="slide-up"-->
            <a href = "assets/i/category/<?php echo $rootFoto.'/'.$file?>" data-fancybox = "gallery"  >
                <div class="hover-image" >
                <img class="card-img-top scaleImage"   src = "assets/i/thumbs/category/<?php echo $rootFoto.'/'.$file?>" alt = "" />
                <div class="icon-expand" ></div >
                    </div >
            </a >
        </div >
        <?php }?>

 <!--       <div class="card" data-aos="fade-up" style="padding-top: 5px">
        </div >

        <div class="card" data-aos="fade-up" style="padding-top: 7px">
        </div >

        <div class="card" data-aos="fade-up" style="padding-top: 3px">
        </div >-->
  </div>

</div>

<?php include 'assets/layouts/footer.php'?>
<!--Footer-->
<script src="assets/js/main.js">

</script>

</body>
</html>