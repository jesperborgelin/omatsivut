<?php
require "config/config.php";
require "config/db.php";
session_start();




?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>User panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <link rel="stylesheet" href="assets/css/fonticons.css">
    <link rel="stylesheet" href="assets/fonts/stylesheet.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/lightbox.css">

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
                    <h3>Lisää juttuja</h3>
                  </div>

                  <div class="row">
                      <div class="contact_contant">

                          <div class="col-sm-6 col-xs-12">
                              <div class="single_contant_left">
                                <?php if (isset($_SESSION['username'])): ?>
                                  <h3>Lisää projekti</h3>
                                  <form enctype="multipart/form-data" action="lisaaprojekti.php" method="post">
                                  <label>Valmis projekti</label> <input checked type="radio" name="projekti" value="valmis">
                                  <label>Ei valmis projekti</label> <input type="radio" name="projekti" value="eivalmis">
                                  <input class="form-control" type="text" name="nimi" placeholder="Projektin nimi">
                                  <br>
                                  <label>Kuvaus projektista</label>
                                  <textarea class="form-control" name="kuvaus" placeholder="Kuvaus projektista"></textarea>
                                  <br>
                                  <label>Lisää kuva projektista</label>
                                  <input type="file" name="fileToUpload" size="20">
                                  <br>
                                  <input class="btn btn-primary" type="submit"value="Lisää">
                                  </form>
                                  <?php else: ?>
                                    <h3>Kirjaudu sisään että voit olla täällä</h3>
                                <?php endif; ?>
                              </div>
                          </div>
                          <script src="js/lightbox-plus-jquery.js"></script>
</body>
  </html>
