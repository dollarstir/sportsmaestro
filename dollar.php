<?php
include 'core.php';

if(isset($_GET['action'])){


    if ($_GET['action']=="addmess") {
        include 'db.php';

        extract($_POST);
        $mess= mysqli_real_escape_string($conn,$comment);

        addmessage($sender,$email,$phone,$mess);
        # code...
    }

    if ($_GET['action']=="login") {
        include 'db.php';

        extract($_POST);
        $email= mysqli_real_escape_string($conn,$email);
        $password= mysqli_real_escape_string($conn,$password);


        login($email,$password);
        # code...
    }

    if ($_GET['action']=="register") {
        include 'db.php';

        extract($_POST);
        $address= mysqli_real_escape_string($conn,$address);
        if($repass != $password){
            echo "password do not match";
        }
        elseif(empty($_FILES['image']['name'])){
            echo "please browse your picture";
        }
        elseif(empty($utype)){
            echo 'select account type';
        }
        else{
            registered($name,$email,$phone,$address,$password,$utype);

        }
        // $password= mysqli_real_escape_string($conn,$password);


        
        # code...
    }

    if ($_GET['action']=="updateuser") {
        include 'db.php';

        extract($_POST);
        $address= mysqli_real_escape_string($conn,$address);

        if($name=="Your Name"){
            echo 'Name cannot be empty';

        }
        elseif($email=="Email"){
            echo 'Email cannot be empty';
        }
        elseif($phone=="Phone number"){
            echo 'phone number cannot be empty';
        }
        else{

        updateuser($id,$name,$email,$phone,$address);
        }
        # code...
    }

    if ($_GET['action']=="adnewsletter") {
        include 'db.php';

        extract($_POST);

        if($name =="Your Name"){
            echo " please enter your name";
        }
        elseif($email=="Enter Your email"){
            echo "please enter your email address";
        }
        else{
            newsletter($name,$email);
        }
        // $mess= mysqli_real_escape_string($conn,$commen);

       
        # code...
    }

    if ($_GET['action']=="verifyoffer") {
        include 'db.php';

        extract($_POST);

            verifycoach($cid,$playerid);

        // $mess= mysqli_real_escape_string($conn,$commen);

       
        # code...
    }

    if ($_GET['action']=="paysuccess") {
        include 'db.php';

        extract($_POST);

       $newexp= date('y-m-d', strtotime(' +1 month'));


          $ins = mysqli_query($conn,"UPDATE client set pstatus='paid',expiredate='$newexp' WHERE id='$cid' ");

        // $mess= mysqli_real_escape_string($conn,$commen);

       
        # code...
    }

    if ($_GET['action']=="makeoffer") {
        include 'db.php';

        extract($_POST);

       myoffer($cid,$pid,$clubname,$dof,$cfrom,$cto,$base,$mpay,$rpay,$other,$email,$address,$city,$state,$zip,$country);


        //   $ins = mysqli_query($conn,"UPDATE client set pstatus='paid',expiredate='$newexp' WHERE id='$cid' ");

        // $mess= mysqli_real_escape_string($conn,$commen);

       
        # code...
    }


}


?>