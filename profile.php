<!-- 
Developer: Dollarstir (CEO of Dollarsoft Enterprice)
Website: http://www.dollarstir.com
Contact: +233556676471
Email: kpin463@gmail.com
Youtube : http://www.youtube.com/DollarsoftCorporation

 -->

 <?php 
//  session_start();
 
 include 'core.php';
 
 
 ?>

<!doctype html>
<html lang="zxx">


<!-- player-medium-wrsb41:32-->
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php Apptitles(5) ;?></title>

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
            <?php hbar(1);?>
            <!--// Main Header //-->

        </header>
        <!--// Header //-->
        
        <!--// SubHeader //-->
        <!-- <div class="ritekhela-subheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Player Medium W Right Sidebar</h1>
                        <ul class="ritekhela-breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Player</a></li>
                            <li>Player Medium</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
        <!--// SubHeader //-->

        <!--// Content //-->
        <div class="ritekhela-main-content">

            <!--// Main Section //-->
            <div class="ritekhela-main-section ritekhela-fixture-list-full">
                <div class="container">
                    <div class="row">
                        
                        <!--// Full Section //-->
                        <div class="col-md-8">

                            <?php
                                include 'db.php';
                                $getuser = mysqli_query($conn,"SELECT * FROM client WHERE id='".$_SESSION['uid']."'");
                                $row = mysqli_fetch_array($getuser);

                            ?>
                            <!--// Player //-->
                            <div class="ritekhela-team ritekhela-team-view3">
                                <ul class="row">
                                    <li class="col-md-12">
                                        <figure>
                                            <a href="#"><img src="extra-images/player-medium-1.jpg" alt=""></a>
                                            <!-- <figcaption>
                                                <a href="#" class="fab fa-facebook-f"></a>
                                                <a href="#" class="fab fa-twitter"></a>
                                                <a href="#" class="fab fa-instagram"></a>
                                                <a href="#" class="fab fa-dribbble"></a>
                                            </figcaption> -->
                                        </figure>
                                        <div class="ritekhela-team-view3-text">
                                            <h2><a href="#"><?php echo $row['name'] ;?></a></h2>
                                            <span><?php echo $row['utype'] ;?></span>
                                            <p><?php echo $row['email'];?></p>
                                            <p><?php echo $row['phone'];?></p>
                                            <p><?php echo $row['address'];?></p>
                                            <p><?php echo 'joined on ' . $row['datejoined'];?></p>
                                            <!-- <a href="#" class="ritekhela-team-view3-btn">Read More <i class="fa fa-angle-right"></i></a> -->
                                        </div>

                                        
                                    </li>
                                    
                                </ul>

                                <!-- Update user form -->
                            <div class="ritekhela-form">
                                <form class="contfrm">
                                <p>
                                    <label for="">Browse picture</label>
                                        <input type="file" name="image" > </p>
                                    <p>
                                        <input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }" name="sender" required=""> </p>
                                    <p>
                                        <input type="text" value="Email" onblur="if(this.value == '') { this.value ='Email'; }" onfocus="if(this.value =='Email') { this.value = ''; }" name="email" required=""> </p>
                                    <p>
                                        <input type="text" value="Phone number" onblur="if(this.value == '') { this.value ='Phone number'; }" onfocus="if(this.value =='Phone number') { this.value = ''; }" name="phone" required=""> </p>

                                        
                                    <p class="ritekhela-comment">
                                        <textarea placeholder="Address" name="address"></textarea>
                                    </p>
                                    <p class="ritekhela-submit">
                                        <input type="submit" value="Update" class="ritekhela-bgcolor"> </p>
                                </form>
                            </div>
                            </div>
                            <!--// Player //-->
                            <!--// Pagination //-->
                            <!-- <div class="ritekhela-pagination">
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div> -->
                            <!--// Pagination //-->
                        </div>
                        <!--// Full Section //-->

                        <!--// SideBaar //-->
                        
                        <!--// SideBaar //-->

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
    <?php logbox();?>

    <!--// Login ModalBox //-->
    <?php register();?>

    <!--// Search ModalBox //-->
    <?php searchbox();?>


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


<!-- player-medium-wrsb41:43-->
</html>