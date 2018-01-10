<?php
require "config/config.php";
require "config/db.php";
session_start();


$query = "SELECT * FROM valmiitprojektit";
$query2 = "SELECT * FROM eivalmiitprojektit";

$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query2);
//Fetch data
$valmiitprojektit = mysqli_fetch_all($result, MYSQLI_ASSOC);
$eivalmiitprojektit = mysqli_fetch_all($result2, MYSQLI_ASSOC);
//free result
mysqli_free_result($result);
mysqli_free_result($result2);
//Close connection
mysqli_close($conn);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Projektit</title>
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
                    <h3>Projektit</h3>
                  </div>




                              <div style="width:800px;">
                                <div style="width:300px; float:left;">
                                  <h4>Valmiit projektit</h4>
                                  <?php foreach ($valmiitprojektit as $valmiit ) : ?>
                                    <label>Projektin nimi</label>
                                    <h2><?php echo $valmiit['nimi']; ?></h2>
                                    <label>Projektin kuvaus</label>
                                    <br>
                                    <small><?php echo $valmiit['kuvaus']; ?></small>
                                    <br>
                                      <a href="uploads/<?php echo $valmiit['post_image']; ?>" data-lightbox='image-1'><img class='img-responsive img-thumbnail' src="uploads/thumb/thumb_<?php echo $valmiit['post_image']; ?>" ></a>
                                    <br>
                                    <?php if (isset($_SESSION['username'])) : ?>
                                      <a href="poistavalmiit.php?id=<?php echo $valmiit['id'] ?>" class="btn btn-danger">Poista</a>
                                    <?php endif ?>
                                  <?php endforeach; ?>
                                  </div>



                            <div style="width:300px; float:right;"></div>
                            <h4>Kehitteillä olevat projektit</h4>
                            <?php foreach ($eivalmiitprojektit as $eivalmiit) : ?>
                              <label>Projektin nimi</label>
                              <h2><?php echo $eivalmiit['nimi']; ?></h2>
                              <label>Projektin kuvaus</label>
                              <br>
                              <small><?php echo $eivalmiit['kuvaus']; ?></small>
                              <br>
                              <a href="uploads/<?php echo $eivalmiit['post_image']; ?>" data-lightbox='image-1'><img class='img-responsive img-thumbnail' src="uploads/thumb/thumb_<?php echo $eivalmiit['post_image']; ?>" ></a>
                              <br>
                              <?php if (isset($_SESSION['username'])) : ?>
                                <a href="poistaeivalmiit.php?id=<?php echo $eivalmiit['id'] ?>" class="btn btn-danger">Poista</a>
                              <?php endif ?>
                            <?php endforeach ?>
                              </div>
                          </div>
                        </div>
      </div>
                      <script src="js/lightbox-plus-jquery.js"></script>
</body>
  </html>
