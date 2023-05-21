<!DOCTYPE html>
<html lang="en">
<head>
  <title>RentHouse</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<nav class="navbar navbar-expand-sm navbar-light justify-content-between" style="background-color:  #9dc99d;">
  <div class="container-fluid">
  <a class="navbar-header" href="index.php">
    <img src="../images/logo.png" alt="logo" style="height:50px;">
  </a>
  
  <!-- Links -->
  <ul class="nav navbar-nav">
    <li class="nav-item" style="font-weight: bold; text-align: center;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;font-size:19px;color: white;">
      <a class="nav-link" href="owner-index.php" style="font-weight: bold; text-align: center;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;font-size:19px;color: white;">Home</a>
    </li>
    <li class="nav-item" style="font-weight: bold; text-align: center;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;font-size:19px;color: white;">
      <a class="nav-link" href="#" style="font-weight: bold; text-align: center;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;font-size:19px;color: white;">About Us</a>
    </li>
    <li class="nav-item" >
      <a class="nav-link" href="#" style="font-weight: bold; text-align: center;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;font-size:19px;color: white;">Contact Us</a>
    </li>
  </ul>
  <ul class="nav navbar-nav navbar-right">
    <?php 
if(isset($_SESSION["email"]) && !empty($_SESSION['email'])){
  echo '<li><a href="../logout.php"  style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;font-size:17px;font-weight:bold;color:white;">Logout</a></li>';
}

else {?>
      <li><a href="../how-to-register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
      <li><a href="../how-to-login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    <?php } ?>
    </ul>
  </div>
</nav>

</body>
</html>
