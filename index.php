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


<!--  36:22-->
<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php Apptitles(1) ;?></title>

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
        
        <!--// Banner //-->
        <div class="ritekhela-banner-one">
            
            <div class="ritekhela-banner-one-layer">
                <span class="ritekhela-banner-transparent"></span>
                <img src="images/final.jpg" alt="">
                <div class="ritekhela-banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>We Are Developing <strong class="ritekhela-color">The Soccer</strong> Be Our Partner</h1>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purueget aliquam libero.</p>
                                <div class="clearfix"></div>
                                <a href="#" class="ritekhela-banner-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ritekhela-banner-one-layer">
                <span class="ritekhela-banner-transparent"></span>
                <img src="extra-images/banner-1.jpg" alt="">
                <div class="ritekhela-banner-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>World Cup <strong class="ritekhela-color">rivalries</strong> reprised</h1>
                                <div class="clearfix"></div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purueget aliquam libero.</p>
                                <div class="clearfix"></div>
                                <a href="#" class="ritekhela-banner-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--// Banner //-->

        <!--// Content //-->
        <div class="ritekhela-main-content">

            <!--// Main Section //-->
            <div class="ritekhela-main-section ritekhela-fixture-slider-full">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            
                            <!--// Fixture Slider //-->
                            <div class="ritekhela-fixture-slider">


                            <?php sliderplayer();?>
                                <!-- <div class="ritekhela-fixture-slider-layer">
                                    <div class="ritekhela-fixture-box">
                                            <img src="extra-images/team-view1-2.jpg" alt="" style="height:250px;width:100%;">
                                    </div>
                                </div>
                                <div class="ritekhela-fixture-slider-layer">
                                    <div class="ritekhela-fixture-box">
                                    <img src="extra-images/team-view1-1.jpg" alt="" style="height:250px;width:100%;">
                                    </div>
                                </div>
                                <div class="ritekhela-fixture-slider-layer">
                                    <div class="ritekhela-fixture-box">
                                    <img src="extra-images/team-view1-3.jpg" alt="" style="height:250px;width:100%;">
                                    </div>
                                </div>
                                <div class="ritekhela-fixture-slider-layer">
                                    <div class="ritekhela-fixture-box">
                                    <img src="extra-images/team-view1-4.jpg" alt="" style="height:250px;width:100%;">
                                    </div>
                                </div>
                                <div class="ritekhela-fixture-slider-layer">
                                    <div class="ritekhela-fixture-box">
                                    <img src="extra-images/team-view1-5.jpg" alt="" style="height:250px;width:100%;">
                                    </div>
                                </div>
                                <div class="ritekhela-fixture-slider-layer">
                                    <div class="ritekhela-fixture-box">
                                    <img src="extra-images/team-view1-6.jpg" alt="" style="height:250px;width:100%;">
                                    </div>
                                </div> -->
                            </div>
                            <!--// Fixture Slider //-->

                        </div>
                        
                        <!--// Left Section //-->
                        <div class="col-md-8">

                            <!--// Fancy Title Two //-->
                            <!-- <div class="ritekhela-fancy-title-two">
                                <h2>Latest News</h2>
                            </div> -->
                            <!--// Fancy Title Two //-->

                            <!--// Latest Blog's //-->
                            <!-- <div class="ritekhela-blogs ritekhela-blog-view1">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="extra-images/blog-view1-1.jpg" alt=""> <i class="fa fa-link"></i> </a></figure>
                                        <div class="ritekhela-blog-view1-text">
                                            <ul class="ritekhela-blog-options">
                                                <li><i class="far fa-calendar-alt"></i> January 3, 2019</li>
                                                <li><a href="#"><i class="far fa-comment"></i> Comments</a></li>
                                            </ul>
                                            <h2><a href="#">Incredible claims Could sickly man be worst serial killer?</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consectet ad elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnaLorem ipsum dolor sit amet, consectet ad elit sed onummy.</p>
                                            <a href="#" class="ritekhela-blog-view1-btn">Read More</a>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="extra-images/blog-view1-2.jpg" alt=""> <i class="fa fa-link"></i> </a></figure>
                                        <div class="ritekhela-blog-view1-text">
                                            <ul class="ritekhela-blog-options">
                                                <li><i class="far fa-calendar-alt"></i> January 3, 2019</li>
                                                <li><a href="#"><i class="far fa-comment"></i> Comments</a></li>
                                            </ul>
                                            <h2><a href="#">TV host’s hand impaled on nail in failed magic trick</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consectet ad elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magnaLorem ipsum dolor sit amet, consectet ad elit sed onummy.</p>
                                            <a href="#" class="ritekhela-blog-view1-btn">Read More</a>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                            <!-- <div class="ritekhela-blogs ritekhela-blog-view2">
                                <ul class="row">
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="extra-images/blog-view2-1.jpg" alt=""></a></figure>
                                        <div class="ritekhela-blog-view2-text">
                                            <h2><a href="#">Ipsum cursus leo vel metus</a></h2>
                                            <time datetime="2008-02-14 20:00">July 01, 2019 5:50 am</time>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="extra-images/blog-view2-2.jpg" alt=""></a></figure>
                                        <div class="ritekhela-blog-view2-text">
                                            <h2><a href="#">TV host’s hand impaled</a></h2>
                                            <time datetime="2008-02-14 20:00">June 01, 2019 6:20 am</time>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="extra-images/blog-view2-3.jpg" alt=""></a></figure>
                                        <div class="ritekhela-blog-view2-text">
                                            <h2><a href="#">One more time? Federer</a></h2>
                                            <time datetime="2008-02-14 20:00">March 01, 2019 2:40 am</time>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="extra-images/blog-view2-4.jpg" alt=""></a></figure>
                                        <div class="ritekhela-blog-view2-text">
                                            <h2><a href="#">Federer golden opportunity</a></h2>
                                            <time datetime="2008-02-14 20:00">April 01, 2019 1:80 am</time>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="extra-images/blog-view2-5.jpg" alt=""></a></figure>
                                        <div class="ritekhela-blog-view2-text">
                                            <h2><a href="#">Ipsum cursus leo vel metus</a></h2>
                                            <time datetime="2008-02-14 20:00">May 01, 2019 9:50 am</time>
                                        </div>
                                    </li>
                                    <li class="col-md-6">
                                        <figure><a href="#"><img src="extra-images/blog-view2-6.jpg" alt=""></a></figure>
                                        <div class="ritekhela-blog-view2-text">
                                            <h2><a href="#">TV host’s hand impaled</a></h2>
                                            <time datetime="2008-02-14 20:00">Jan 01, 2019 3:10 am</time>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                            <!--// Latest Blog's //-->

                            <!--// Fancy Title Two //-->
                            <div class="ritekhela-fancy-title-two">
                                <h2>Popular Players</h2>
                            </div>
                            <!--// Fancy Title Two //-->

                            <!--// Player //-->
                            <div class="ritekhela-team ritekhela-team-view1">
                                <ul class="row">

                                <?php  displayer() ;?>
                                    <!-- <li class="col-md-4">
                                        <figure>
                                            <a href="#"><img src="extra-images/team-view1-1.jpg" alt=""></a>
                                            <figcaption>
                                                <a href="#" class="fab fa-facebook-f"></a>
                                                <a href="#" class="fab fa-twitter"></a>
                                                <a href="#" class="fab fa-instagram"></a>
                                                <a href="#" class="fab fa-dribbble"></a>
                                            </figcaption>
                                        </figure>
                                        <div class="ritekhela-team-view1-text">
                                            <h2><a href="#">Jecy Deoko</a></h2>
                                            <span>Forword</span>
                                            <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                            <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="#"><img src="extra-images/team-view1-2.jpg" alt=""></a>
                                            <figcaption>
                                                <a href="#" class="fab fa-facebook-f"></a>
                                                <a href="#" class="fab fa-twitter"></a>
                                                <a href="#" class="fab fa-instagram"></a>
                                                <a href="#" class="fab fa-dribbble"></a>
                                            </figcaption>
                                        </figure>
                                        <div class="ritekhela-team-view1-text">
                                            <h2><a href="#">John Smith</a></h2>
                                            <span>Defensive</span>
                                            <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                            <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <figure>
                                            <a href="#"><img src="extra-images/team-view1-3.jpg" alt=""></a>
                                            <figcaption>
                                                <a href="#" class="fab fa-facebook-f"></a>
                                                <a href="#" class="fab fa-twitter"></a>
                                                <a href="#" class="fab fa-instagram"></a>
                                                <a href="#" class="fab fa-dribbble"></a>
                                            </figcaption>
                                        </figure>
                                        <div class="ritekhela-team-view1-text">
                                            <h2><a href="#">Jessica</a></h2>
                                            <span>Attacker</span>
                                            <p>Lorem ipsum dolor sit met, con etur adipiscing elit. Ut c males ante.</p>
                                            <a href="#" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                            <!--// Player //-->

                            <!--// Match Result //-->
                            <!-- <div class="ritekhela-match-result">
                                <div class="ritekhela-match-title">
                                    <h4>Latest Match Result</h4>
                                    <span>Saturday, March 24th, 2016</span>
                                </div>
                                <ul>
                                    <li>
                                        <img src="extra-images/latest-result-logo-1.png" alt="">
                                        <h4><a href="#">Yorkshire</a></h4>
                                        <span>03 Mark Baily (21)</span>
                                    </li>
                                    <li class="ritekhela-match-score">
                                        <h5>FINAL SCORE</h5>
                                        <p><strong>79</strong> <small>:</small> 73</p>
                                    </li>
                                    <li>
                                        <img src="extra-images/latest-result-logo-2.png" alt="">
                                        <h4><a href="#">Sharks Club</a></h4>
                                        <span>03 Mark Baily (21)</span>
                                    </li>
                                </ul>
                            </div> -->
                            <!--// Match Result //-->

                            <!--// Fancy Title Two //-->
                            <div class="ritekhela-fancy-title-two">
                                <h2>Club Media</h2>
                            </div>
                            <!--// Fancy Title Two //-->

                            <!--// Gallery //-->
                            <div class="ritekhela-gallery ritekhela-gallery-view1">
                                <ul class="row">
                                    <?php  displaygall();?>
                                </ul>
                            </div>
                            <!--// Gallery //-->

                        </div>
                        <!--// Left Section //-->
                        
                        <!--// SideBaar //-->
                        <aside class="col-md-4">
                            
                            <!--// Widget Popular News //-->
                            <!-- <div class="widget widget_popular_news">
                                <div class="ritekhela-fancy-title-two">
                                    <h2>Popular News</h2>
                                </div>
                                <ul>
                                    <li>
                                        <span>01</span>
                                        <div class="popular_news_text">
                                            <small>The Team</small>
                                            <a href="#">Basketball Stadium will a max capacity</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li class="widget-injuries">
                                        <span>02</span>
                                        <div class="popular_news_text">
                                            <small>Injuries</small>
                                            <a href="#">The Clovers defense must reinvent itself without</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li class="widget-theleague">
                                        <span>03</span>
                                        <div class="popular_news_text">
                                            <small>The League</small>
                                            <a href="#">Take look to the brand new helmets season</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                    <li>
                                        <span>04</span>
                                        <div class="popular_news_text">
                                            <small>The Team</small>
                                            <a href="#">The Basketball women division started training</a>
                                            <time datetime="2008-02-14 20:00">December 21, 2017</time>
                                        </div>
                                    </li>
                                </ul>
                            </div> -->
                            <!--// Widget Popular News //-->

                            <!--// Widget Team Ranking //-->
                            <!-- <div class="widget widget_team_ranking">
                                <div class="ritekhela-fancy-title-two">
                                    <h2>Team Rankings</h2>
                                </div>
                                <div class="ranking-title-table">
                                    <ul class="ranking-title-row">
                                        <li>Team Rank</li>
                                        <li>M</li>
                                        <li>W</li>
                                        <li>PTS</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>1</li>
                                        <li> <img src="extra-images/ranking-widget-flag-1.png" alt=""> <div class="ranking-logo"><span>L.A Pirates</span> <small>Bebop Institute</small> </div> </li>
                                        <li>08</li>
                                        <li>08</li>
                                        <li>16</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>2</li>
                                        <li> <img src="extra-images/ranking-widget-flag-2.png" alt=""> <div class="ranking-logo"><span>Ocean Kings</span> <small>Icarus College</small> </div> </li>
                                        <li>08</li>
                                        <li>07</li>
                                        <li>14</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>3</li>
                                        <li> <img src="extra-images/ranking-widget-flag-3.png" alt=""> <div class="ranking-logo"><span>Red Wings</span> <small>Marine College</small> </div> </li>
                                        <li>07</li>
                                        <li>07</li>
                                        <li>14</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>2</li>
                                        <li> <img src="extra-images/ranking-widget-flag-2.png" alt=""> <div class="ranking-logo"><span>Ocean Kings</span> <small>Icarus College</small> </div> </li>
                                        <li>08</li>
                                        <li>07</li>
                                        <li>14</li>
                                    </ul>
                                </div>
                                <div class="ranking-content-table">
                                    <ul class="ranking-content-row">
                                        <li>1</li>
                                        <li> <img src="extra-images/ranking-widget-flag-1.png" alt=""> <div class="ranking-logo"><span>L.A Pirates</span> <small>Bebop Institute</small> </div> </li>
                                        <li>08</li>
                                        <li>08</li>
                                        <li>16</li>
                                    </ul>
                                </div>
                            </div> -->
                            <!--// Widget Team Ranking //-->

                            <!--// Widget Social Media //-->
                            <div class="widget widget_social_media">
                                <div class="ritekhela-fancy-title-two">
                                    <h2>Social Media</h2>
                                </div>
                                <ul>
                                    <li>
                                        <a href="#" class="rss">
                                            <i class="fa fa-rss"></i>
                                            <span>2,035</span>
                                            <small>Subscribers</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="fb">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>3,794</span>
                                            <small>Fans</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="g_plus">
                                            <i class="fab fa-google-plus-g"></i>
                                            <span>941</span>
                                            <small>Followers</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="you_tube">
                                            <i class="fab fa-youtube"></i>
                                            <span>7,820</span>
                                            <small>Subscribers</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter">
                                            <i class="fab fa-twitter"></i>
                                            <span>1,562</span>
                                            <small>Followers</small>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="pint">
                                            <i class="fab fa-pinterest-p"></i>
                                            <span>1,310</span>
                                            <small>Followers</small>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--// Widget Social Media //-->

                            <!--// Widget Next Match //-->
                            <!-- <div class="widget widget_next_match">
                                <div class="ritekhela-fancy-title-two">
                                    <h2>Next Match</h2>
                                </div>
                                <div class="widget_next_match_title">
                                    <h5>Championship Quarter Finals</h5>
                                    <span>Saturday, May 17th, 2017</span>
                                </div>
                                <ul>
                                    <li>
                                        <img src="extra-images/widget-next-match-logo-1.png" alt="">
                                        <h6><a href="fixture-detail.html">Basketball</a></h6>
                                        <small>Sports And Magazine</small>
                                    </li>
                                    <li>
                                        <div class="widget_next_match_option">
                                            <h6>09:00 pm</h6>
                                            <small>Madison Stadium</small>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="extra-images/widget-next-match-logo-2.png" alt="">
                                        <h6><a href="fixture-detail.html">Combine</a></h6>
                                        <small>ST Paddy's Institute</small>
                                    </li>
                                </ul>
                                <div class="widget_match_countdown">
                                    <h6>Game Countdown</h6>
                                    <div id="ritekhela-match-countdown"></div>
                                </div>
                                <a href="#" class="widget_match_btn">Buy Ticket Now</a>
                            </div> -->
                            <!--// Widget Next Match //-->

                            <!--// Widget Newsletter //-->
                            <div class="widget widget_newsletter">
                                <div class="ritekhela-fancy-title-two">
                                    <h2>Our Newsletter</h2>
                                </div>
                                <form class="newsfrm">
                                    <label>Subscribe Now</label>
                                    <p>Get notification when new player sign on</p>
                                    <input type="text" name="name" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }">
                                    <input type="text" name="email" value="Enter Your email" onblur="if(this.value == '') { this.value ='Enter Your email'; }" onfocus="if(this.value =='Enter Your email') { this.value = ''; }">
                                    <input type="submit" value="Subscribe Now">
                                </form>
                            </div>
                            <!--// Widget Newsletter //-->

                            <!--// Widget Add's //-->
                            <div class="widget widget_add">
                                <img src="extra-images/add.jpg" alt="">
                            </div>
                            <!--// Widget Add's //-->

                        </aside>
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


<!--  39:15-->
</html>