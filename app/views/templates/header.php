<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Play Video - Wordpress Teması</title>
    <!-- meta tag -->
    <meta name="description" content="Saygili Software">
    <meta name="keywords" content="saygili , software , internet , çözümleri">
    <link rel="shortcut icon" href="" type="image/x-icon" />
    <!-- responsive tag -->
    <meta name="viewport" content="user-scalable=yes, width=device-width, initial-scale=1.0, maximum-scale=1">

    <!-- css -->
    <link href="<?php echo URL; ?>/assets/css/reset.css" rel="stylesheet">
    <link href="<?php echo URL; ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo URL; ?>/assets/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<!-- header -->
<header>
    <div id="header">
        <div class="container">
            <div class="logo"><a href="<?php echo URL ?>"><img src="<?php echo URL; ?>/assets/img/logo.png" alt="logo" /></a></div>
            <ul class="menu">
                <li><a href="<?php echo URL ?>">anasayfa</a></li>
                <li><a href="#">kategoriler <i class="fa fa-angle-down"></i></a>
                    <ul>
                        <?php
                        while($categori = $categories->fetchObject()){
                            ?>
                            <li><a href="<?php echo URL . "/Kategori/" . $categori->category_id . "/" . $categori->category_name; ?>"><i class="fa fa-chevron-right"></i> <?php echo $categori->category_name ?></a></li>
                        <?php
                        }
                        ?>

                    </ul>
                </li>
                <li><a href="#">çok izlenenler</a></li>
                <li><a href="#">hakkımızda</a></li>
                <li><a href="#">iletişim</a></li>
                <li><a href="#"><i class="fa fa-random"></i> rastgele video</a></li>
            </ul>
            <div class="sosyal">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-rss"></i></a>
                <a class="arama arama2" href="#"><i class="fa fa-search"></i></a>
            </div>
            <div class="search">
                <form action="#" method="post">
                    <input type="text" name="s" placeholder="Video Arayın"/>
                </form>
            </div>
        </div>
    </div>
</header>
<!-- #header -->