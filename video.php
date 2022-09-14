<?php
error_reporting(0);
?>
<?php
  $msg = "";
 
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    // $tempname = $_FILES["uploadfile"]["tmp_name"];
    // $id=$_POST['id'];
    // $info=$_POST['info'];

    
    // $folder = "upload_image/".$filename;
    // move_uploaded_file($tempname,$folder);
   
     
$db = mysqli_connect("localhost", "root", "", "gym");
$sql = "INSERT INTO `videos`(`video`) values('$filename')";

mysqli_query($db, $sql);
if($result){
  echo '<script>alert("Video record inserted"); location.replace(document.referrer);</script>';

}
if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
 
?>





