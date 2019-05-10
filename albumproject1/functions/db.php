<?php
$connection = mysqli_connect('localhost', 'root', '','album');
if(!$connection){
	die("Failed" . mysqli_error($connection));
}
?>