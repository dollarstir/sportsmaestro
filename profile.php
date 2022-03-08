<!-- 
Developer: Dollarstir (CEO of Dollarsoft Enterprice)
Website: http://www.dollarstir.com
Contact: +233556676471
Email: kpin463@gmail.com
Youtube : http://www.youtube.com/DollarsoftCorporation

 -->

 <?php 
 session_start();
 
 include 'core.php';

 $r1 = 'NSI';
        $r2= rand(1111111,9999999);
        $myref = $r1.''.$r2;
 
 
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
                                            <a href="#"><img src="upload/<?php echo $row['pic'] ;?>" alt="" style="width:250px;height:320px;"></a>
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

                                            <?php
                                            
                                            $esp= mysqli_query($conn,"SELECT * FROM client WHERE id='".$_SESSION['uid']."'");

                                            $rx= mysqli_fetch_array($esp);

                                            if($rx['pstatus']=="unpiad" || $rx['pstatus']==""){
                                                
                                                echo '<p><span style="background-color:red;color:#f1f1f1;text-transform:none;">Your account is inactive</span> 
                                                <form id="paymentForm"> 
                                                <input type="hidden" value="'.$myref.'" name="ref"/>
                                                <input type="hidden" value="'.$rx['id'].'" name="cid"/> 
                                                
                                                <button type="button"  onclick="payWithPaystack()" class="btn btn-success">Activate </button>
                                                
                                                </form></p>';
                                            }
                                            else{
                                                    $exp = $rx['expiredate'];
                                                    $md = date("y-m-d");
                                                    if( $exp > $md ){
                                                        echo '<p><span style="background-color:green;color:#f1f1f1;text-transform:none;">Your account is active</span>  </p>';
                                                    }
                                                    elseif($exp == $md){
                                                        echo '<p><span style="background-color:orange;color:#f1f1f1;text-transform:none;">Your account will expire today</span>  </p>';
                                                    }
                                                    elseif($exp < ($md)){
                                                echo '<p><span style="background-color:red;color:#f1f1f1;text-transform:none;">Your account is expired</span> 
                                                <form id="paymentForm">
                                                <input type="hidden" value="'.$myref.'" name="ref"/>
                                                <input type="hidden" value="'.$rx['id'].'" name="cid"/>  
                                                <button type="button"  onclick="payWithPaystack()" class="btn btn-success">Reactivate </button>
                                                </form></p>';
                                                        
                                                    }

                                            }
                                            
                                            
                                            ?>
                                            
                                            <p><?php echo $row['email'];?></p>
                                            <p><?php echo $row['phone'];?></p>
                                            <p><?php echo $row['address'];?></p>
                                            <p><?php echo 'joined on ' . $row['datejoined'];?></p>
                                            <!-- <a href="#" class="ritekhela-team-view3-btn">Read More <i class="fa fa-angle-right"></i></a> -->
                                        </div>



                                        

                                        
                                    </li>

                                    
                                    
                                </ul>
                                
                               
                                <!-- Codes for  Sending money begins -->

                                <?php
            // $mmm = preg_split("/ /",$name);
            $tt = 50;
            $mna = explode(' ',$rx['name']);  
            // echo $mna[0];

            function convertCurrency($amount,$from_currency,$to_currency){
                $apikey = 'b956567a2dd5aa819f1e';
              
                $from_Currency = urlencode($from_currency);
                $to_Currency = urlencode($to_currency);
                $query =  "{$from_Currency}_{$to_Currency}";
              
                // change to the free URL if you're using the free version
                $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
                $obj = json_decode($json, true);
              
                $val = floatval($obj["$query"]);
              
              
                $total = $val * $amount;
                return number_format($total, 2, '.', '');
              }
              
              //uncomment to test
              $amt =convertCurrency($tt, 'USD', 'GHS');
            //   echo 'GHc'.$amt;
             
              
        // $amg = floatval($amt);
        // echo $amt;
        $fname = $mna[0];
        $lname = $mna[1];
        $email = $rx['email'];
        $amount =$amt;
        
        
        ?>



                                <!-- Codes for sending money Ends -->

                                <!-- Update user form -->
                            <div class="ritekhela-form">
                                <form class="updufrm">
                                <p>
                                    <label for="">Browse picture</label>
                                        <input type="file" name="image" > </p>
                                    <p>
                                        <input type="text" value="<?php echo $row['name'];?>" name="name" required=""> </p>
                                    <p>
                                        <input type="text" value="<?php echo $row['email'];?>"  name="email" required=""> </p>
                                    <p>
                                        <input type="text" value="<?php echo $row['phone'];?>" name="phone" required=""> </p>
                                        <input type="hidden" value="<?php echo $row['id'];?>" name="id" required=""> </p>

                                        
                                    <p class="ritekhela-comment">
                                        <textarea placeholder="Address" name="address"><?php echo $row['address'];?></textarea>
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
                        <aside class="col-md-4">
                            
                            <!--// Widget Popular News //-->
                            <div class="widget widget_categories">
                                <div class="ritekhela-fancy-title-two">
                                    <h2>Your Offers</h2>
                                </div>
                                <ul>
                                    <?php

                                    $selr= mysqli_query($conn,"SELECT * FROM request WHERE cid='".$_SESSION['uid']."' ");

                                    while ($rr=mysqli_fetch_array($selr)) {
                                        $gep= mysqli_query($conn,"SELECT * FROM player WHERE id='".$rr['pid']."'");
                                        $repo = mysqli_fetch_array($gep);

                                        if($rr['status']=="Accepted"){
                                            echo '<li><a href="mailtry.php?ucid='.$rr['cid'].'&upid='.$rr['pid'].'">'.$repo['pname'].'</a> <span style="background-color:green;">'.$rr['status'].'</span></li>';
                                        }
                                        else{
                                            echo '<li><a href="mailtry.php?ucid='.$rr['cid'].'&upid='.$rr['pid'].'">'.$repo['pname'].'</a> <span style="background-color:orange;">'.$rr['status'].'</span></li>';

                                        }
                                        # code...
                                    }

                                    ?>
                                   
                                </ul>
                            </div>
                            <!--// Widget Popular News //-->

                            <!--// Widget Social Media //-->
                            
                            <!--// Widget Social Media //-->

                            <!--// Widget Newsletter //-->
                            
                            <!--// Widget Newsletter //-->
                            
                            <!--// Widget Gallery //-->
                            
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




 <!-- Payment Script -->

 <script>
            var paymentForm = document.getElementById('paymentForm');

            paymentForm.addEventListener('submit', payWithPaystack, false);

            function payWithPaystack() {
                
                var handler = PaystackPop.setup({
                
                    key: 'pk_test_25b3d5f8bfb5621c4569175877020aafe6085a0a', // Replace with your public key
                
                    email: '<?php echo $email?>',
                
                    amount: <?php echo $amount * 100;?>, // the amount value is multiplied by 100 to convert to the lowest currency unit
                
                    currency: 'GHS', // Use GHS for Ghana Cedis or USD for US Dollars
                
                    firstname: '<?php echo $fname?>',
                
                    lastname: '<?php echo $lname?>',
                
                    ref: '<?php echo $myref ;?>', // Replace with a reference you generated
                    metadata: {
                        custom_fields : 
                            [
                                    {
                                        display_name: 'Mobile Number',
                                        variable_name: 'mobile_number',
                                        value:"+233556676471"
                                    }
                                    
                            
                            ]
                    },
                
                    callback: function(response) {
                
                    //this happens after the payment is completed successfully
                
                    var reference = response.reference;
                    var fname  = '<?php echo $fname;?>';
                    var lname = '<?php echo $lname;?>';
                    var email = '<?php echo $email;?>';
                    var amount = '<?php echo $amount;?>';
                
                    //   alert('Payment complete! Reference: ' + reference);
                    // window.location='success.php?ref='+ reference + '&fname=' + fname + '&lname=' + lname + '&email=' + email + '&amount=' + amount ;
                    
                    // Make an AJAX call to your server with the reference to verify the transaction
                    
                        if(response.status == "success"){
                            var myrf = '<?php echo $myref ?>';
                            var mimi = 'dollar';
                            var formdt = $('#paymentForm')[0]; // You need to use standard javascript object here
                            var formData = new FormData(formdt);
                        
                            var opt = {
                                url : "dollar.php?action=paysuccess",
                                type: "post",
                                data:formData ,
                                contentType: false, // NEEDED, DON'T OMIT THIS (requires jQuery 1.6+)
                                processData: false,
                                cache:false, // NEEDED, DON'T OMIT THIS

                                success: function(rep){
                                setTimeout(function () { 
                                    swal({
                                    title: "Success!",
                                    text: "<small>You purchase is successfull  </small>",
                                    type: "success",
                                    html: true,
                                    confirmButtonText: "OK"
                                    },
                                    function(isConfirm){
                                    if (isConfirm) {
                                        window.location = "profile.php";
                                    }
                                    }); }, 1000);
                                }
                                
                            }
                            $.ajax(opt);
                        
                            

                                
                        
                        }            
                    },
                
                    onClose: function() {
                
                    alert('Transaction was not completed, window closed.');
                
                    },
                
                });
                
                handler.openIframe();
                
                }
        </script>


    <script src="https://js.paystack.co/v1/inline.js"></script>



    

    <!-- Dolarsoft JS -->
    <script src="sweetalert.min.js"></script>
    <script src="ajax.js"></script>
</body>


<!-- player-medium-wrsb41:43-->
</html>