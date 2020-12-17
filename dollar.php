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

}


?>