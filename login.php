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
    



$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM signup where email='".$email."' and password='".$password."' limit 1";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
    echo '<script>alert("you have succesfully login"); location.replace(document.referrer);</script>';
}
else{
    echo '<script>alert("Login Failed..! plz check your password or email"); location.replace(document.referrer);</script>';
}

// }
?>