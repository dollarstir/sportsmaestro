<!-- 
Developer: Dollarstir (CEO of Dollarsoft Enterprice)
Website: http://www.dollarstir.com
Contact: +233556676471
Email: kpin463@gmail.com
Youtube : http://www.youtube.com/DollarsoftCorporation

 -->

 <?php 
  session_start();
 include 'core.php';?>

<!doctype html>
<html lang="zxx">


<!-- contact-us41:21-->
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php Apptitles(3) ;?></title>

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

<body class="home">
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
            <?php hbar(3);?>
            <!--// Main Header //-->

        </header>
        <!--// Header //-->
        
        <!--// SubHeader //-->
        <!-- <div class="ritekhela-subheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Contact Us</h1>
                        <ul class="ritekhela-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <!--// SubHeader //-->

        <!--// Content //-->
        <div class="ritekhela-main-content">

            <!--// Main Section //-->
            <div class="ritekhela-main-section ritekhela-contact-map-full">
                <div class="container-fluid">
                    <div class="row">
                        
                        <!--// Full Section //-->
                        <div class="ritekhela-contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d161161.90145117947!2d-1.660656745224525!3d6.667103736298295!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0xfdb96da392fdf2b%3A0x6cfeb1df19146dae!2sFavor%20Chapel%20International%2C%2027Lesley%20Opoku%20Ware%20Dr%20R.C%2C%20C-RIDGE%20Lesley%20Opoku-Ware%20Drive%2C%20Nhyiaeso!3m2!1d6.6734107!2d-1.6312533!5e0!3m2!1sen!2sgh!4v1607946760779!5m2!1sen!2sgh" height="450"></iframe>
                        </div>
                        <!--// Full Section //-->

                    </div>
                </div>
            </div>
            <!--// Main Section //-->

            <!--// Main Section //-->
            <div class="ritekhela-main-section ritekhela-fixture-list-full">
                <div class="container">
                    <div class="row">
                        
                        <!--// Full Section //-->
                        <div class="col-md-12">
                            <div class="ritekhela-fancy-title-two">
                                <h2>Contact Information</h2>
                            </div>
                            <div class="ritekhela-contact-list">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <i class="fa fa-phone"></i>
                                        <span>+233(0)244044013</span>
                                        <span>+233(0)244044013</span>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="fas fa-envelope"></i>
                                        <a href="#">info@example.com</a>
                                        <a href="#">info@exampletwo.com</a>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="fa fa-map-marker-alt"></i>
                                        <span>27 Lesley Opoku Ware Drive,<br>Kumasi- Ghana</span>
                                    </li>
                                    <li class="col-md-3">
                                        <i class="fa fa-fax"></i>
                                        <a href="#">Fax: +233(0)244044013</a>
                                        <a href="#">+233(0)244044013</a>
                                    </li>
                                </ul>
                            </div>
                            <!--// Fancy Title //-->
                            <div class="ritekhela-fancy-title-two">
                                <h2>Contact Here</h2>
                            </div>
                            <!--// Fancy Title //-->
                            <div class="ritekhela-form">
                                <form class="contfrm">
                                    <p>
                                        <input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }" name="sender" required=""> </p>
                                    <p>
                                        <input type="text" value="Email" onblur="if(this.value == '') { this.value ='Email'; }" onfocus="if(this.value =='Email') { this.value = ''; }" name="email" required=""> </p>
                                    <p>
                                        <input type="text" value="Phone number" onblur="if(this.value == '') { this.value ='Phone number'; }" onfocus="if(this.value =='Phone number') { this.value = ''; }" name="phone" required=""> </p>
                                    <p class="ritekhela-comment">
                                        <textarea placeholder="Comment" name="comment"></textarea>
                                    </p>
                                    <p class="ritekhela-submit">
                                        <input type="submit" value="Send Now" class="ritekhela-bgcolor"> </p>
                                </form>
                            </div>
                            <!--// Fancy Title //-->
                            <div class="ritekhela-fancy-title">
                                <div class="ritekhela-fancy-title-inner">
                                    <h2>our Partner</h2>
                                    <!-- <span>Is Your Team Ready For Next Match!</span> -->
                                </div>
                            </div>
                            <!--// Fancy Title //-->
                            
                            <!--// Partner //-->
                            <!-- <div class="ritekhela-partner-view1">
                                <ul class="row">
                                    <li class="col-md-3"><a href="#"><img src="extra-images/partner-logo-1.jpg" alt=""></a></li>
                                    <li class="col-md-3"><a href="#"><img src="extra-images/partner-logo-2.jpg" alt=""></a></li>
                                    <li class="col-md-3"><a href="#"><img src="extra-images/partner-logo-3.jpg" alt=""></a></li>
                                    <li class="col-md-3"><a href="#"><img src="extra-images/partner-logo-1.jpg" alt=""></a></li>
                                </ul>
                            </div> -->
                            <!--// Partner //-->
                        </div>
                        <!--// Full Section //-->

                    </div>
                </div>
            </div>
            <!--// Main Section //-->

        </div>
        <!--// Content //-->

        <!--// Footer //-->
       <?php  ft();?>
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


<!-- contact-us41:26-->
</html>