<?php
$routes = include('navigation.php');
function getURI()
{
    if(!empty($_SERVER['REQUEST_URI'])){
        return trim($_SERVER['REQUEST_URI'],'/');
    }
}

$uri=getURI();


foreach ($routes as $uriPattern => $path) {
    if (preg_match("~$uriPattern~", $uri)) {
        $active=$path;
    }
}
?>

<nav class="navbar navbar-expand-md navbar-dark bg-secondary fixed-top h4" style="font-family: cheltenham">

    <a class="navbar-brand h1" href="index.php"><img src="assets/i/logo2.png" width="60" height="60" class="d-inline-block align-top" style="opacity: 0.5" alt="">  </a> <a style="font-family: 'Conv_franklin-cword-normal-500',Sans-Serif; opacity: 0.5" href="index.php">NPhotography</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarsExampleDefault">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?php if ($active==1){echo 'active';}?>" href="portfolio.php">Портфолио</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($active==2){echo 'active';}?>" href="uslugi.php">Услуги</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($active==3){echo 'active';} ?>" href="blog.php">Блог</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($active==4){echo 'active';} ?>" href="reply.php">Отзывы</a>
            </li>
            <li class="nav-item <?php if ($active==5){echo 'active';} ?>">
                <a href="contacts.php" class="nav-link">Контакты</a>
            </li>
        </ul>

    </div>
</nav>