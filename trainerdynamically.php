





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Document</title>
    <style>
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

    .trainer{
    min-height: 110vh;
    text-align: center;
    background:#333;
}

.trainer .heading{
    color:#fff;
}

.trainer .box-container{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.trainer .box-container .box{
    height:40rem;
    margin:1.5rem 1rem;
    width:27rem;
    border:.5rem solid var(--orange);
    overflow: hidden;
    position: relative;
    box-shadow: 0 .3rem .5rem #000;
}

.trainer .box-container .box img{
    height:100%;
    width: 100%;
    object-fit: cover;
   
}

.trainer .box-container .box .info{
    height:80%;
    width:90%;
    position: absolute;
    top:50%; left:50%;
    transform: translate(-50%, -50%) scale(0);
    background:#fff;
    display: flex;
    /* align-items:center; */
    /* justify-content: center; */
    padding:1rem 1rem;
    
    line-height:3.3rem;
    flex-flow: column;
}
.trainer .box-container .box:hover .info{
    transform: translate(-50%, -60%) scale(1);
    background:url('ama-dablam-2064522_1920.jpg');
}
 .trainer .box-container .box .info ul li{
    list-style: none;
    font-size: 1.2rem;
    color:green;
    text-align:left;
    
    
    
}
.trainer .box-container .box .info ul li i{
    padding:0 .5rem;
    font-size:1.5rem;
}
.trainer .box-container .box .share{
    position: absolute;
    bottom:0rem; 
    left:-100%;
    display: flex;
    flex-flow: row;
    
}

.trainer .box-container .box:hover .share{
 left:0;
  
}

.trainer .box-container .box .share a{
    height:4rem;
    width:4.5rem;
    line-height: 4rem;
    color:#333;
    font-size: 2rem;
    background:#fff;
    margin:1rem;
    padding:0rem;
}

.trainer .box-container .box .share a:hover{
    background:var(--orange);
    color:#fff;
  
}
.trainer .box-container .box .info ul .name{
    color:red;
    text-align:center;
    font-size:3rem;
    
}



/* .box-container .box .info1:hover{
    color:green;
} */



    





@media (max-width:768px){

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

}

        </style>
    </head>
    <body>
    <section class="trainer" id="trainer">

    <h1 class="heading">our trainers</h1>

    <div class="box-container">
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

        <div class="box">
       
            <img src="<?php echo $rows['image'];?>  ">
         
            <div class="info">
              
        <ul>  
             
        <marquee> <li class="name"><?php echo $rows['name'];?></li> </marquee>
           <li><i class="fas fa-check"></i><?php echo 'age'.'  -  '.$rows['age'];?></li>
          <li><i class="fas fa-check"></i><?php echo 'gender'.'  -  '.$rows['gender'];?></li>
          <li><i class="fas fa-check"></i><?php echo 'workexp'.'  -  '.$rows['workexp'];?></li>
          <li><i class="fas fa-check"></i> <?php echo 'timings'.'  -  '.$rows['timings'];?></li>
          <li><i class="fas fa-check"></i> <?php echo 'achievements'.'  -  '.$rows['achievements'];?></li>
          <li><i class="fas fa-check"></i> <?php echo 'qualification'.'  -  '.$rows['qualification'];?></li>
        </ul>
              
               
                
             
            
                
                
            </div>
            <div> </div>
           

            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/andreideiu_/" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
          
        </div>
        
        <?php
        }
     ?>




            
      <!-- 
        <div class="box">
            <img src="images/jo linder.jpg" alt="">
            <div class="info">
                <h3>jo linder</h3>
                <p>Our best trainer</p>
            </div>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/sergi constance.jpg" alt="">
            <div class="info">
                <h3>sergi constance</h3>
                <p>Our best trainer</p>
            </div>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/guru mann.jpg" alt="">
            <div class="info">
                <h3>guru mann</h3>
                <p>Our best trainer</p>
            </div>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        -->

    </div>

    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="index.js"></script>
    </body>
    </html>