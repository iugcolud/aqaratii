<?php 
session_start();

include("navbar.php");

 ?>
 <style>
body, html {
  height: 95%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("images/f.JPG?5");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: bottom;
  background-repeat: no-repeat;
  background-size: cover;
}

.nav-link {
  color: white; 
  /*font-family:Arial, Helvetica, sans-serif;*/


}






.fa {
  padding: 20px;
  font-size: 30px;
  text-align: left;
  text-decoration: none;
  margin: 5px 2px;
}
.fa:hover {
    opacity: 0.7;
}
.fa-facebook {
  
   background: #3B5998; 
  color: white;
}
.fa-linkedin {
 
  background: #007bb5;
  color: white;
}
.active-cyan-3 input[type=text] {
  border: 1px solid #9BC50A;
  box-shadow: 0 0 0 1px #9BC50A;
}
</style>

<div class="bg"></div><br>
<div class="container active-cyan-4 mb-4 inline">
	<form method="POST" action="search-property.php">
  <input class="form-control" type="text" placeholder="Enter name or location to search property." name="search_property" aria-label="Search">
  </form>
</div>
<br><br>
<?php 

include("property-list.php");

 ?>
 <br><br>