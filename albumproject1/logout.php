<?php
session_start();
$_SESSION['username'] = null;
$_SESSION['firstname'] = null;
$_SESSION['lastname']  = null;
$_SESSION['email'] = null;
header("Location:../albumproject1/login.php");
?>