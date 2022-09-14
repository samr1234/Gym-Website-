
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Image Upload</title>
<!-- <link rel="stylesheet" type= "text/css" href ="style.css"/>/ -->
<style>
    #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
}
form{
    width: 50%;
    margin: 20px auto;
}
form div{
    margin-top: 5px;
}
#img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
}
#img_div:after{
    content: "";
    display: block;
    clear: both;
}
img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
}
</style>
</head>
<body>
<div id="content">
 
  <form method="POST" action="upload.php" enctype="multipart/form-data">
  <!-- <input type="id" name="id"  placeholder="enter id"/> -->
  <input type="text" name="name"  placeholder="enter name"/>
  <input type="text" name="age"  placeholder="enter age"/>
  <input type="text" name="gender"  placeholder="enter gender"/>
  <input type="text" name="workexp"  placeholder="enter workexp"/>
  <input type="text" name="timings"  placeholder="enter timings"/>
  <input type="text" name="achievements"  placeholder="enter achievements"/>
  <input type="text" name="qualification"  placeholder="enter qualification"/>
  <input type="file" name="uploadfile" value="upload file"/>
       
      <div>
          <button type="submit" name="upload">UPLOAD</button>
        </div>
  </form>
</div>
</body>
</html>