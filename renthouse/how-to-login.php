<?php 
session_start();
if(isset($_SESSION["email"])){
  header("location:index.php");
}
include("navbar.php");

 ?>


    <section class="container-fluid sign-in-form-section">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 sign-up" style="text-align: center;">
                    <h3 style="color: #426942;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;font-size:30px;font-weight:bold;">How do you want to Login?</h3><hr>
                    <p style="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;color: #426942;font-size:18px;font-weight:bold;">If you want to sign in as a customer click on customer login button otherwise click on owner login button.</p><br><br>
                    <button type="submit" class="btn btn-info"  onclick="window.location.href='tenant-login.php'" style="width:200px;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;width:200px; background-color:#426942;font-weight:bold;font-size:20px;">Customer Login</button>
                    <button type="submit" class="btn btn-info"  onclick="window.location.href='owner-login.php'" style="width:200px;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;width:200px; background-color:#426942;font-weight:bold;font-size:20px;">Owner Login</button>
                    <button type="submit" class="btn btn-info"  onclick="window.location.href='admin-login.php'" style="width:200px;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;width:200px; background-color:#426942;font-weight:bold;font-size:20px;">Admin Login</button>
                </div>
                
            </div>
        </div>
    </section>


    <style>
body {
  background-image: url(images/dfd.png?);
  
  background-repeat: no-repeat;
  background-size: cover;
  height: 500px; /* You must set a specified height */
  /*background-position: 12cm 6cm  ; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: 55%;
  background-position: 9cm 3cm  ;

}
</style>