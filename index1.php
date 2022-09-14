<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
    <title>Fitness Website</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link href="index1.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>

    <!-- header section starts  -->
    <!-- <img src="./images/dumbell-3435964_1920.jpg" alt=""> -->
    <header>

        <a href="#" class="logo"><span>BURN</span>FIT</a>

        <div id="menu" class="fas fa-bars"></div>

        <nav class="navbar">
            <ul>

                <li><a  href="http://localhost/upload_image/index1.php">home</a></li>
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

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <h1>Excuses<br>Don't Kill The Fat<br> Exercise Do</h1>


        <a href="http://localhost/upload_image/signup.html"><button class="btn">get started</button></a>

    </section>

    <!-- home section ends -->

    <!-- about section start  -->

    <section class="about" id="about">

        <div class="row">

            <div class="image">
                <img src="./images/about.jpg" alt="">
            </div>

            <div class="content">
                <h3>a word about us</h3>
                <p>we work towards broad goals of overall health and well-being, rather than narrow goals of sport competition, larger muscles or concerns over appearance. A regular moderate workout regimen and healthy diet can improve general appearance markers of good health such as muscle tone, healthy skin, hair and nails, while preventing age or lifestyle-related reductions in health and the series of heart and organ failures that accompany inactivity and poor diet.</p>

                <p>Diet itself helps to increase calorie burning by boosting metabolism, a process further enhanced while gaining more lean muscle. An aerobic exercise program can burn fat and increase the metabolic rate.</p>
</p>
                <a href="http://localhost/upload_image/aboutus.html"><button class="btn">Know more</button></a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- service section starts  -->

    <section class="service" id="service">

        <h1 class="heading">our services</h1>

        <div class="box-container">

            <div class="box">
                <img src="galleryimg4.jpg" alt="">
                <div class="info">
                    <h3>treadmill</h3>
                    <p>Treadmills provide a straightforward and efficient aerobic workout. For many, treadmills are a good choice to begin a new exercise routine.</p>
                    <!-- <a href="https://herculesfitness.co.in"><button class="btn">more</button></a> -->
                </div>
            </div>

            <div class="box">
                <img src="yoga.jpg" alt="">
                <div class="info">
                    <h3>yoga</h3>
                    <p>Yoga is an ancient practice that may have originated in India. It involves movement, meditation, and breathing techniques to promote mental and physical well-being.</p>
                    <!-- <a href="https://www.medicalnewstoday.com/articles/286745"><button class="btn">more</button></a> -->
                </div>
            </div>

            <div class="box">
                <img src="images/img3.jpg" alt="">
                <div class="info">
                    <h3>trainer</h3>
                    <p> we provide best Personal trainers possess the knowledge, skills and abilities necessary to design safe and effective fitness programs</p>
                    <!-- <a href="#"><button class="btn">more</button></a> -->
                </div>
            </div>

            <div class="box">
                <img src="equip.jpg" alt="">
                <div class="info">
                    <h3>equipments</h3>
                    <p>It is the most important part of any gym and we provide best and quality equipments for our customers.</p>
                    <!-- <a href="https://greatist.com/move/best-gym-machines"><button class="btn">more</button></a> -->
                </div>
            </div>

            <div class="box">
                <img src="box.jpg" alt="">
                <div class="info">
                    <h3>boxing</h3>
                    <p>boxing is the combat game. we train people with our best equipment and trainer for competition with precautions</p>
                    <!-- <a href="https://www.titleboxing.com/"><button class="btn">more</button></a> -->
                </div>
            </div>

            <div class="box">
                <img src="images/img6.jpg" alt="">
                <div class="info">
                    <h3>weight lifting</h3>
                    <p>weight lifting is very important part for building muscle.with the help of weight lifting our strength will also improve</p>
                    <!-- <a href="#"><button class="btn">more</button></a> -->
                </div>
            </div>

        </div>

    </section>

    <!-- service section ends -->
