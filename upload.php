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
    $name=$_POST['name'];  
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $workexp=$_POST['workexp'];
    $timings=$_POST['timings'];
    $achievements=$_POST['achievements'];
    $qualification=$_POST['qualification'];
  
        $folder = "gym/".$filename;
        move_uploaded_file($tempname,$folder);
       
         
    $db = mysqli_connect("localhost", "root", "", "gym");
 
        // Get all the submitted data from the form
        $sql = "INSERT INTO `trainer` (`name`,`age`,`gender`,`workexp`,`timings`,`achievements`,`qualification`,`image`) VALUES ('$name','$age','$gender','$workexp','$timings','$achievements','$qualification','$filename')";
 
        // Execute query
        $result=mysqli_query($db, $sql);
        if($result){
          echo '<script>alert("record inserted"); location.replace(document.referrer);</script>';
        }
         
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  }
  $result = mysqli_query($db, "SELECT * FROM image");
  if($result){
    echo '<script>alert("Record has been uploaded"); location.replace(document.referrer);</script>';
  }
  while($data = mysqli_fetch_array($result))
  {
     echo $row['name'];
      echo $row['image'];
   

      ?>
    <img src="<?php echo $data['Filename']; ?>">
 
<?php

}
?>
 