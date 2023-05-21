<?php 
session_start();

include("navbar.php");

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Team Section Project</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./Font-Awesome/all.min.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--<title> An About Us Page | CoderGirl </title>-->
  <!---Custom CSS File!-->
    <link rel="stylesheet" href="style.css">
    



<body>
<section class="about-us">
<div class="text-block">
  
        <h1>About Us</h1>
        </div>      
        </div>
     
   
  </section>
    <div class="main">
        <div class="profile-card">
            <div class="img">
                <img src="images/smilegirl.jpg">
            </div>
            <div class="caption">
              <h3>shaimaa mughari </h3>
              <p>Full Stact Developer</p>
              <h4>shaimaa mughari @gmail.com </h4>
              <h4>phone: 0567100733 </h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        
            <div class="profile-card">
                <div class="img">
                    <img src="images/greengirl.jpg">
                </div>
                <div class="caption">
                    <h3>Hanan Alashqar</h3>
                    <p>Back End Developer</p>
                    <h4>hanan.alashqar@gmail.com </h4>
                    <h4>phone: 0592483641 </h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        <div class="profile-card">
            <div class="img">
                <img src="images/bluegirl.jpg">
            </div>
            <div class="caption">
                <h3>Nour Doghmash</h3>
                <p>Full stack Developer</p>
                <h4>nour.th.d@gmail.com </h4>
                <h4>phone: 0599592413 </h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        
        <div class="profile-card">
            <div class="img">
                <img src="images/girl5.jpg?55">
            </div>
            <div class="caption">
              <h3>Tasneem Muhaisen</h3>
                <p>Back End Developer</p>
                <h4>tastas2001king@gmail.com </h4>
                <h4>phone: 059775814 </h4>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
  

    <script src="./Font-Awesome/all.min.js"></script>
</body>

</html>

   
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 0;
     

      
    }

    .about-us {
      
      display: flex;
      justify-content: center;
      align-items: center;
      height: 66vh;
      color:#426942;
      background-image: url("images/chip.JPG?5");
      background-position: bottom;
  background-repeat: no-repeat;
  background-size: cover;
 
    }
   
    .about {
      display: flex;
      align-items: center;
      max-width: 100%;
      padding: 20px;
      background:white;

      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.16);
      
    }

    /*.pic {
      width: 300px;
      height: auto;
      margin-right: 20px;
    }*/

    .text {
      flex: 1;
    }

    .text h2 {
      font-size: 40px;
      font-weight: ;
      margin-bottom: 10px;
      font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
      color:#426942;
      
    }
    
   
    .text h5 {
      font-size: 18px;
      font-weight: 500;
      margin-bottom: 20px;
      color:white;
      font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
     font-size:25px;
    }

    span {
      color:white;
    }

    .text p {
      font-size: 16px;
      line-height: 24px;
      letter-spacing: 1px;
      color:#234923;
      font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
      font-weight:bold;
      font-size:20px;
    }
    h1{
      font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
      font-size: 40px;
      font-weight:bold ;
      color: #234923;
      opacity: 1;
    }
    .text-block {
      
      
      text-align:center;
          height: 100px;
          width: 200px;
      position: absolute;
      top: 40%;
     left: 20%;
    transform: translate(-50%, -50%); }

    .data {
      margin-top: 30px;
    }

    .hire {
      font-size: 16px;
      background: #4070f4;
      color: #fff;
      text-decoration: none;
      border: none;
      padding: 8px 20px;
      border-radius: 6px;
      transition: 0.3s;
    }

    .hire:hover {
      background: #000;
      border: 1px solid #4070f4;
    }
  </style>
</head>
<body>
  
  <section class="about-us">
        <div class="about">
           <div class="text">
        <h2>About Us</h2>
        <h5>About my property</h5>
        <p>Aqarati provides up-to-date and reliable information that makes finding the property of your dreams easy and fast. Provides information on residential, commercial, and rental properties throughout Palestine first.

If you have just started searching or are ready to make a purchase, Aqari is updated daily to ensure that you have access to the latest and most accurate real estate listings. There are features such as providing more than 90% of the areas in Palestine, social participation, and the ability to communicate with local brokers to help you find the property you are looking for, linking between the buyer and seller, and establishing transparent and clear communication between them to reach the best deal between the two parties, which makes the process The whole thing is frictionless, transparent and as financially rewarding as possible.
        </p>
        <div class="data">
          <h5>Real Estate Team</h5>
          <p>Our goal is to blend the best of real estate knowledge and technology to develop outstanding solutions and 
            services for our clients. Aqary is owned and implemented by Perfecto Software Solutions.
          </p>       
        </div>
      </div>
    </div>
  </section>
  
</body>
</html>



