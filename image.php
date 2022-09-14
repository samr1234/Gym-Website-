<?php
error_reporting(0);
?>
<?php
  $msg = "";
 
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    // $id=$_POST['id'];
    
    $folder = "gym/".$filename;
    move_uploaded_file($tempname,$folder);

    $db = mysqli_connect("localhost", "root", "", "gym");
 
    // Get all the submitted data from the form
    $sql = "INSERT INTO `images` (`image`) values('$filename')";
     $result=mysqli_query($db, $sql);
     if($result){
      echo '<script>alert("image record inserted"); location.replace(document.referrer);</script>';

     }
         
        // Now let's move the uploaded image into the folder: image
         if (move_uploaded_file($tempname, $folder))  {
             $msg = "Image uploaded successfully";
         }else{
             $msg = "Failed to upload image";
       }
    }
       ?>




 








