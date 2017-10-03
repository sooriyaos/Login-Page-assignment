<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['user']);
unset($_SESSION['type']);
//echo 'Logged Out';
echo"<script> window.open('login.php','_self')</script>";
die("<script>top.location='home.php'</script>");

?>