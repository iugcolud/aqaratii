<?php 

session_start();
if(!isset($_SESSION["email"])){
  header("location:../index.php");
}

include("navbar.php");
include("engine.php");

 ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

 <div class="container-fluid">
 <ul class="nav nav-pills nav-justified" style=" font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;font-size:15px;font-weight:bold;">
    <li class="active" ><a data-toggle="" href="#home" style="color:white;background-color:#9dc99d ;">Profile</a></li>
    <li style="background-color: #9dc99d;"><a data-toggle="" href="add_property.php" style=color:white;>Add Property</a></li>
    <li style="background-color:#9dc99d ;"><a data-toggle="" href="view_property.php" style=color:white;>View Property</a></li>
    <li style="background-color:#9dc99d ;"><a data-toggle="" href="update_property.php" style=color:white;>Update Property</a></li>
  </ul>
     
    <div id="menu1" class="">
      <center><h3>Add Property</h3></center>
      <div class="container">

      
<div id="map_canvas"></div>
        <form method="POST" enctype="multipart/form-data" >
          <div class="row">
        <div class="col-sm-6">
          <div class="form-group">
              <label for="country">Country:</label>
              <select class="form-control" name="country" required="required">
                                <option value="">--Select Country--</option>
                                <option value="Nepal">Palestine</option>
              </select>
            </div>
            <div class="form-group">
              <label for="province">Province/State:</label>
              <select class="form-control" name="province" required="required">
                                <option value="">--Select Province/State--</option>
                                <option value="Province No. 1">Gaza Strip </option>
                                <option value="Province No. 2">West Bank</option>
                                
              </select>
            </div>
            <div class="form-group">
              <label for="zone">Zone:</label>
              <select class="form-control" name="zone" required="required">
                                <option value="">--Select Zone--</option>
                                <option value="Bagmati">Southern Gaza Strip</option>
                                <option value="Bheri">Northern Gaza Strip</option>
                                <option value="Dhawalagiri">east of the Gaza Strip</option>
                                <option value="Gandaki">western Gaza Strip</option>
                                <option value="Janakpur">central Gaza Strip</option>
                                <option value="Karnali">east of the West Bank</option>
                                <option value="Kosi">western West Bank</option>
                                <option value="Lumbini">northern West Bank</option>
                                <option value="Mahakali">south of the West Bank</option>
                               
                            </select>
            </div>
            <div class="form-group">
              <label for="district">District:</label>
              <select class="form-control" name="district" required="required">
                                %{--Mechi--}%
                                <option value="">--Select District--</option>
                                <option value="Taplejung">North Gaza</option>
                                <option value="Panchthar">Gaza City</option>
                                <option value="Ilam">Deir al-Balah</option>
                                <option value="Jhapa">Khan Yunis</option>
                                
                                %{--Koshi--}%
                                <option value="Morang">Hebron </option>
                                <option value="Sunsari">Bethlehem</option>
                                <option value="Dhankutta">Jericho</option>
                                <option value="Sankhuwasabha">Jenin</option>
                                <option value="Bhojpur">Tulkarm</option>
                                <option value="Terhathum">Salfit</option>
                                %{--Sagarmatha--}%
                             
                            </select>
            </div>
            <div class="form-group">
              <label for="city">City:</label>
              <input type="text" class="form-control" id="city" placeholder="Enter City" name="city">
            </div>
            <div class="form-group">
              <label for="vdc/municipality">Municipal:</label>
              <select class="form-control" name="vdc_municipality">
                <option value="">--Select VDC/Municipality--</option>
                <option value="VDC">Gaza municipality</option>
                <option value="Municipality">Bureij municipality</option>
                <option value="Municipality">Nuseirat  municipality</option>
                <option value="Municipality"> hebron municipality</option>

              </select>

            </div>
            <div class="form-group">
              <label for="ward_no">street NO.:</label>
              <input type="text" class="form-control" id="ward_no" placeholder="Enter Ward No." name="ward_no">
            </div>
            <div class="form-group">
              <label for="tole">Tole:</label>
              <input type="text" class="form-control" id="tole" placeholder="Enter Tole" name="tole">
            </div>
            <div class="form-group">
              <label for="contact_no">Contact No.:</label>
              <input type="text" class="form-control" id="contact_no" placeholder="Enter Contact No." name="contact_no">
            </div>
            <div class="form-group">
               <label for="property_type">Property Type:</label>
                <select class="form-control" name="property_type">
                      <option value="">--Select Property Type--</option>
                      <option value="">land</option>
                      <option value="">House for sale</option>
                      <option value="">House for rent</option>
                      <option value="">Villa for sale</option>
                      <option value="">Villa for rent</option>
                      <option value="">Restaurant for sale</option>
                      <option value="">Office for rent</option>
                      <option value="">Office for sale</option>
                      <option value="">Chalet for rent</option>
                      <option value="">chalet for sale</option>
                      <option value="">store</option>
                      <option value="Full House Rent">Full House Rent</option>
                      <option value="Flat Rent">Flat Rent</option>
                      <option value="Room Rent">Room Rent</option>






                </select>
            </div>                      
            <div class="form-group">
                <label for="estimated_price">Estimated Price:</label>
                <input type="estimated_price" class="form-control" id="estimated_price" placeholder="Enter Estimated Price" name="estimated_price">
            </div>
        </div>

        <div class="col-sm-6">
                  <div class="form-group">
                    <label for="total_rooms">Total No. of Rooms:</label>
                    <input type="number" class="form-control" id="total_rooms" placeholder="Enter Total No. of Rooms" name="total_rooms">
                  </div>
                  <div class="form-group">
                    <label for="bedroom">No. of Bedroom:</label>
                    <input type="number" class="form-control" id="bedroom" placeholder="Enter No. of Bedroom" name="bedroom">
                  </div>
                  <div class="form-group">
                    <label for="living_room">No. of Living Room:</label>
                    <input type="number" class="form-control" id="living_room" placeholder="Enter No. of Living Room" name="living_room">
                  </div>
                  <div class="form-group">
                    <label for="kitchen">No. of Kitchen:</label>
                    <input type="number" class="form-control" id="kitchen" placeholder="Enter No. of Kitchen" name="kitchen">
                  </div>
                  <div class="form-group">
                    <label for="bathroom">No. of Bathroom/Washroom:</label>
                    <input type="number" class="form-control" id="bathroom" placeholder="Enter No. of Bathroom/Washroom" name="bathroom">
                  </div>
                  <div class="form-group">
                    <label for="description">Full Description:</label>
                    <textarea type="comment" class="form-control" id="description" placeholder="Enter Property Description" name="description"></textarea>
                  </div>
                 
