<?php
ob_start(); //Turns on output buffering 

// $timezone = date_default_timezone_set("india/punjab");

$con = mysqli_connect("localhost", "root", "", "gym"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>