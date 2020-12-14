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

}

?>