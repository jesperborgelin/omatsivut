<?php
require "config/config.php";
require "config/db.php";



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Kirjaudu sisään</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <link rel="stylesheet" href="assets/css/fonticons.css">
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">


    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/plugins.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<?php include 'inc/header.php'; ?>
  <body>
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="main_contact sections">
                <div class="head_title text-center">
                    <h2>Kirjaudu sisään</h2>
                </div>

                <div class="row">
                    <div class="contact_contant">

                        <div class="col-sm-6 col-xs-12">
                            <div class="single_contant_left">
                                <form action="login2.php" method="post" id="formid">
                                    <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" placeholder="Username" required="">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="*******" required="">
                                    </div>
                                    <div class="">
                                        <input type="submit" value="Kirjaudu" class="btn btn-primary">
                                    </div>
                                    <!--</div>-->
                                </form>
                            </div>
                        </div>

  </body>
</html>
