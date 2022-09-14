<?php 
if(isset($_POST['delete'])){


$servername="localhost";
$username="root";
$password="";
$database="gym";

$id=$_POST['id1'];

$conn=mysqli_connect($servername,$username,$password,$database);
// $id=$_GET['id1'];
if($conn==true){
    
$cmd="DELETE  FROM `trainer` WHERE id=$id";
if($conn->query($cmd) == TRUE){
    echo '<script>alert("Record has been deleted"); location.replace(document.referrer);</script>';

}else{
    echo "not deleted";
}
}

else{
    echo "connection failed";
}
}

?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Deleted</title>
</head>

<body>
<form method="POST" action="deletetrainer.php" >
  <input type="text" name="id"  placeholder="enter id"/>
  <div>
          <button type="submit" name="delete">Delete</button>
        </div>
  </form>
  </body>
</html> -->