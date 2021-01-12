<!-- 
Developer: Dollarstir (CEO of Dollarsoft Enterprice)
Website: http://www.dollarstir.com
Contact: +233556676471
Email: kpin463@gmail.com
Youtube : http://www.youtube.com/DollarsoftCorporation

 -->

<?php 
 session_start();
include 'core.php'; ?>
<!doctype html>
<html lang="zxx">


<!-- gallery-simple41:17-->

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php Apptitles(4); ?></title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/slick-slider.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="css/smartmenus.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="sweetalert.css">

</head>

<body>
    <div id="ritekhela-loader">
        <div id="ritekhela-loader-inner">
            <div id="ritekhela-shadow"></div>
            <div id="ritekhela-box"></div>
        </div>
    </div>

    <div class="ritekhela-wrapper">

        <!--// Header //-->
        <header id="ritekhela-header" class="ritekhela-header-one">

            <!--// TopStrip //-->
            <?php mybar();?>
            <!--// TopStrip //-->

            <!--// Main Header //-->
            <?php hbar(4); ?>
            <!--// Main Header //-->

        </header>
        <!--// Header //-->

        <!--// SubHeader //-->
        <div class="ritekhela-subheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1> Gallery</h1>
                        <ul class="ritekhela-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <!-- <li><a href="#">Blog</a></li> -->
                            <li> Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--// SubHeader //-->

        <!--// Content //-->
        <div class="ritekhela-main-content">

            <!--// Main Section //-->
            <div class="ritekhela-main-section ritekhela-fixture-list-full">
                <div class="container">
                    <div class="row">

                        <!--// Full Section //-->
                        <div class="col-md-12">
                            <!--// Gallery //-->
                            <div class="ritekhela-gallery ritekhela-gallery-view1">
                                <ul class="row">
                                    <?php
                                    
                                        include 'db.php';
                                        
                                        $dsi= mysqli_query($conn,"SELECT * FROM gallery ORDER BY id DESC ");
                                        while ($rg= mysqli_fetch_array($dsi)) {
                                            echo '<li class="col-md-3">
                                            <figure>
                                                <a data-fancybox-group="group" href="mg/'.$rg['pic'].'" class="fancybox"><img src="mg/'.$rg['pic'].'" alt="" style="height:350px;"> <i class="fa fa-plus ritekhela-bgcolor"></i> </a>
                                                
                                            </figure>
                                           
                                        </li>';
                                            # code...
                                        }
                                    ?>

                                </ul>
                            </div>
                            <!--// Gallery //-->
                            <!--// Pagination //-->
                            <!--<div class="ritekhela-pagination">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <!--// Pagination //-->
                        </div>
                        <!--// Full Section //-->

                    </div>
                </div>
            </div>
            <!--// Main Section //-->

        </div>
        <!--// Content //-->

        <!--// Footer //-->
        <?php ft(); ?>
        <!--// Footer //-->

    </div>


    <!--// Login ModalBox //-->
    <?php logbox(); ?>

    <!--// Login ModalBox //-->
    <?php register(); ?>

    <!--// Search ModalBox //-->
    <?php searchbox(); ?>


    <!-- jQuery -->
    <script src="script/jquery.js"></script>
    <script src="script/popper.min.js"></script>
    <script src="script/bootstrap.min.js"></script>
    <script src="script/slick.slider.min.js"></script>
    <script src="script/fancybox.min.js"></script>
    <script src="script/isotope.min.js"></script>
    <script src="script/smartmenus.min.js"></script>
    <script src="script/progressbar.js"></script>
    <script src="script/jquery.countdown.min.js"></script>
    <script src="script/functions.js"></script>


     <!-- Dolarsoft JS -->
     <script src="sweetalert.min.js"></script>
    <script src="ajax.js"></script>
</body>


<!-- gallery-simple41:17-->

</html>