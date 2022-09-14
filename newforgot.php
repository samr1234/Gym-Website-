<?php 

$conn=mysqli_connect("localhost","root","","gym");

if(!$conn){
    die("failed to connect".mysqli_connect_error);
}
else{
    echo "successfull";
}
// $username=$email=$password=$confirmpassword="";
// $username_error=$email_error=$password_error=$confirmpassword_error="";

// if($_SERVER["REQUEST_METHOD"]=="POST"){
    


    $exists=false;
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

if(($password==$confirmpassword) && $exists==false) {
$sql="UPDATE `signup` SET `email`='$email',`password`='$password' WHERE email='$email'";
$query=mysqli_query($conn,$sql);
if($query){
    echo '<script> alert("you password has been reset");  location.replace("http://localhost/upload_image/signup.html")</script>';
}
// echo "you have suucessfully reset your password";
// header("Location:signup.html");

}
else{
    echo '<script>window.alert("password not match"); location.replace(document.referrer);</script>';
}


?>