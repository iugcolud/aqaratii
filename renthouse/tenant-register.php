<?php 

include("navbar.php");

 ?>

<div class="container" style="color: #426942; width: 40%;height: 50px;background: transparent;border: none;outline: none; font-size: 17px; padding:0 35px 0 5px; text-align: left;">
  <h3 style="font-weight: bold; text-align: center; color: #426942; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">Customer Register</h3><hr><br>
  <form method="POST" action="tenant-engine.php" enctype="multipart/form-data">
    <div class="form-group"  style="font-weight: bold;  color: #426942; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
      <label for="full_name">Full Name</label>
      <input type="text" class="form-control" id="full_name" placeholder="Enter Full Name" name="full_name" required>
    </div>
    <div class="form-group" style="font-weight: bold; color: #426942; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
    </div>
    <div class="form-group" style="font-weight: bold;  color: #426942; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
      <label for="password1">Password</label>
      <input type="password" class="form-control" id="password1" placeholder="Enter Password" name="password" required>
    </div>
    <div class="form-group"  style="font-weight: bold;  color: #426942; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
      <label for="password2">Confirm Password</label>
      <input type="password" class="form-control" id="password2" placeholder="Enter Password Again" required>
    </div>
    <div class="form-group"  style="font-weight: bold;  color: #426942; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
      <label for="phone_no">Phone No</label>
      <input type="text" class="form-control" id="phone_no" placeholder="Enter Phone No." name="phone_no" required>
    </div>
    <div class="form-group" style="font-weight: bold;  color: #426942; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
      <label for="address">Address</label>
      <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
    </div>
    <div class="form-group"  style="font-weight: bold;  color: #426942; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
      <label for="id_type">Type of ID</label>
      <select class="form-control" name="id_type" required>
        <option>Citizenship</option>
        <option>Driving Licence</option>
      </select>
    </div>
    <div class="form-group" style="font-weight: bold;  color: #426942; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
      <label for="card_photo">Upload your Selected Card</label>
      <input type="file" class="form-control" placeholder="Upload id photo" name="id_photo" accept="image/*" onchange="preview_image(event)" required>
    </div>
    <div class="form-group" style="font-weight: bold;  color: #426942; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
      <label>Your selected File</label><br>
      <img src="" id="output_image"/ height="200px" required>
    </div>
    <hr>
    <center><button id="submit" name="tenant_register" class="btn btn-primary btn-block" onclick="return Validate()" style="background-color:#426942;font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;font-weight:bold;font-size:20px;">Register</button></center><br>
    <div class="form-group text-right" >
      <label class="">Register as a <a href="owner-register.php" style= "color:red; ">Owner</a>?</label><br>
    </div><br><br>
  </form>
</div>

<script type='text/javascript'>
        function preview_image(event)
        {
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('output_image');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
    <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("password1").value;
        var confirmPassword = document.getElementById("password2").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
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
