<?php 
session_start();
if(isset($_SESSION["email"])){
  header("location:admin/admin-index.php");
}

include("navbar.php");
include("admin-engine.php");

 ?>

<div class="container"  style="color: #426942; width: 40%;height: 50px;background: transparent;border: none;outline: none; font-size: 17px; padding:0 35px 0 5px; text-align: left;">
  <h3 style="font-weight: bold; text-align: center;color: #426942;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">Admin Login</h3><hr><br><br>
  <form method="POST">
    <div class="form-group" style="color: #426942;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="form-group" style="color: #426942;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
      <label for="pwd">Password</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password" required>
    </div>
   
    <center><input type="submit" id="submit" name="admin_login" class="btn btn-primary btn-block" value="Login"style="background-color:#9dc99d;font-size:20px;"></center>
  </form>
</div>
<style>
body {
  background-image: url(images/handhome.jpg?);
  
  background-repeat: no-repeat;
  background-size: contain,cover;
  height: 500px; /* You must set a specified height */
  background-position: 22cm 6cm  ; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  
   
}
</style>