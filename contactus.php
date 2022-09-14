<?php
// -----for trainer------
if(isset($_POST['submit'])){
    echo '<script>alert("please select  department!!"); location.replace(document.referrer);</script>';

}
if (isset($_POST['submit3'])) {
// $department=$_POST['department'];
$name=$_POST['username'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$message=$_POST['message'];
$filename = $_FILES["uploadfile"]["name"];

$email_from="samridhsood32@gmail.com";
$_email_subject="BURN GYM";
$email_body="you will receive a call from our executive ";

$email_to=$email;
$headers="from:$email_from \n";
$headers ="reply-to:$email\n";

$secretkey="6Ld-Y8cbAAAAAJ3EX54UTK3pQUlfggMruaiBLAKD";

$responsekey=$_POST['g-recaptcha-response'];

$userip=$_SERVER['REMOTE_ADDR'];

$url="https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$responsekey&remoteip=$userip";

$response=file_get_contents($url);

$response=json_decode($response);
if($response->success){
    mail($email_to,$_email_subject,$email_body,$headers);
    // echo"message sent successfully";
}
else{
    echo "invalid captcha ,please try again";
}
$db=mysqli_connect("localhost","root","","gym");

if(!$db){
    die("failed to connect".mysqli_connect_error);
}
else{
    // echo "successfull";
}

$sql = "INSERT INTO `contactus` (`department`,`name`,`contact`,`email`,`message`,`image`) VALUES ('TRAINER','$name','$contact','$email','$message','$filename')";
 
// Execute query
$query=mysqli_query($db, $sql);
if($query)
echo '<script>alert("Thank You..! you will receive a call from our executive soon!!"); location.replace(document.referrer);</script>';


}

// -----------form2 general-------------------------------------------------

if (isset($_POST['submit1'])) {
    // $department=$_POST['department'];
    $name=$_POST['username'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $message=$_POST['message'];
  
    
    $email_from="samridhsood32@gmail.com";
    $_email_subject="BURN GYM";
    $email_body="you will receive a call from our executive ";
    
    $email_to=$email;
    $headers="from:$email_from \n";
    $headers ="reply-to:$email\n";
    
    $secretkey="6Ld-Y8cbAAAAAJ3EX54UTK3pQUlfggMruaiBLAKD";
    
    $responsekey=$_POST['g-recaptcha-response'];
    
    $userip=$_SERVER['REMOTE_ADDR'];
    
    $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$responsekey&remoteip=$userip";
    
    $response=file_get_contents($url);
    
    $response=json_decode($response);
    if($response->success){
        mail($email_to,$_email_subject,$email_body,$headers);
        // echo"message sent successfully";
    }
    else{
        echo "invalid captcha ,please try again";
    }
    $db=mysqli_connect("localhost","root","","gym");
    
    if(!$db){
        die("failed to connect".mysqli_connect_error);
    }
    else{
        // echo "successfull";
    }
    
    $sql = "INSERT INTO `contactus1` (`department`,`name`,`contact`,`email`,`message`) VALUES ('GENERAL','$name','$contact','$email','$message')";
     
    // Execute query
    $query=mysqli_query($db, $sql);
    echo '<script>alert("Thank You..! you will receive a call from our executive soon!!"); location.replace(document.referrer);</script>';
    
    
    }


// --------- apply for customer----------------

if (isset($_POST['submit2'])) {
    // $department=$_POST['department'];
    $name=$_POST['username'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $message=$_POST['message'];
 
    
    $email_from="samridhsood32@gmail.com";
    $_email_subject="BURN GYM";
    $email_body="you will receive a call from our executive ";
    
    $email_to=$email;
    $headers="from:$email_from \n";
    $headers ="reply-to:$email\n";
    
    $secretkey="6Ld-Y8cbAAAAAJ3EX54UTK3pQUlfggMruaiBLAKD";
    
    $responsekey=$_POST['g-recaptcha-response'];
    
    $userip=$_SERVER['REMOTE_ADDR'];
    
    $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$responsekey&remoteip=$userip";
    
    $response=file_get_contents($url);
    
    $response=json_decode($response);
    if($response->success){
        mail($email_to,$_email_subject,$email_body,$headers);
        // echo"message sent successfully";
    }
    else{
        echo "invalid captcha ,please try again";
    }
    $db=mysqli_connect("localhost","root","","gym");
    
    if(!$db){
        die("failed to connect".mysqli_connect_error);
    }
    else{
        // echo "successfull";
    }
    
    $sql = "INSERT INTO `contactus1` (`department`,`name`,`contact`,`email`,`message`,`image`) VALUES ('CUSTOMER','$name','$contact','$email','$message','$filename')";
     
    // Execute query
    $query=mysqli_query($db, $sql);
    echo '<script>alert("Thank You..! you will receive a call from our executive soon!!"); location.replace(document.referrer);</script>';
    
    
    }

// -----------franchise---------------------------------------------------------


if (isset($_POST['submit4'])) {
    // $department=$_POST['department'];
    $name=$_POST['username'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    $state=$_POST['state'];
    $city=$_POST['city'];
 
    
    $email_from="samridhsood32@gmail.com";
    $_email_subject="BURN GYM";
    $email_body="you will receive a call from our executive ";
    
    $email_to=$email;
    $headers="from:$email_from \n";
    $headers ="reply-to:$email\n";
    
    $secretkey="6Ld-Y8cbAAAAAJ3EX54UTK3pQUlfggMruaiBLAKD";
    
    $responsekey=$_POST['g-recaptcha-response'];
    
    $userip=$_SERVER['REMOTE_ADDR'];
    
    $url="https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$responsekey&remoteip=$userip";
    
    $response=file_get_contents($url);
    
    $response=json_decode($response);
    if($response->success){
        mail($email_to,$_email_subject,$email_body,$headers);
        // echo"message sent successfully";
    }
    else{
        echo "invalid captcha ,please try again";
    }
    $db=mysqli_connect("localhost","root","","gym");
    
    if(!$db){
        die("failed to connect".mysqli_connect_error);
    }
    else{
        // echo "successfull";
    }
    
    $sql = "INSERT INTO `franchise` (`department`,`name`,`contact`,`email`,`message`,`state`,`city`) VALUES ('FRANCHISE','$name','$contact','$email','$message','$state','$city')";
     
    // Execute query
    $query=mysqli_query($db, $sql);
    echo '<script>alert("Thank You..! you will receive a call from our executive soon!!"); location.replace(document.referrer);</script>';
    
    
    }


?>