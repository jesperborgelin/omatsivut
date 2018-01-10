<?php
require('config/config.php');
require('config/db.php');
session_start();
//Create query
$query = 'SELECT * FROM aanet';
$query2 = 'SELECT * FROM valmiitprojektit';
//Get result
$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query2);
//Fetch data
$aanet = mysqli_fetch_all($result, MYSQLI_ASSOC);
$valmiitprojektit = mysqli_fetch_all($result2, MYSQLI_ASSOC);
//free result
mysqli_free_result($result);
mysqli_free_result($result2);
//Close connection
mysqli_close($conn);

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Jesper Borgelin</title>
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
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <?php include "inc/header.php"; ?>




        <section id="home" class="home">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 ">
                            <div class="main_home_slider text-center">
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h1>Jesper Borgelin</h1>
                                        <p class="subtitle">Opiskelija Esedussa</p>

                                        <div class="home_btn">
                                            <a href="" class="btn btn-md">Lue lisää</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                        <h1>Tulossa</h1>
                                        <p class="subtitle">Tulossa</p>

                                        <div class="home_btn">
                                            <a href="" class="btn btn-md">Lue lisää</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="single_home_slider">
                                    <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                      <h1>Tulossa</h1>
                                      <p class="subtitle">Tulossa</p>

                                        <div class="home_btn">
                                            <a href="" class="btn btn-md">Lue lisää</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <section id="service" class="service">
            <div class="container">
                <div class="row">
                    <div class="main_service_area sections">
                        <div class="col-sm-6">
                            <div class="signle_service_left">
                                <h2>Tulossa
                                    Lisää
                                    Juttuja</h2>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single_service_right">
                                <div class="single_service">
                                    <div class="single_service_icon">
                                        <i class="lnr lnr-laptop-phone"></i>
                                    </div>
                                    <div class="single_service_content">
                                        <h3>Web Design</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="single_service_icon">
                                        <i class="lnr lnr-screen"></i>
                                    </div>
                                    <div class="single_service_content">
                                        <h3>UI/UX Design</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="single_service_icon">
                                        <i class="lnr lnr-picture"></i>
                                    </div>
                                    <div class="single_service_content">
                                        <h3>Photography</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                                    </div>
                                </div>
                                <div class="single_service">
                                    <div class="single_service_icon">
                                        <i class="lnr lnr-laptop-phone"></i>
                                    </div>
                                    <div class="single_service_content">
                                        <h3>App Development</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>












        <section id="counter" class="counter">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_counter sections text-center">
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_right">
                                            <i class="lnr lnr-users"></i>
                                            <h2 class="statistic-counter">0</h2>
                                            <p>Tyytyväisiä asiakkaita</p>
                                        </div>
                                    </div>
                                    <?php $i = 0; ?>
                                    <?php foreach ($aanet as $aani ) : $i++ ?>
                                    <?php endforeach ?>
                                    <?php $o = 0; ?>
                                    <?php foreach ($valmiitprojektit as $valmiit): $o++ ?>
                                    <?php endforeach; ?>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_right">
                                            <i class="fa fa-line-chart"></i>
                                            <h2 class="statistic-counter"><?php echo $o; ?></h2>
                                            <p>Projekteja tehty</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_right">
                                            <i class="lnr lnr-heart"></i>
                                            <h2 class="statistic-counter"><?php echo $i ; ?></h2>
                                            <p>Positiivisia arvosanoja</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-3 col-xs-12">
                                        <div class="single_counter_right">
                                            <i class="lnr lnr-gift"></i>
                                            <h2 class="statistic-counter">0</h2>
                                            <p>Jotain tähän</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="main_contact sections">
                        <div class="head_title text-center">
                            <h2>Ota yhteyttä</h2>
                            <p>Lähetä viestisi minulle</p>
                        </div>

                        <div class="row">
                            <div class="contact_contant">

                                <div class="col-sm-6 col-xs-12">
                                    <h4>Jätä viesti</h4>
                                    <div class="single_contant_left">
                                        <form action="viesti.php" method="get" id="formid">
                                            <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->

                                            <div class="form-group">
                                                <input type="text" class="form-control" name="nimi" placeholder="Etunimi" required="">
                                            </div>

                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Sähköposti" required="">
                                            </div>

                                            <div class="form-group">
                                                <textarea class="form-control" name="viesti" rows="8" placeholder="Viesti"></textarea>
                                            </div>
                                            <div class="form-group">
                                              <label>Lisää positiivinen arvosana</label>  <input checked value="positiivinen" type="radio" name="positiivinen">
                                            </div>
                                            <div class="form-group">
                                              <label>Älä lisää positiivista arvosanaa</label>  <input value="eipositiivinen" type="radio" name="positiivinen">
                                            </div>

                                            <div class="">
                                                <input type="submit" value="Lähetä" class="btn btn-primary">
                                            </div>
                                            <!--</div>-->
                                        </form>
                                    </div>
                                </div>


                                <div class="col-sm-5 col-sm-offset-1 col-xs-12">
                                    <div class="single_message_right_info">
                                        <h4>Osoite :</h4>
                                        <ul>
                                            <li><a href=""><i class="fa fa-home"></i> Rantalehdontie 1</a></li>
                                            <li><a href=""><i class="fa fa-phone"></i> 0405522551</a></li>

                                            <li><a href=""><i class="fa fa-envelope"></i> jesper.borgelin@gmail.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- End of messsage contant-->
                        </div>
                    </div>
                </div>
            </div>
        </section>





<?php include 'inc/footer.php'; ?>



        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>
