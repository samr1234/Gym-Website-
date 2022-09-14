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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
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
.heading{
    text-align:center;
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
  text-align: center;
    
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-left:8rem;
  margin-top:3rem;
}
.container table:hover{
    /* background-color:black; */
    /* color:white */

}
/* body{
    background: url(./regimg.jpg);
    margin: 0;
} */
.size{
    height:6rem;
    width:6rem;
}
td a{
    text-decoration:none;
    color:black;
}
td a:hover{
    color:green;
}
td  .delete:hover{
    color:red;
}

.dustbin{
    height:5rem;
}
.dustbin:hover{
   
    opacity: 0.5;
    
}
#myBtnContainer{
    display:flex;
    justify-content:center;
    margin-top:2rem;
    margin-bottom:3rem;
}
#myBtnContainer .btn1{
   font-size: 1.3rem;
   border-radius: 3rem;
   border-color: rgb(170, 101, 12);
   padding:0.4rem 1.2rem;
    background-color:  rgb(192, 218, 241);
    cursor: pointer
    
   
}
#myBtnContainer .btn1:hover{
    color:rgb(39, 192, 167);
}
#myBtnContainer #btn{
    padding: 0rem 4rem;
}
.container1 {
min-width: 400px;
width: 550px;
height:650px;
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
    margin-left: 22.5rem;
}
form #select{
    margin-top:1.5rem;
    padding:0.5rem 13.7rem 0.45rem 10rem;
    margin-left: 22.5rem;
}
}
form .btn{
    margin-top:1.5rem;
    padding:0.5rem 14rem;
}
form .img{
    border:1px solid grey;
    padding:0.4rem 5rem 0.3rem 10rem;
   
}
#form{
    display:none;
}
#myTable{
    display:none;

}
.h{
    text-align:center;
}

.form1 input {
    
    /* width:10%; */
    padding: 0.2rem 1rem;
    margin:0.2rem 0.2rem 0.1rem 6rem;
}
#cont{
    display:none;
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
                    <h1>WELCOME <?php $str = strtoupper($result['name']); ?> <span style="color:#9B42E1   "><?php echo $str?> </span></h1>

        </div>
        <div class="head1">
            <ol>
            <ul><a href="http://localhost/upload_image/mainadmin.php">HOME</a></ul>
                <ul><a href="http://localhost/upload_image/trainerrecord.php">TRAINER</a></ul>
                <ul><a href="http://localhost/upload_image/galleryrecord.php">GALLERY</a></ul>
               
                <ul><a href="http://localhost/upload_image/forget.php">LOG OUT
                </a></ul>
            </ol>
        </div>
    </div>

    <h1 class="heading">TRAINER RECORD</h1>
    <div class="container">
     
     <!-- <img src="./regimg.jpg" alt="" srcset=""> -->
     <div id="myBtnContainer">
     <button class="btn1 active" id="btn" onclick="myFunction1()"> UPLOAD RECORD</button>
     <button class="btn1 active" onclick="myFunction()">UPDATE/DELETE RECORD</button>
 
     </div>
     <div class="container1" id="form">
     
   
        <h1 class="h">UPLOAD RECORD</h1>
        
        <form action="upload.php"  name="form" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" id="" placeholder="Enter Name">
            <input type="text" name="age" id=""placeholder="Enter Age">

            <input type="text" name="gender" id="" placeholder="Enter Gender">
            <input type="text" name="workexp" id="" placeholder="Workexp">
            <input type="text" name="timings" id="" placeholder="Timings">
            <input type="text" name="achievements" id="" placeholder="Achievement">
            <input type="text" name="qualification" id="" placeholder="qualification">
           
            <input type="file" name="uploadfile" class="img" value="Choose File">
            <input type="submit" class="btn" value="Submit" name="upload">

        </form>
    
</div>
  
    <table id="myTable">
       <tr>
           <th>ID</th>
           <th>NAME</th>
           <th>AGE</th>
           <th>GENDER</th>
           <th>WORKEXP</th>
           <th>TIMINGS</th>
           <th>ACHIEVEMENTS</th>
           <th>QUALIFICATION</th>
           <th>IMAGE</th>
          
           <th>UPDATE</th>
         
           <th>DELETE</th>
       </tr>
       <?php 

$servername="localhost";
$username="root";
$password="";
$database="gym";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    // die("our database is failed to connect");
}
else{
    // echo "connection is successeded";
}
echo "<br>";
$sql="SELECT * FROM `trainer`";
$result=mysqli_query($conn,$sql);



           while($rows = mysqli_fetch_array($result)){
            ?>
            <tr>
            <td><?php echo $rows['id'];?></td>
            <td><?php echo $rows['name'];?></td>
            <td><?php echo $rows['age'];?></td>
            <td><?php echo $rows['gender'];?></td>
            <td><?php echo $rows['workexp'];?></td>
            <td><?php echo $rows['timings'];?></td>
            <td><?php echo $rows['achievements'];?></td>
            <td><?php echo $rows['qualification'];?></td>
            <td><img class="size" src="<?php echo $rows['image'];?>"></td>
            
            <td><button style="background:none; border:none" > <a href="http://localhost/upload_image/update.php?id=<?php echo $rows['id'];?>"><i  class="fas fa-edit" style="font-size:53px"></i></a></button></td>
           
           
            <!-- <td>delete</td> -->
            <td><form action="deletetrainer.php" method="POST" class="form1"> <input  type="number"  name="id1"  value="<?php echo $rows['id'];?>"style="display:none;"><button style="border:none; background:none; margin-left:0.7rem" name="delete" > 
               
            <a class="delete" href=""><i class="fas fa-trash-alt"  style="font-size:53px"></i></a></button></form></td>
            </tr>
            <?php 
           }
        ?>
           
   
    </table>
    </div>
    <div id="cont">
  <form action="">
      <input type="text">
      <input type="text">
      <input type="text">
  </form>
  </div>
</body>
<script src="trainerrecord.js"></script>
</html>