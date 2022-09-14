<?php
ob_start(); //Turns on output buffering 

// $timezone = date_default_timezone_set("india/punjab");

$con = mysqli_connect("localhost", "root", "", "gym"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$conatct = $_POST['phone'];
$subject1 = $_POST['subject1'];
$radiobtn = $_POST['rdiobtn'];
$email_from="samridhsood32@gmail.com";
$_email_subject="BURN GYM";
$email_body="you are now member of burnfit gym";



$email_to=$email;
$headers="from:$email_from \n";
$headers ="reply-to:$email\n";
$sql="INSERT INTO `register`(`name`, `subject`, `email`, `contact`, `plan`, `radiobtn`) VALUES ('$name','$subject','$email','$conatct','$subject1','$radiobtn' )";

$query=mysqli_query($con,$sql);
if($query){
    echo '<script>alert("Thank You..! you are register successfully"); location.replace(document.referrer);</script>';
    mail($email_to,$_email_subject,$email_body,$headers);

}
?>