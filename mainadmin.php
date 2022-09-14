<?php 
session_start();
$email = $_SESSION['email'];
?>
<?php
$conn=mysqli_connect("localhost","root","","gym");

if(!$conn){
    die("failed to connect".mysqli_connect_error);
}
else{
    // echo "successfull";
}

$sql = mysqli_query($conn,"SELECT * FROM `adminsignup` WHERE `email` = '{$email}' ");
$result = mysqli_fetch_assoc($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Admin</title>
    <style>
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
.heading{
    margin-top: 14rem;
    margin-left:33rem;
    
}
body{
    background: url(./regimg.jpg);
    margin: 0;
}

    </style>
</head>
<body>
    <div class="navbar">
        <div class="head">
            <h1>WELCOME <?php $str = strtoupper($result['name']); ?> <span style="color:#9B42E1    "><?php echo $str?> </span></h1>
          
        </div>
     
        <div class="head1">
            <ol>
                <ul><a href="http://localhost/upload_image/mainadmin.html">HOME</a></ul>
              

                <ul><a   class="trainer2"href=" http://localhost/upload_image/trainerrecord.php">TRAINER</a>
                
              
                </ul>
        
                <ul><a href="http://localhost/upload_image/galleryrecord.php">GALLERY</a></ul>
              
                <ul><a href="http://localhost/upload_image/forget.php">LOG OUT
                </a></ul>
            </ol>
        </div>
    </div>
    <!-- <h1>ADMIN PANEL</h1> -->
    <!-- <img src="./regimg.jpg" alt="" srcset=""> -->
    <!-- <h1 class="heading">DATA RECORD</h1> -->
</body>
</html>