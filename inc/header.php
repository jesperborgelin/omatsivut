<header id="main_menu" class="header navbar-fixed-top">
    <div class="main_menu_bg">
        <div class="container">
            <div class="row">
                <div class="nave_menu">
                    <nav class="navbar navbar-default" id="navmenu">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand" href="index.php">
                                    <img src="assets/images/logo.png"/>
                                </a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->



                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right">
                                  <?php if (isset($_SESSION['username'])): ?>
                                  <li><a>Kirjauduttu sisään nimellä <?php echo $_SESSION['username']; ?></a></li>
                                  <?php endif; ?>
                                    <li><a href="index.php">Koti</a></li>
                                    <li><a href="projektit.php">Projektit</a></li>
                                    <li><a href="#contact">Ota yhteyttä</a></li>
                                    <?php if (!isset($_SESSION['username'])): ?>
                                      <li><a href="login.php">Kirjaudu</a></li>
                                      <?php else: ?>

                                        <li><a href="userpanel.php">User panel</a></li>
                                    <?php endif; ?>

                                </ul>
                            </div>

                        </div>
                    </nav>
                </div>
            </div>

        </div>

    </div>
</header> <!--End of header -->