<!--
                  <table class="table" id="dynamic_field">  
                  <tr> 
                    <div class="form-group"> 
                    <label><b>Photos:</b></label>                    
                    <td><input type="file" name="p_photo[]" placeholder="Photos" class="form-control name_list" required accept="image/*" /></td> 
                    <td><button type="button" id="add" name="add" class="btn btn-success col-lg-12">Add More</button></td>  
                  </div>
                  </tr>  
                </table>
-->
            
            
             <div class="form-group" style="font-weight: bold;  color: #426942; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
      <label for="card_photo">Upload your Selected Card:</label>
      <input type="file" class="form-control" placeholder="Photos" name="p_photo" accept="image/*" onchange="preview_image(event)" required>
    </div>
            <div class="form-group" style="font-weight: bold;  color: #426942; font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;">
      <label>Your selected File:</label><br>
      <img src="" id="p_photo"/ height="200px" name="p_photo">
    </div>
                <input name="lat" type="text" id="lat" hidden>
                <input name="lng" type="text" id="lng" hidden>
                  <hr>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg col-lg-12" value="Add Property" name="add_property">
                  </div>
                </div>
              </div>
              </form>
              <br><br>

    </div>
    </div>
     
     </div>
</body>


 <script type='text/javascript'>
        function preview_image(event)
        {
            var reader = new FileReader();
            reader.onload = function()
            {
                var output = document.getElementById('p_photo');
                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