<!-- signup  -->
<section class="footer" id="invisible">
        <!-- created by <a href="#">samridh</a>  -->
        <h1 id="footer2"><span style="color:#aadb6a">SPECIAL</span> <br><i> OFFER</i></h1>
        <h3 id="footer1"><i>sign up now <br> start your fitness journey </i> </h3>
        <a href="http://localhost/upload_image/signup.html"><button  class="btn" id="btn1">sign up</button></a>
    </section>

    <!-- trainer section starts  -->

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

         

        </div>

    </section>

    <!-- trainer section ends -->

    <!-- plan section starts  -->

    <section class="plan" id="plan">

        <h1 class="heading">membership plan</h1>

        <div class="box-container" id="box-container">

            <div class="box">
                <h3 class="title">basic</h3>
                <h3 class="price">$10<span>/mo</span></h3>
                <h3 class="month">3 months</h3>
                <ul>
                    <li><i class="fas fa-check"></i>weight lifting</li>
                    <li><i class="fas fa-check"></i>cardio</li>
                    <li><i class="fas fa-check"></i>yoga</li>
                    <li><i class="fas fa-check"></i>training</li>
                    <li><i class="fas fa-check"></i>protein powder</li>
                </ul>
                <a href="http://localhost/upload_image/register.html"><button class="btn">Register Now</button></a>
            </div>

            <div class="box">
                <h3 class="title">standard</h3>
                <h3 class="price">$20<span>/mo</span></h3>
                <h3 class="month">6 months</h3>
                <ul>
                    <li><i class="fas fa-check"></i>weight lifting</li>
                    <li><i class="fas fa-check"></i>cardio</li>
                    <li><i class="fas fa-check"></i>yoga</li>
                    <li><i class="fas fa-check"></i>training</li>
                    <li><i class="fas fa-check"></i>protein powder</li>
                </ul>
                <a href="http://localhost/upload_image/register.html"><button class="btn">Register Now</button></a>
            </div>

            <div class="box">
                <h3 class="title">premium</h3>
                <h3 class="price">$30<span>/mo</span></h3>
                <h3 class="month">12 months</h3>
                <ul>
                    <li><i class="fas fa-check"></i>weight lifting</li>
                    <li><i class="fas fa-check"></i>cardio</li>
                    <li><i class="fas fa-check"></i>yoga</li>
                    <li><i class="fas fa-check"></i>training</li>
                    <li><i class="fas fa-check"></i>protein powder</li>
                </ul>
                <a href="http://localhost/upload_image/register.html"><button class="btn">Register Now</button></a>
            </div>

        </div>

    </section>

    <!-- plan section ends -->

    <!-- register section starts  -->

    <!-- <section class="register" id="register">

        <h1 class="heading">register now</h1>

        <form action="">

            <div class="inputBox">
                <input type="text" placeholder="first name">
                <input type="text" placeholder="last name">
            </div>

            <div class="inputBox">
                <input type="email" placeholder="your email">
                <input type="number" placeholder="your number">
            </div>

            <textarea name="" id="" cols="30" rows="10" placeholder="message"></textarea>

            <input type="submit" class="btn" value="register">

        </form>

    </section> -->

    <!-- register section ends -->

    <!-- footer section starts  -->

    <section class="footer">
        <!-- created by <a href="#">samridh</a>  -->
        <h3><i>Reach out to us anytime and we'll happily answer your questions.</i> </h3>
        <a href="http://localhost/upload_image/contactus.html"><button class="btn" id="btn">contact</button></a>
    </section>

    <!-- footer section ends -->


    <section class="footer1">
       <div class="con1">
        <h1><span> BURN</span>FIT GYM</h1> 
        <p>BurnFit Gym provides you the fitness solution <br>that's more personal, intelligent and encouraging<br> than ever before.</p> 
       </div>
       <div class="con2">
           <h1><span1>QUICK</span1> LINKS</h1>
           <li><a class="links" href="http://localhost/upload_image/mainindex.php">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#service">service
                      
                <li><a href="#trainer">trainer</a></li>
                <li><a href="http://localhost/upload_image/gallery.php#trainer">Gallery</a></li>
                <li><a href="#plan">plan</a></li>
                <li><a href="http://localhost/upload_image/contactus.html">contact Us</a></li>
                <li><a href="http://localhost/upload_image/register.html">register</a></li>
                <li><a href="http://localhost/upload_image/signup.html">Sign Up</a></li>
                <li><a href="http://localhost/upload_image/feedback.php">Feedback</a></li>
       </div>
       <div class="con3">
           <h1>FOLLOW US</h1>
           <div class="share1">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/andreideiu_/" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h2>For Personal Training<br><span> Email US</span></h2>
            <h4>burnfitgym@gmail.com</h4>
           
        
       </div>
       </section>
       
    </section>
        
<div class="div">
<p>© 2021 BurnFit Gym. All Rights Reserved<br>Designed by samridh sood</p>
</div>








    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- custom js file link  -->
    <script src="index.js"></script>


</body>

</html>