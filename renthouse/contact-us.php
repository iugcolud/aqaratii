<?php
if(isset($_POST['submit'])){
    $to = "";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = "Contact Form Submission";
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
}
include("navbar.php");
?>



<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color:  #426942;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
 /* border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 50%;*/
  position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}


.container:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: url(images/contactus.jpg?); no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
}
.contact-box{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left{
	background: url(images/contactus.jpg?);
   no-repeat center;
	background-size: cover;
	height: 58%;
}

.right{
	padding: 25px 40px;
  text-align:left;
  font-weight:bold;
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  color: #426942;
  
}
h3{
  
  font-weight:bold;
  font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
  color: #426942;
  font-size:30px;
}

</style>
</head>
<body>
  
<center>
<h3>Contact Form</h3>

<div class="container">
 <div class="contact-box">
 <div class="left"></div>
 <div class="right">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="lname">Email Address</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" placeholder="Your phone..">

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Send">
  </form>
  </div>
  </div>
</div><center>

</body>
</html>
<style>
body {
  background-image: url(images/k.jpeg?);
  
  background-repeat: no-repeat;
  background-size: cover;
  height: 500px; /* You must set a specified height */
  /*background-position: 12cm 6cm  ; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
 /* background-size: 55%;
  background-position: 9cm 3cm  ;*/

}






</style>