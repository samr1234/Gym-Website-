<?php 
if(isset($_POST['deleteimage']))
{
$servername="localhost";
$username="root";
$password="";
$database="gym";
$id=$_POST['id'];
$conn=mysqli_connect($servername,$username,$password,$database);
$query="DELETE FROM images WHERE id ='$id'";
$result=mysqli_query($conn,$query);
if($result){
    echo '<script>alert("record deleted"); location.replace(document.referrer);</script>';
else{
    echo "not deleted";
}
// mysqli_close($conn);
}
?>

<?php 
if(isset($_POST['deletevideo']))
{
$servername="localhost";
$username="root";
$password="";
$database="gym";
$id=$_POST['id'];
$conn=mysqli_connect($servername,$username,$password,$database);
$query="DELETE  FROM videos WHERE id ='$id'";
$result=mysqli_query($conn,$query);
if($result){
    echo '<script>alert("record deleted"); location.replace(document.referrer);</script>';

}
else{
    echo "not deleted";
}
// mysqli_close($conn);
}
?>











