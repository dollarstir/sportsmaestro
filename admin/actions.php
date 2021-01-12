<?php 
include 'core.php';

if(isset($_GET['dollar'])){
    // adding activity

    if($_GET['dollar']=="addplayer"){
        
        include 'db.php';
        extract($_POST);
        $bio  =mysqli_real_escape_string($conn,$bio);
        $head  =mysqli_real_escape_string($conn,$head);
        $eyes  =mysqli_real_escape_string($conn,$eyes);
        $ears  =mysqli_real_escape_string($conn,$ears);
        $brains  =mysqli_real_escape_string($conn,$brains);
        $lungs  =mysqli_real_escape_string($conn,$lungs);
        $pulse  =mysqli_real_escape_string($conn,$pulse);
        $bp  =mysqli_real_escape_string($conn,$bp);
        $heart  =mysqli_real_escape_string($conn,$heart);
        $ecg  =mysqli_real_escape_string($conn,$ecg);
        $limbs  =mysqli_real_escape_string($conn,$limbs);
        $tone  =mysqli_real_escape_string($conn,$tone);
        $joints  =mysqli_real_escape_string($conn,$joints);
        $abdomin  =mysqli_real_escape_string($conn,$abdomin);
        $custome  =mysqli_real_escape_string($conn,$custome);
        // $ref  =mysqli_real_escape_string($conn,$ref);
       
        if(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse image for Player   
            </div>';

        }
        elseif (empty($_FILES['video']['name'])) {
            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse Video of player   
            </div>';
        }
        else{
            $dd = date("jS F, Y");

            addplayer($name,$jnumber,$nationality,$dob,$pob,$pfor,$height,$weight,$ecolor,$hcolor,$position,$etc,$defend,$speed,$possession,$throw,$passess,$dribble,$keeping,$attack,$bio,$head,$eyes,$ears,$brains,$lungs,$pulse,$bp,$heart,$ecg,$limbs,$tone,$joints,$abdomin,$custome);
        }
    }
// Deleting Activity
    if($_GET['dollar']=="deleteactivity"){

        $id = $_POST['id'];

       echo  $id;
    }
// Updating activity
    if($_GET['dollar']=="updateactivity"){

        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        $dd = date("jS F, Y");

        updateactivity($id,$title,$price,$desco,$oldpic,$dd);

    }


    if($_GET['dollar']=="addtour"){
        
        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        if (empty($title) &&  empty($prie)) {
            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                service name and price cannot be empty
                </div>';
            # code...
        }
        elseif(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse image for service   
            </div>';

        }
        else{
            $dd = date("jS F, Y");

            addtourservice($title,$price,$desco,$dd);
        }
    }

// update tour
    if($_GET['dollar']=="updatetourserv"){

    include 'db.php';
    extract($_POST);
    $desco =mysqli_real_escape_string($conn,$description);
    $dd = date("jS F, Y");

    updatetour($id,$title,$price,$desco,$oldpic,$dd);

    }


    if($_GET['dollar']=="addacomo"){
        
        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        if (empty($title) &&  empty($prie)) {
            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                Accomodation name and price cannot be empty
                </div>';
            # code...
        }
        elseif(empty($_FILES['image']['name'])){

            echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
            browse image for accomodation   
            </div>';

        }
        else{
            $dd = date("jS F, Y");

            addaccomodation($title,$price,$desco,$dd,$ltype);
        }
    }


    // updating accomodation

    if($_GET['dollar']=="updateaccserv"){

        include 'db.php';
        extract($_POST);
        $desco =mysqli_real_escape_string($conn,$description);
        $dd = date("jS F, Y");
    
        updateaccomodation($id,$title,$price,$desco,$oldpic,$dd,$ltype);
    
        }

        if($_GET['dollar']=="addlocation"){
        
            include 'db.php';
            extract($_POST);
            // $desco =mysqli_real_escape_string($conn,$description);
            if (empty($title)) {
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                    Location name  cannot be empty
                    </div>';
                # code...
            }
            elseif(empty($_FILES['image']['name'])){
    
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                browse image for Location   
                </div>';
    
            }
            else{
                $dd = date("jS F, Y");
    
                Addlocation($title);
            }
        }





        if($_GET['dollar']=="login"){
        
            include 'db.php';
            extract($_POST);
            // $desco =mysqli_real_escape_string($conn,$description);
            if (empty($email)) {
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                    enter email
                    </div>';
                # code...
            }
            elseif(empty($password)){
    
                echo '<div class="alert alert-danger mb-2" role="alert" id="myalert">
                enter password   
                </div>';
    
            }
            else{
                // $dd = date("jS F, Y");
    
                Adminlogin($email,$password);
            }
        }


}

?>