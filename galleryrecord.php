

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
    /* background: url(./regimg.jpg); */
    margin:0px;
}
#myBtnContainer{
    display:flex;
    justify-content:center;
    margin-top:2rem;
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
td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 53%;
  margin-left: 12.3rem;
  margin-top: 3rem;
  
}
h1{

    text-align: center;
}
.size{
    height:7rem;
    width:7rem;
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
table  .video{
    height:10rem;
    width:10rem;
}

#myTable {
    display:none;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 53%;
  
  margin-left: 19rem;
  margin-top: 3rem;
  
}
table{
    font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 54%;
  margin-left: 19rem;
  margin-top: 3rem;
  
}
#myTable1{
    display:none;
}
.form1 input {
    
    /* width:10%; */
    padding: 0.2rem 1rem;
    margin:0.2rem 0.2rem 0.1rem 6rem;
}
td .delete:hover{
    color:red;
}
a{
    color:black;
    /* display:inline; */
}
a:hover{
    color:green;
}
.h:hover{
    color:green;
    cursor:pointer;
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
                <ul><a href="">GALLERY</a></ul>
               
                <ul><a href="http://localhost/upload_image/forget.php">LOG OUT
                </a></ul>
            </ol>
        </div>
    </div>
    <!-- <img src="./regimg.jpg" alt="" srcset=""> -->
    <!-- <a href=""><i class="fas fa-upload" style="font-size:53px; margin-left:80rem; margin-top:3rem"></i></a> -->
    <h1>GALLERY RECORD</h1>
    <div id="myBtnContainer">
    <button class="btn1 active" onclick="myFunction()"> IMAGES RECORD</button>
    <button class="btn1 active" onclick="myFunction1()"> VIDEOS RECORD</button>
    <!-- <button class="btn1 active" > VIDEOS RECORD</button>    -->
    <!-- <button class="btn1" onclick="filterSelection('table1')">images</button> -->
    <!-- <button class="btn1" onclick="filterSelection('table2')">videos</button> -->
    </div>
   


</table>

        <table id="myTable" class="myTabel" >
          
    <tr>
        <th><i class="fas fa-arrow-circle-right  h" style="font-size:58px"></i></th>
        <th>upload image here</th>
         <th><form action="image.php" method="POST" class="form1" enctype="multipart/form-data"> <input  type="file" name="uploadfile" placeholder="choose image"><button style="border:none; background:none" name="upload" > 
               
            <a  href=""><i class="fas fa-upload" style="font-size:53px"></i></a></button></form></th>
        
        
        </tr>

            <tr>
               
            
                <th>ID</th>
                <th>IMAGE</th>
               
              
                <th>DELETE</th>
            </tr>
            <?php
// session_start();
// $email = $_SESSION['email'];
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
$sql="SELECT * FROM `images`";
$result=mysqli_query($conn,$sql);
// $result1 = mysqli_fetch_assoc($result);


           while($rows = mysqli_fetch_assoc($result)){
            ?>
            <tr>

           </tr>
            <td><?php echo $rows['id'];?></td>
            <td><img class="size " src="<?php echo $rows['image'];?>"></td>
            <!-- <td><a href=""><i class="fas fa-upload"  style="font-size:53px "></i></a></td> -->
            <td><form action="delete.php" method="POST" class="form1"> <input  type="number"  name="id" placeholder="Enter id to delete" value="<?php echo $rows['id'];?>"style="display:none;"><button name="deleteimage" style="border:none; background:none"  > 
            <a class="delete" href=""><i class="fas fa-trash-alt"  style="font-size:53px"></i></a></button></form></td>
            </tr>
            <?php 
           }
        ?>
    </table>
    <!-- -------------video------------ -->
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
$sql="SELECT * FROM `videos`";
$result=mysqli_query($conn,$sql);

?>
   
        <table id="myTable1" class="filterDiv table2">
        <tr>
        <th><i class="fas fa-arrow-circle-right  h" style="font-size:58px"></i></th>
        <th>upload video here</th>
         <th><form action="video.php" method="POST" class="form1" enctype="multipart/form-data"> <input  type="file" name="uploadfile" placeholder="choose image"><button style="border:none; background:none" name="upload" > 
               
            <a  href=""><i class="fas fa-upload" style="font-size:53px"></i></a></button></form></th>
        
        
        </tr>
            <tr>
                <th>ID</th>
                <th>VIDEOS</th>
               
               
                <th>DELETE</th>
            </tr>
            
           <?php 
           while($rows = mysqli_fetch_array($result)){
            ?>
            <tr>

           </tr>
            <td><?php echo $rows['id'];?></td>
          
            <td><video class="size" class="video " controls>
             <source  src="<?php echo $rows['video'];?>">
            </video></td>
         
            <!-- <td><a href=""><i class="fas fa-upload"  style="font-size:53px "></i></a></td> -->
            <td><form action="delete.php" method="POST" class="form1"> <input  type="number"  name="id" placeholder="Enter id to delete" value="<?php echo $rows['id'];?>"style="display:none;"><button style="border:none; background:none" name="deletevideo" > 
            <a class="delete" href=""><i class="fas fa-trash-alt"  style="font-size:53px"></i></a></button></form></td>
            </tr>
            <?php 
           }
         ?>
    </table>
</body>
<script src="galleryrecord1.js"></script>
</html>