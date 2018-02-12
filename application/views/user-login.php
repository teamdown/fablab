<!DOCTYPE html>
<html lang="en">

<!--================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 3.1
	Author: GeeksLabs
	Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <title>Authentification | Gestion Habaka Fablab</title>

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

<body class="grey darken-4">
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->



  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <?php
        if (isset($_POST['utilisateur']) and
            isset($_POST['motdepasse']))
        {
          echo validation_errors();
        }
      ?>
      <div class="login-form">
        <?=  form_open('fablab/login');?>
        <div class="row">
          <div class="input-field col s12 center">
            <img src="<?php echo img_url("favicon-152x152.png"); ?>" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text">Gestion Habaka Fablab - Authentification</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12 ">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="utilisateur" name="utilisateur" type="text">
            <label for="utilisateur" class="center-align">Utilisateur</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="motdepasse" type="password" name="motdepasse">
            <label for="motdepasse">Mot de passe</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" name="remember-me"/>
              <label for="remember-me">Se souvenir de moi</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button type="submit" name="connecter" value="Se connecter" class="btn waves-effect waves-light green col s12">Se connecter</button>
          </div>
        </div>
      <?= form_close();?>
    </div>
    </div>
  </div>



  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
  <script type="text/javascript" src="<?php echo js_url("plugins/jquery-1.11.2.min"); ?>"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?php echo js_url("materialize.min"); ?>"></script>
  <!--prism-->
  <script type="text/javascript" src="<?php echo js_url("plugins/prism/prism"); ?>"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="<?php echo js_url("plugins/perfect-scrollbar/perfect-scrollbar.min"); ?>"></script>

      <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="<?php echo js_url("plugins.min"); ?>"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="<?php echo js_url("custom-script"); ?>"></script>

</body>

</html>
