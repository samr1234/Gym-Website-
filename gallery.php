<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gym Gallery</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- <link rel="stylesheet" href="gallery.css"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap');

:root{
    --orange:#aadb6a;
}
*{
    font-family: 'Open Sans', sans-serif;
    margin:0; padding: 0;
    box-sizing: border-box;
    transition: all .2s linear;
    text-transform: capitalize;
    outline: none;
    text-decoration: none;
    
}

*::selection{
    background:var(--orange);
    color:#fff;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
}

.btn1{
    cursor: pointer;
    border:.2rem solid var(--orange);
    border-radius:2rem;
    color:var(--orange);
    background:none;
    padding:.5rem 3rem;
    margin-top: 1rem;
    position: relative;
    z-index: 0;
    font-size: 2rem;
} 
 
.btn1::before{
    content: '';
    position: absolute;
    top:0; left: 0;
    height:100%;
    width:100%;
    background:var(--orange);
    z-index: -1;
    clip-path: circle(0% at 0% 0%);
    transition: .3s;
}

/* .btn1:hover::before{
    clip-path: circle(100%);
} */

.btn1:hover{
    color:#fff;
    background:var(--orange);
    border-radius:2rem;
}

.heading{
    display: inline-block;
    color:#333;
    margin:2rem 0;
    padding:1rem 0;
    padding-top: 8rem;
    font-size: 3rem;
    border-bottom: .2rem solid var(--orange);
}

header{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: fixed;
    top:0; left: 0;
    z-index: 1000;
    padding:2rem 3rem;
}
header .logo{
    font-size: 3rem;
    color:#fff;
}

header .logo span{
    color:var(--orange);
}

header .navbar ul{
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

header .navbar ul li{
    margin:0 1rem;
}

header .navbar ul li a{
    color:rgb(247, 234, 234);
    font-size: 2rem;
}

header .navbar ul li a.active,
header .navbar ul li a:hover{
    color:var(--orange);
}
header #menu{
    font-size: 3rem;
    color:var(--orange);
    cursor: pointer;
    display: none;
}

header.header-active{
    background:#fff;
    box-shadow: 0 .1rem .3rem rgba(0,0,0,.3);
}

header.header-active .logo,
header.header-active .navbar a{
    color:#333;
}
.navbar ul ul{
    display:none;
    position:absolute;
 
}
.navbar ul li:hover >ul{
    display:block;
    padding:6px;
    margin:3px;
   
   
   
}
.navbar ul ul li:hover{
    background-color: antiquewhite;
}
.home{
    min-height: 100vh;
    background:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)), url(gallery1.jpg) no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
    /* clip-path: circle(20px at 50% 100%); */
}
.home h1{
    font-size: 6rem;
    color:rgb(243, 224, 224);
    text-align: center;
    text-shadow: 0 .3rem .5rem #000;
    padding:0 1rem;
    text-transform: uppercase;
}
.head{
    font-size:4rem;
    text-align: center;
    margin-top:1.5rem;
    color:var(--orange);
}

.container{
    display:inline-block;
}
 .container img{
  
    padding-left: 0.2rem; 
    height: 28rem;
    width: 38rem;
    margin: 4rem 2.5rem;
    cursor:pointer;
 
}  


.container .video{
    padding-left: 0.2rem;
    width: 39rem;
    height: 28rem;
    margin:2rem 2.2rem ;
    cursor:pointer;
      
} 

.filterDiv {
    /* float: left; */
    /* background-color: #2196F3; */
    /* color: #ffffff; */
    /* width: 100px; */
    /* line-height: 100px; */
    /* text-align: center; */
    /* margin: 2px; */
    display: none; /* Hidden by default */
  }
  .show {
    display: block;
  }
   /* .btn1 .active {
    background-color: blue;
    color: white;
  } */

#myBtnContainer{
    display:flex;
    justify-content:center;
    margin-top:2rem;
}

  


  











