<?php 

$conn=mysqli_connect("localhost","root","","gym");

if(!$conn){
    // die("failed to connect".mysqli_connect_error);
}
else{
    // echo "successfull";
}
// $username=$email=$password=$confirmpassword="";
// $username_error=$email_error=$password_error=$confirmpassword_error="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    

$showAlert=false;
$username=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];
$exists=false;
$email_from="samridhsood32@gmail.com";
$_email_subject="BURN GYM";
$email_body="You have successfully signup ";

$email_to=$email;
$headers="from:$email_from \n";
$headers ="reply-to:$email\n";
// if(empty(trim($username))){
//     $username_err="username cannot be blank";
// }
 if(($password==$confirmpassword) && $exists==false) {
    $sql="INSERT INTO `gym`.`signup`( `name`, `email`, `password`) values ('$username',
    '$email','$password')";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo '<script>window.alert("successfully signup"); location.replace("http://localhost/upload_image/index1.php");</script>';
    mail($email_to,$_email_subject,$email_body,$headers);
    $showAlert=true;
   }
    
}
else{
    echo '<script>window.alert("password not match"); location.replace(document.referrer);</script>';
   

}
}



?>