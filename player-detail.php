<!-- 
Developer: Dollarstir (CEO of Dollarsoft Enterprice)
Website: http://www.dollarstir.com
Contact: +233556676471
Email: kpin463@gmail.com
Youtube : http://www.youtube.com/DollarsoftCorporation

 -->

<?php include 'core.php'; 
session_start();
// echo $_SESSION['uid'];
?>
<!doctype html>
<html lang="zxx">


<!-- player-detail41:43-->

<head>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php Apptitles(7); ?></title>

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


    <style>
        #mof {
            background-image: url(images/transparent-pattren.png);
            background-color: #3e454c;
            /* color: whitesmoke; */
            border: 2px solid #ffdc11;
            /* border: none; */
            border-radius: 15px 0px 15px 0px;
            box-shadow: 0.00rem;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>

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
            <?php mybar(); ?>
            <!--// TopStrip //-->

            <!--// Main Header //-->
            <?php hbar(2); ?>
            <!--// Main Header //-->

        </header>
        <!--// Header //-->

        <!--// SubHeader //-->
        <div class="ritekhela-subheader">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Player Detail</h1>

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
                        <?php
                        include 'db.php';
                        $id = $_GET['id'];
                        $sel = mysqli_query($conn, "SELECT * FROM player WHERE  id='$id' ");
                        $row = mysqli_fetch_array($sel);

                        $myd = $row['dob'];
                        // $age = $dd-$row['dob'] ;

                        // function getAge($date) { // Y-m-d format
                        //     return intval(substr(date('Ymd') - date('Ymd', strtotime($date)), 0, -4));
                        // }

                        function getAge($date)
                        { // Y-m-d format
                            $now = explode("-", date('Y-m-d'));
                            $dob = explode("-", $date);
                            $dif = $now[0] - $dob[0];
                            if ($dob[1] > $now[1]) { // birthday month has not hit this year
                                $dif -= 1;
                            } elseif ($dob[1] == $now[1]) { // birthday month is this month, check day
                                if ($dob[2] > $now[2]) {
                                    $dif -= 1;
                                } elseif ($dob[2] == $now[2]) { // Happy Birthday!
                                    $dif = $dif . " Happy Birthday!";
                                };
                            };
                            return $dif;
                        }


                        $age = getAge($row['dob']);; ?>

                        <!--// Full Section //-->
                        <div class="col-md-12">
                            <div class="ritekhela-player-thumb-wrap">
                                <figure><img src="upload/<?php echo $row['pic']; ?>" alt=""></figure>
                                <div class="ritekhela-player-thumb-text">
                                    <h2><?php echo $row['jnumber']; ?></h2>
                                    <h3><?php echo $row['pname']; ?></h3>
                                    <ul class="ritekhela-player-info">
                                        <li>
                                            <h5>Nationality:</h5>
                                            <span><?php echo $row['nationality']; ?></span>
                                        </li>
                                        <li>
                                            <h5>Date Of Birth:</h5>
                                            <span><?php echo $row['dob']; ?></span>
                                        </li>


                                        <li>
                                            <h5>Place of birth</h5>
                                            <span><?php echo $row['pob']; ?></span>
                                        </li>
                                        <li>
                                            <h5>Playing For:</h5>
                                            <span><?php echo $row['pfor']; ?></span>
                                        </li>
                                        <li>
                                            <h5>Height:</h5>
                                            <span><?php echo $row['height']; ?></span>
                                        </li>
                                        <li>
                                            <h5>Eye Color</h5>
                                            <span><?php echo $row['ecolor']; ?></span>
                                        </li>
                                        <li>
                                            <h5>Hair Color</h5>
                                            <span> <?php echo $row['hcolor']; ?></span>
                                        </li>
                                        <li>
                                            <h5>Weight:</h5>
                                            <span><?php echo $row['weight']; ?></span>
                                        </li>
                                        <li>
                                            <h5>Age:</h5>
                                            <span><?php echo $age . ' years'; ?></span>
                                        </li>

                                        <li>
                                            <h5>Position:</h5>
                                            <span><?php echo $row['position']; ?></span>
                                        </li>
                                        <li>
                                            <h5>Ethnicity:</h5>
                                            <span><?php echo $row['etc']; ?></span>
                                        </li>
                                        <li>
                                            <h5>Availability:</h5>
                                            <?php if ($row['status'] == "Available") {
                                                echo '<span>Available <div style="border-radius:100px;background-color:green;width:10px;height:10px;"></div></span>';
                                            } else {
                                                echo '<span>Sold <div style="border-radius:100px;background-color:red;width:10px;height:10px;"></div></span>';
                                            }; ?>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--// Full Section //-->

                        <!--// Full Section //-->
                        <div class="col-md-8">
                            <figure class="ritekhela-fixture-detail">
                                <iframe src="videos/<?php echo $row['video']; ?>" height="410"></iframe>
                                <!-- <ul class="ritekhela-blog-options">
                                    <li><a href="#"><i class="far fa-user"></i> By Thomas Jacob</a></li>
                                    <li><i class="far fa-calendar-alt"></i> January 3, 2019</li>
                                    <li><a href="#"><i class="far fa-comment"></i> Comments</a></li>
                                    <li><a href="#"><i class="fa fa-tag"></i> Blogs,</a> <a href="#">Sports,</a> <a href="#">Footbal</a> </li>
                                </ul> -->
                            </figure>

                            <div class="ritekhela-editor-detail">
                                <p><?php echo $row['bio']; ?></p>

                                <!-- <div class="ritekhela-tags">
                                    <span><i class="fa fa-tags"></i> Tags</span>
                                    <a href="#">prestashop</a>
                                    <a href="#">wordpress</a>
                                    <a href="#">Supplies</a>
                                    <a href="#">Techniques</a>
                                </div> -->

                                <center>
                                    <form class="myoff">
                                        <?php
                                        $pd = $_GET['id'];; 
                                        
                                        
                                        ?>

                                


                                        <p>
                                            <input type="hidden" name="playerid" value="<?php echo $pd;?>" id="mpi">
                                            <input type="hidden" name="cid" value="<?php echo $_SESSION['uid'];?>" id="mci">
                                            <?php

                                                if ($row['status'] == "Sold"){
                                                    echo '<p style="color:red;">This player is sold</p>';
                                                }
                                                else{

                                            
                                                    echo '<input type="submit" id="mof" value="Make Offer"> <input type="submit" id="mof" value="View Medical Report">';

                                                }
                                            ?>
                                        </p>

                                    </form>
                                </center>
                            </div>

                            <!-- <div class="ritekhela-fancy-title-two">
                                <h2>Player Stats</h2>
                            </div>
                            <table class="ritekhela-client-detail">
                                <tbody><tr>
                                    <th>Date</th>
                                    <th>Versus</th>
                                    <th>Final Score</th>
                                    <th>BLK</th>
                                    <th>STL</th>
                                    <th>PF</th>
                                    <th>PTS</th>
                                </tr>
                                <tr>
                                    <td>Mar 24, 2017</td>
                                    <td>
                                        <figure><img src="extra-images/player-stats-img1.jpg" alt=""></figure>
                                        <div class="player-stats-text">
                                            <h6>Ocean Kings</h6>
                                            <span>Patrick’s Institute</span>
                                        </div>
                                    </td>
                                    <td>113 - 110  <span>W</span></td>
                                    <td>01</td>
                                    <td>02</td>
                                    <td>00</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>Mar 16, 2017</td>
                                    <td>
                                        <figure><img src="extra-images/player-stats-img2.jpg" alt=""></figure>
                                        <div class="player-stats-text">
                                            <h6>Bloody Wave</h6>
                                            <span>Marine College</span>
                                        </div>
                                    </td>
                                    <td>106 - 124<span> L</span></td>
                                    <td>01</td>
                                    <td>02</td>
                                    <td>00</td>
                                    <td>11</td>
                                </tr>
                                <tr>
                                    <td>Mar 10, 2017</td>
                                    <td>
                                        <figure><img src="extra-images/player-stats-img3.jpg" alt=""></figure>
                                        <div class="player-stats-text">
                                            <h6>L.A Pirates</h6>
                                            <span>Bebop Institute</span>
                                        </div>
                                    </td>
                                    <td>95 - 102<span> L</span></td>
                                    <td>03</td>
                                    <td>05</td>
                                    <td>06</td>
                                    <td>10</td>
                                </tr>
                                <tr>
                                    <td>Mar 4, 2017</td>
                                    <td>
                                        <figure><img src="extra-images/player-stats-img4.jpg" alt=""></figure>
                                        <div class="player-stats-text">
                                            <h6>Ocean Kings</h6>
                                            <span>Icarus College</span>
                                        </div>
                                    </td>
                                    <td>110 - 104  <span>W</span></td>
                                    <td>02</td>
                                    <td>00</td>
                                    <td>01</td>
                                    <td>08</td>
                                </tr>
                                <tr>
                                    <td>Feb 21, 2017</td>
                                    <td>
                                        <figure><img src="extra-images/player-stats-img5.jpg" alt=""></figure>
                                        <div class="player-stats-text">
                                            <h6>Red Wings</h6>
                                            <span>Marine College</span>
                                        </div>
                                    </td>
                                    <td>113 - 107  <span>W</span></td>
                                    <td>01</td>
                                    <td>01</td>
                                    <td>04</td>
                                    <td>12</td>
                                </tr>
                                <tr>
                                    <td>Feb 9, 2017</td>
                                    <td>
                                        <figure><img src="extra-images/player-stats-img6.jpg" alt=""></figure>
                                        <div class="player-stats-text">
                                            <h6>Lucky Clovers</h6>
                                            <span>Elric Bros School</span>
                                        </div>
                                    </td>
                                    <td>116 - 100  <span>W</span></td>
                                    <td>03</td>
                                    <td>05</td>
                                    <td>02</td>
                                    <td>13</td>
                                </tr>
                            </tbody></table> -->

                            <!-- <div class="ritekhela-fancy-title-two">
                                <h2>About Match Location</h2>
                            </div>
                            <div class="authore-wrap">
                                <figure>
                                    <a href="#"><img alt="" src="extra-images/about-match-1.jpg"></a>
                                </figure>
                                <div class="ritekhela-authore-info">
                                    <h2><a href="#">Melbourne Australia Stadium</a></h2>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo..</p>
                                </div>
                            </div> -->

                            <div class="ritekhela-fancy-title-two">
                                <h2>Related Players</h2>
                            </div>
                            <!--// Player //-->
                            <div class="ritekhela-team ritekhela-team-view1">
                                <ul class="row">


                                    <?php

                                    include 'db.php';
                                    $getr = mysqli_query($conn, "SELECT * FROM  player ORDER BY id DESC LIMIT 3 ");

                                    while ($p = mysqli_fetch_array($getr)) {
                                        if ($p['id'] == $id) {
                                        } else{
                                            echo '<li class="col-md-4">
                                                    <figure>
                                                        <a href="player-detail.php?id=' . $p['id'] . '"><img src="upload/' . $p['pic'] . '" alt="" style="width:300px;height:350px;"></a>
                                                        <!--<figcaption>
                                                            <a href="#" class="fab fa-facebook-f"></a>
                                                            <a href="#" class="fab fa-twitter"></a>
                                                            <a href="#" class="fab fa-instagram"></a>
                                                            <a href="#" class="fab fa-dribbble"></a>
                                                        </figcaption>-->
                                                    </figure>
                                                    <div class="ritekhela-team-view1-text">
                                                        <h2><a href="player-detail.php?id=' . $p['id'] . '">' . $p['pname'] . '</a></h2>
                                                        <span>' . $p['position'] . '</span>
                                                        
                                                        <a href="player-detail.php?id=' . $p['id'] . '" class="ritekhela-team-view1-btn">Read More <i class="fa fa-angle-right"></i></a>
                                                    </div>
                                                </li>';
                                        }
                                        # code...
                                    }; ?>
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

                            <!-- <div class="ritekhela-fancy-title-two">
                                <h2>Write A Comment</h2>
                            </div>
                            <div class="ritekhela-form">
                                <form>
                                    <p>
                                        <input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }" name="usrname" required=""> </p>
                                    <p>
                                        <input type="text" value="Email" onblur="if(this.value == '') { this.value ='Email'; }" onfocus="if(this.value =='Email') { this.value = ''; }" name="usrname" required=""> </p>
                                    <p>
                                        <input type="text" value="Website" onblur="if(this.value == '') { this.value ='Website'; }" onfocus="if(this.value =='Website') { this.value = ''; }" name="usrname" required=""> </p>
                                    <p class="ritekhela-comment">
                                        <textarea placeholder="Comment"></textarea>
                                    </p>
                                    <p class="ritekhela-submit">
                                        <input type="submit" value="Send Now" class="ritekhela-bgcolor"> </p>
                                </form>
                            </div> -->

                        </div>
                        <!--// Full Section //-->

                        <!--// SideBaar //-->
                        <aside class="col-md-4">

                            <!--// Widget Popular News //-->
                            <div class="widget widget_categories">
                                <div class="ritekhela-fancy-title-two">
                                    <h2>Skills</h2>
                                </div>
                                <ul>
                                    <li><a href="#">Defends</a> <?php echo $row['defend'] . '%'; ?></li>
                                    <li><a href="#">Speed</a> </a> <?php echo $row['speed'] . '%'; ?></li>
                                    <li><a href="#">Ball Possession</a></a> <?php echo $row['possession'] . '%'; ?></li>
                                    <li><a href="#">Throwing</a> </a> <?php echo $row['throw'] . '%'; ?></li>
                                    <li><a href="#">Passes</a> </a> <?php echo $row['passess'] . '%'; ?></li>
                                    <li><a href="#">Dribble</a> </a> <?php echo $row['dribble'] . '%'; ?></li>
                                    <li><a href="#">Goal Keeping</a> </a> <?php echo $row['keeping'] . '%'; ?></li>
                                    <li><a href="#">Attacking</a> </a> <?php echo $row['attack'] . '%'; ?></li>

                                </ul>
                            </div>
                            <!--// Widget Popular News //-->

                            <!--// Widget Social Media //-->
                            <!-- <div class="widget widget_social_media">
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
                            </div> -->
                            <!--// Widget Social Media //-->

                            <!--// Widget Newsletter //-->
                            <!-- <div class="widget widget_newsletter">
                                <div class="ritekhela-fancy-title-two">
                                    <h2>Our Newsletter</h2>
                                </div>
                                <form>
                                    <label>Subscribe Now</label>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante.</p>
                                    <input type="text" value="Your Name" onblur="if(this.value == '') { this.value ='Your Name'; }" onfocus="if(this.value =='Your Name') { this.value = ''; }">
                                    <input type="text" value="Enter Your email" onblur="if(this.value == '') { this.value ='Enter Your email'; }" onfocus="if(this.value =='Enter Your email') { this.value = ''; }">
                                    <input type="submit" value="Subscribe Now">
                                </form>
                            </div> -->
                            <!--// Widget Newsletter //-->

                            <!--// Widget Gallery //-->
                            <div class="widget widget_gallery">
                                <div class="ritekhela-fancy-title-two">
                                    <h2> Photos</h2>
                                </div>
                                <ul>
                                    <?php
                                    $ref = $row['ref'];

                                    $getpic =  mysqli_query($conn, "SELECT * FROM gallery WHERE ref = '$ref' ");
                                    while ($r = mysqli_fetch_array($getpic)) {

                                        echo '<li><a data-fancybox-group="group" href="mg/' . $r['pic'] . '" class="fancybox"><img style="width:100px !important;height:100px !important;" src="mg/' . $r['pic'] . '" alt=""></a></li>';
                                        # code...
                                    }; ?>

                                </ul>
                            </div>
                            <!--// Widget Gallery //-->

                        </aside>
                        <!--// SideBaar //-->

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
    <div class="loginmodalbox modal fade" id="ritekhelamodalcenter" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body ritekhela-bgcolor-two">
                    <h5 class="modal-title">Login To Your Account</h5>
                    <a href="#" class="close ritekhela-bgcolor-two" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </a>
                    <form class="loginmodalbox-search">
                        <input type="text" value="Enter User Name" onblur="if(this.value == '') { this.value ='Enter User Name'; }" onfocus="if(this.value =='Enter User Name') { this.value = ''; }">
                        <input type="text" value="Type Here Password" onblur="if(this.value == '') { this.value ='Type Here Password'; }" onfocus="if(this.value =='Type Here Password') { this.value = ''; }">
                        <input type="submit" value="Login Now" class="ritekhela-bgcolor">
                        <a href="#" class="loginmodalbox-forget">Forget Password?</a>
                    </form>
                    <div class="ritekhela-loginbox-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                            <li class="twitter"><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                            <li class="linkedin"><a href="#"><i class="fab fa-linkedin-in"></i> Linkedin</a></li>
                            <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i> Dribbble</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--// Login ModalBox //-->
    <div class="loginmodalbox modal fade" id="ritekhelamodalrg" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body ritekhela-bgcolor-two">
                    <h5 class="modal-title">Sign Up Now</h5>
                    <a href="#" class="close ritekhela-bgcolor-two" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </a>
                    <form class="loginmodalbox-search">
                        <input type="text" value="Enter User Name" onblur="if(this.value == '') { this.value ='Enter User Name'; }" onfocus="if(this.value =='Enter User Name') { this.value = ''; }">
                        <input type="text" value="Type Your Password" onblur="if(this.value == '') { this.value ='Type Your Password'; }" onfocus="if(this.value =='Type Your Password') { this.value = ''; }">
                        <input type="text" value="Confirm your password" onblur="if(this.value == '') { this.value ='Confirm your password'; }" onfocus="if(this.value =='Confirm your password') { this.value = ''; }">
                        <input type="submit" value="Sign Up" class="ritekhela-bgcolor">
                        <a href="#" class="loginmodalbox-forget">Forget Password?</a>
                    </form>
                    <div class="ritekhela-loginbox-social">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                            <li class="twitter"><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                            <li class="linkedin"><a href="#"><i class="fab fa-linkedin-in"></i> Linkedin</a></li>
                            <li class="dribbble"><a href="#"><i class="fab fa-dribbble"></i> Dribbble</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--// Search ModalBox //-->
    <div class="loginmodalbox modal fade" id="ritekhelamodalsearch" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body ritekhela-bgcolor-two">
                    <h5 class="modal-title">Search Here</h5>
                    <a href="#" class="close ritekhela-bgcolor-two" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                    </a>
                    <form>
                        <input type="text" value="Search Here Now" onblur="if(this.value == '') { this.value ='Search Here Now'; }" onfocus="if(this.value =='Search Here Now') { this.value = ''; }">
                        <input type="submit" value="Search Now" class="ritekhela-bgcolor">
                    </form>
                </div>
            </div>
        </div>
    </div>


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


<!-- player-detail41:45-->

</html>