@media (max-width:1160px){
    .container img{
    height: 38rem;
    width: 48rem;
    margin: auto;
}
   

    
    .container .video{
        height: 38rem;
    width: 48rem;
    margin: auto;
}
    }


@media (max-width:979px){

    html{
        font-size: 55%;
    }

    header #menu{
        display: block;
    }

    header .navbar{
        position: fixed;
        top:-100rem; left: 0;
        width: 100%;
        opacity: 0;
        background:#fff;
        border-top: .1rem solid rgba(0,0,0,.3);
    }

    header .navbar ul{
        flex-flow: column;
        padding:2rem 0;
    }

    header .navbar ul li{
        margin:1rem 0;
        text-align: center;
        width: 100%;
    }

    header .navbar ul li a{
        font-size: 2.5rem;
        color: #333;
        display: block;
    }

    header .navbar.nav-toggle{
        top:8rem;
        opacity: 1;
    }

    .register form{
        width:90%;
    }
  

    @media (max-width:840px){
    .container img{
margin: 3rem 16rem;
}
.container .video{
    margin: 3rem 16rem;
}

}

    @media (max-width:570px){
    .container img{
margin: 3rem 4rem;
}
.container .video{
    margin: 3rem 4rem;
}

}
}
@media (max-width:500px){

    html{
        font-size: 50%;
    }

    .home h1{
        font-size: 5rem;
    }

    .register form .inputBox input{
        width:100%;
    }

    #myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

}
#myImg:hover {opacity: 0.9;}





/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}


        </style>
</head>
<body>
    <header>
        
        <a href="#" class="logo"><span>BURN</span>FIT</a>

        <div id="menu" class="fas fa-bars"></div>

        <nav class="navbar">
        <ul>

<li><a class="active" href="http://localhost/upload_image/index1.php">home</a></li>
<li><a href="#about">about</a></li>
<li><a href="#service">service
      
<li><a href="#trainer">trainer</a></li>
<li><a href="#plan">plan</a></li>
<li><a href="http://localhost/upload_image/gallery.php#trainer">Gallery</a></li>
<li><a href="http://localhost/upload_image/contactus.html">contact Us</a></li>
<li><a href="http://localhost/upload_image/register.html">register</a></li>
<li><a href="http://localhost/upload_image/signup.html">Sign Up</a></li>
<li><a href="http://localhost/upload_image/feedback.php">Feedback</a></li>

</ul>
        </nav>

    </header>

    <!-- home starts -->

    <section class="home" id="home">

       
        <h1>Gallery</h1>
       

      

    </section>

    <div id="myBtnContainer">
    <button class="btn1 active" onclick="filterSelection('all')">Show all</button>
    <button class="btn1" onclick="filterSelection('images')">images</button>
    <button class="btn1" onclick="filterSelection('videos')">videos</button>
</div>
   
<!-- home ends -->
     
   


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
$sql="SELECT * FROM `images`";
$result=mysqli_query($conn,$sql);

// echo mysqli_num_rows($result);




while($rows = mysqli_fetch_array($result)){
    // echo var_dump($row);
    // echo $rows['image'] ;
    // $img_src = $rows['image'];
    // echo "<br>";
    // $image_class='filterDiv images';
    ?>
    <div class="container">
   
<img id="myImg" class="filterDiv images" src="<?php echo $rows['image'];?>">

  
  
    
  
   
  
</div>

 <?php  
}
 ?> 

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

// echo mysqli_num_rows($result);

while($rows = mysqli_fetch_array($result)){
    // echo var_dump($row);
    // echo $rows['image'] ;
    // $img_src = $rows['image'];
    // echo "<br>";
  
    ?>
    <div class="container">
   
   
<video class="video filterDiv videos" controls>
    <source  src="<?php echo $rows['video'];?>">
    </video>

</div>

 <?php  
}
 ?> 
 
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="index.js"></script>
<script src="gallery1.js"></script>

</html>