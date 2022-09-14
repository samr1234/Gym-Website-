<?php 
if(isset($_POST['submit'])){
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
// if(empty(trim($username))){
//     $username_err="username cannot be blank";
// }
 if(($password==$confirmpassword) && $exists==false) {
    $sql="INSERT INTO `gym`.`adminsignup`( `name`, `email`, `password`) values ('$username',
    '$email','$password')";
    $result=mysqli_query($conn,$sql);
   if($result){
    echo '<script>window.alert("successfully signup"); location.replace("http://localhost/upload_image/forget.php");</script>';
       $showAlert=true;
   }
    
}
else{
    echo '<script>window.alert("password not match"); location.replace(document.referrer);</script>';
   

}
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgot</title>
    <style>
        body{
            /* background: url(rain1.mp4); */
            background-size: cover;
        }
        .con{
            position: fixed;
             bottom: 0;
            height: 405px;
            width:370px;
            border: 2px solid grey;
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin:auto;
            margin-top:16rem;
            border-radius:3rem;
            margin-bottom: 6rem;
            background: url(./ama-dablam-2064522_1920.jpg);
            border-color:  rgb(28, 192, 151);
            margin-left:31rem;
           
        }
        .con form{
            
            display:flex;
            flex-direction: column;
            width:100%;
            
        }
        form input{
            margin:0.8rem auto;
            padding:0.3rem 2rem;
            border-radius: 0.3rem;
            border-color: rgb(156, 164, 240);
        }
       
        .navbar{
          
    display:flex;
    flex-direction: row;
    justify-content: space-between;
    background-color: rgb(192, 218, 241);
 
}
.head1{
    margin-right: 2rem;
   
}
.head{
    margin-left: 2rem;
   
}
.navbar .head1 ol{
    display: flex;
    flex-direction: row;

}
.navbar .head1 ol ul a{
    font-size: 1.5rem;
    cursor: pointer;
    text-decoration: none;
    color: black;
}
.navbar .head1 ol ul a:hover{
    color:rgb(39, 192, 167);
    
}
.con h4{
    margin:0.5rem;
    color: rgb(208, 202, 247);
}
.con h4 span{
    color:rgb(39, 192, 167);
}
  



.con a{
    color:rgb(208 202 247);
}

form .btn{
    color:rgb(28, 192, 151);
    border-color:rgb(208, 202, 247);
    border-radius: 0.9rem;

   

}
.btn:hover{
    color:white;
    background-color: rgb(28, 192, 151);
    cursor: pointer;
}
body{
    margin:0;
}
.con h1{
    color:rgb(208, 202, 247)
}
.con h1 span {
    color:rgb(28, 192, 151);
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}

    </style>
</head>
<body>
   
    <video autoplay muted loop id="myVideo">
        <source src="light.mp4" type="video/mp4">
      </video>
    <div class="con">
     
        <h1><span>Sign</span> Up</h1>
        <form action="adminsignup.php" method="POST" name="myform" onsubmit="return validateForm()">
            <input type="text" name="name" id="" placeholder="Enter Name">
            <input type="email" name="email" id="" placeholder="Enter Email">
            <input type="password" name="password" id="" placeholder="Enter Password">
            <input type="password" name="confirmpassword" id="" placeholder="Confirm Password">
            <input type="submit" class="btn" value="Sign Up" name="submit">
        </form>
        <!-- <h4 style="">New Admin <a style="text-decoration: none;"href="">Sign Up Now</a></h4> -->
        <!-- <a style="text-decoration: none;"href="">Forgot Password ?</a> -->
    </div>
</body>
<script src="validate.js"></script>
</html>