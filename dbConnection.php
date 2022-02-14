<?php
//all the variables defined here are accessible in all the files that include this one
$server = "sql671.main-hosting.eu";
$user = "u429173902_exam";
$password = "Digitron@123";
$db = "u429173902_exam";

$con= new mysqli($server, $user, $password, $db)or die("Could not connect to mysql".mysqli_error($con));

?>
