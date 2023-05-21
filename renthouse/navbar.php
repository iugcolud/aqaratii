<!DOCTYPE html>
<html lang="en">
<head>
  <title>RentHouse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<nav class="navbar navbar-expand-sm navbar-light justify-content-between" style="background-color:#578f6e ;">
  <div class="container-fluid">
  <a class="navbar-header" href="index.php">
    <img src="images/logo.png?5395" alt="logo" style=" height: 50px;">
  </a>
  
  <!-- Links -->
  <ul class="nav navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php"style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;color: white;font-size:19px;font-weight:bold;">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about-us.php"style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;color: white;font-size:19px;font-weight:bold;">About Us</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="contact-us.php" style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;color: white; font-size:19px; font-weight:bold;">Contact Us</a>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
      <?php 
      
if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){
?>
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;font-size:17px;font-weight:bold;color:white;"><span class="glyphicon glyphicon-user"></span> My Profile
        <span class="caret"></span></a>
        <ul class="dropdown-menu" style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
          <li><a href="profile.php"  style="color:#426942; font-size:14px;font-weight:bold;">Profile</a></li>
          <li><a href="logout.php"  style="color:#426942; font-size:14px;font-weight:bold;" >Logout</a></li>
        </ul>
      </li>


<?php
  
}

else {?>
      <li><a href="how-to-register.php"   style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;font-size:17px;font-weight:bold;color:white;" ><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li><a href="how-to-login.php"  style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;font-size:17px;font-weight:bold;color:white;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <?php } ?>
    </ul>
  </div>
</nav>

</body>
</html>
