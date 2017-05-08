<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?=URL?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=URL?>/assets/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">
    <!-- styles -->
    <link href="<?php echo URL; ?>/assets/css/styles.css" rel="stylesheet">
    <link href="<?=URL?>/assets/vendors/select/bootstrap-select.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header">
    <div class="col-md-5">
        <!-- Logo -->
        <div class="logo">
            <h1><a href="<?= URL ?>">Video Management System</a></h1>
        </div>
    </div>
    <div class="col-md-2 pull-right">
        <div class="navbar navbar-inverse" role="banner">
            <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b
                                class="caret"></b></a>
                        <ul class="dropdown-menu animated fadeInUp">
                            <li><a href="<?= URL . 'yonetim/logout'?>">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>