<?php

session_start();
unset($_SESSION['uid']);
unset($_SESSION['name']);
unset($_SESSION['email']);
// unset($_SESSION['uid']);
echo '<script>

        window.location="index.php";

    </script>'



?>