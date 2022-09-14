<?php 
if(isset($_POST['upload'])){

$conn=mysqli_connect("localhost","root","","gym");
$filename = $_FILES["uploadfile"]["name"];
// $tempname = $_FILES["uploadfile"]["tmp_name"];
$id=$_POST['id'];
$name=$_POST['name'];  
$age=$_POST['age'];
$gender=$_POST['gender'];
$workexp=$_POST['workexp'];
$timings=$_POST['timings'];
$achievements=$_POST['achievements'];
$qualification=$_POST['qualification'];

    // $folder = "gym/".$filename;
    // move_uploaded_file($tempname,$folder);
//     if (move_uploaded_file($tempname, $folder))  {
//         $msg = "Image uploaded successfully";
//     }else{
//         $msg ="Failed to upload image";
//   }

if($conn){
    echo '<script>alert("record inserted"); location.replace(document.referrer);</script>';

}
else{
    echo "connection failed";
}


$sql = "UPDATE `trainer` SET `name`='$name',`age`='$age',`gender`='$gender',`workexp`='$workexp',`timings`='$timings',`achievements`='$achievements',`qualification`='$qualification',`image`='$filename'
WHERE  id =$id";
mysqli_query($conn,$sql);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="updte.js"></script>
    <title>Update</title>
    <style>
        .container1 {
min-width: 400px;
width: 550px;
height:700px;
border:2px solid grey;
border-radius:3rem;
display:flex;
flex-direction: column;
/* justify-content: center;  from top*/ 
align-items: center;
/* margin:auto; */
/* background:  rgba(12, 34, 46, 0.62);; */
margin-top:6rem;
margin-bottom:6rem;
margin-left: 24rem;
padding:1rem 3rem;

}

 form{
    display:flex;
    flex-direction: column;
    width:33%;
    justify-content: center;
    align-items: center;
    margin-top:1.5rem;
  
}
 form input{
    margin-top:1.5rem;
    padding:0.5rem 10rem;
    margin-left: 1rem;
}
form #select{
    margin-top:1.5rem;
    padding:0.5rem 13.7rem 0.45rem 10rem;
    margin-left: 22.5rem;
}

form .btn{
    margin-top:1.5rem;
    padding:0.5rem 14rem;
}
form .img{
    border:1px solid grey;
    padding:0.4rem 5rem 0.3rem 10rem;
   
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
body{
    /* background: cyan no-repeat; */
    
    margin: 0;
}
    </style>
</head>
<body>
<div class="navbar">
        <div class="head">
            <h1><span>ADMIN </span>PANEL</h1>
        </div>
        <div class="head1">
            <ol>
                <ul><a href="http://localhost/upload_image/mainadmin.html">HOME</a></ul>
              

                <ul><a   class="trainer2"href=" http://localhost/upload_image/trainerrecord.php">TRAINER</a>
                
              
                </ul>
        
                <ul><a href="http://localhost/upload_image/galleryrecord.php">GALLERY</a></ul>
              
                <ul><a href="">LOG OUT
                </a></ul>
            </ol>
        </div>
    </div>
    <div class="container1" id="form">
    
   
        <h1 class="h">UPDATE RECORD</h1>
        <?php 
        if(!empty($_GET['id'])){
            
$servername="localhost";
$username="root";
$password="";
$database="gym";

$conn=mysqli_connect($servername,$username,$password,$database);
        $i=$_GET['id'];
        $query = "SELECT * FROM `trainer` WHERE id='$i'";
        $queryfire= mysqli_query($conn,$query);
        $num = mysqli_num_rows($queryfire);
        if($num > 0)
            while($product = mysqli_fetch_array($queryfire)){
                ?>
        
        <form action="update.php"  name="form" method="POST" enctype="multipart/form-data" >
            <input type="text" name="id" id="id" placeholder="Enter id" value="<?php echo $product['id'] ;?>">
            <input type="text" name="name" id="name" placeholder="Enter Name" value="<?php echo $product['name'] ;?>">
            <input type="text" name="age" id="age"placeholder="Enter Age" value="<?php echo $product['age'] ;?>">

            <input type="text" name="gender" id="gender" placeholder="Enter Gender" value="<?php echo $product['gender'] ;?>">
            <input type="text" name="workexp" id="workexp" placeholder="Workexp" value="<?php echo $product['workexp'] ;?>">
            <input type="text" name="timings" id="timings" placeholder="Timings" value="<?php echo $product['timings'] ;?>">
            <input type="text" name="achievements" id="achievements" placeholder="Achievement" value="<?php echo $product['achievements'] ;?>">
            <input type="text" name="qualification" id="qualification" placeholder="qualification" value="<?php echo $product['qualification'] ;?>">
           
            <input type="file" name="uploadfile" class="img" value="Choose File" >
            <input type="submit" class="btn" value="Submit" name="upload">

        </form>
    <?php
    }
}
        
?>
</div>
</body>
</html>