<?php

$servername="localhost";
$username="root";
$password="";
$database="trainer";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("our database is failed to connect");
}
else{
    echo "connection is successeded";
}
echo "<br>";
$sql="SELECT * FROM `trainer1`";
$result=mysqli_query($conn,$sql);

// echo mysqli_num_rows($result);

while($rows = mysqli_fetch_array($result)){
    // echo var_dump($row);
    // echo $rows['image'] ;
    // $img_src = $rows['image'];
    // echo "<br>";

echo " <img src='".$rows['image']."'height='300' width='400'  class='hello' > ";
?>
<h1><?php echo $rows['name'];?></h1> 
<!-- ?> -->
<!-- <video width='300' height='400' controls>
    <source src="<?php echo $rows['image'];?>">
  
</video> -->
<?php
}
 ?> 
<!-- <img src="<?php echo $img_src; ?>" height="200" width="200"  title="hello"/>
<img src="<?php echo $img_src; ?>" height="100" width="100" title="hello"/> -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Upload</title>
<style>
    /* body{
        background-color:blue;
    } */
    .hello{
        
        padding:20px;
        border:2px solid green;
    }
</style>
</head>
<body>
<div id="content">
 
  <form method="POST" action="upload.php" enctype="multipart/form-data">
      <input type="file" name="uploadfile" value="upload file"/>
       
      <div>
          <button type="submit" name="upload">UPLOAD</button>
        </div>
  </form>
</div>
</body>

</html>