<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <title>Gestion-Habaka-Fablab</title>

    <!-- Favicons-->
    <link rel="icon" href="<?php echo img_url("favicon-32x32.png"); ?>" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="<?php echo img_url("favicon-152x152.png"); ?>">


    <!-- CORE CSS-->
    <link href="<?php echo css_url("materialize.min"); ?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo css_url("style.min"); ?>" type="text/css" rel="stylesheet" media="screen,projection">
    <!-- Custome CSS-->
    <link href="<?php echo css_url("custom/custom.min"); ?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo css_url("custom/custom"); ?>" type="text/css" rel="stylesheet" media="screen,projection">


    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="<?php echo css_url("js/plugins/perfect-scrollbar/perfect-scrollbar"); ?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo css_url("js/plugins/jvectormap/jquery-jvectormap"); ?>" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="<?php echo css_url("js/plugins/chartist-js/chartist.min"); ?>" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">
                      <li><h1 class="logo-wrapper"><a href="<?php echo site_url("fablab/index"); ?>" class="brand-logo darken-1"><img src="<?php echo img_url("Fablab-logo.png"); ?>" alt="Fablab Logo"></a> <span class="logo-text">HABAKA FABLAB</span></h1></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                <div class="row">
                    <div class="col col s4 m4 l4">
                        <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                    </div>
                    <div class="col col s8 m8 l8">
                        <ul id="profile-dropdown" class="dropdown-content">
                            <li><a href="#"><i class="mdi-action-face-unlock"></i> Profil</a>
                            </li>
                            <li><a href="#"><i class="mdi-action-settings"></i> Config</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="<?= site_url('fablab/logout');?>"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                            </li>
                        </ul>
                        <?php
                          $user = $this->ion_auth->user()->row();
                          $user_groups = $this->ion_auth->get_users_groups($user->id)->row();
                        ?>
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?= $user->username;?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <p class="user-roal"><?=$user_groups->description;?></p>
                    </div>
                </div>
                </li>
                <li class="bold"><a href="<?= site_url('fablab/index');?>" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Tableau de bord</a>
                </li>
                <li class="bold"><a href="<?= site_url('fablab/index_membre');?>" class="waves-effect waves-cyan"><i class="mdi-social-group"></i> Membres </a>
                </li>
                <li class="bold"><a href="<?= site_url('fablab/visite');?>" class="waves-effect waves-cyan"><i class="mdi-maps-beenhere"></i> Visites </a>
                </li>
                <li class="bold"><a href="<?= site_url('fablab/visiteur');?>" class="waves-effect waves-cyan"><i class="mdi-social-people-outline"></i> Visiteurs </a>
                </li>
                <li class="bold"><a href="<?= site_url('fablab/materiel');?>" class="waves-effect waves-cyan"><i class="mdi-hardware-memory"></i> Matériaux </a>
                </li>
                <li class="bold"><a href="<?= site_url('fablab/materiel');?>" class="waves-effect waves-cyan"><i class="mdi-editor-attach-money"></i> Cotisations </a>
                </li>
                <li class="li-hover"><div class="divider"></div></li>
                <li class="li-hover"><p class="ultra-small margin more-text">AUTRES</p></li>
                <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-action-book"></i> Réservations</a>
                </li>
                <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-action-work"></i> Projets</a>
                </li>
                <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Calendrier</a>
                </li>
            </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                    <!--chart dashboard start-->

                    <!--chart dashboard end-->

                    <!-- //////////////////////////////////////////////////////////////////////////// -->
