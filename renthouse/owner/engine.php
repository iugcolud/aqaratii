<?php 
$property_id='';
$country='';
$province='';
$zone='';
$district='';
$city='';
$vdc_municipality='';
$ward_no='';
$tole='';
$contact_no='';
$property_type='';
$estimated_price='';
$total_rooms='';
$bedroom='';
$living_room='';
$kitchen='';
$bathroom='';
$description='';
//$latitude='';
//$longitude='';
$booked='';
$owner_id='';



$db = new mysqli('localhost','root','','renthouse');

if($db->connect_error){
	echo "Error connecting database";
}

if(isset($_POST['add_property'])){
	add_property();
}

if(isset($_POST['owner_update'])){
	owner_update();
}


function add_property(){
    	{
$id_photo='owner-photo/'.$_FILES['p_photo']['name'];

// echo $_FILES['image']['name'].'<br>';

//if(!empty($_FILES['p_photo'])){
    $path = "product-photo/";
    $path=$path. basename($_FILES['p_photo']['name']);
        if(move_uploaded_file($_FILES['p_photo']['tmp_name'], $path))
        {
            echo"The file ". basename($_FILES['p_photo']['name']). " has been uploaded";
        }

        else{
            echo "There was an error uploading the file, please try again!";
        }
//}

	}

	global $property_id,$country,$province,$zone,$district,$city,$vdc_municipality,$ward_no,$tole,$contact_no,$property_type,$estimated_price,$total_rooms,$bedroom,$living_room,$kitchen,$bathroom,$description,$path,$p_photo,$property_photo_id,$owner_id,$p_photo,$booked,$db;



	
	$country=$_POST['country'];
	$province=$_POST['province'];
	$zone=$_POST['zone'];
	$district=$_POST['district'];
	$city=$_POST['city'];
	$vdc_municipality=$_POST['vdc_municipality'];
	$ward_no=$_POST['ward_no'];
	$tole=$_POST['tole'];
	$contact_no=$_POST['contact_no'];
	$property_type=$_POST['property_type'];
	$estimated_price=$_POST['estimated_price'];
	$total_rooms=$_POST['total_rooms'];
	$bedroom=$_POST['bedroom'];
	$living_room=$_POST['living_room'];
	$kitchen=$_POST['kitchen'];
	$bathroom=$_POST['bathroom'];
	$description=$_POST['description'];
	$p_photo=$_POST['p_photo'];
//   	$longitude=validate($_POST['longitude']);
   	$booked='No';
   	$u_email=$_SESSION['email'];
        $sql1="SELECT * from owner where email='$u_email'";
        $result1=mysqli_query($db,$sql1);

        if(mysqli_num_rows($result1)>0)
      {
          while($rowss=mysqli_fetch_assoc($result1)){
            $owner_id=$rowss['owner_id'];

   	$sql = "INSERT INTO add_property(country,province,zone,district,city,vdc_municipality,ward_no,tole,contact_no,property_type,estimated_price,total_rooms,bedroom,living_room,kitchen,bathroom,description,owner_id,p_photo) VALUES('$country','$province','$zone','$district','$city','$vdc_municipality','$ward_no','$tole','$contact_no','$property_type','$estimated_price','$total_rooms','$bedroom','$living_room','$kitchen','$bathroom','$description','$owner_id','$p_photo')";
		$query=mysqli_query($db,$sql);

//		$property_id = mysqli_insert_id($db);

              
              
//		$countfiles = count($_FILES['p_photo']['name']);
	
//	for($i=0;$i<$countfiles;$i++){
//	$paths = $_FILES['p_photo']['tmp_name'];
//		  if($paths!=" ")
//			{
//		    	$path="product-photo/" . $_FILES['p_photo']['name'];
////				if(move_uploaded_file($paths, $path)) {
//		        $sql2 = "INSERT INTO property_photo(p_photo,property_id) VALUES('$path','$property_id')";
//				$query=mysqli_query($db,$sql2);

//			}
//          }
 
// }
		if(!empty($query)){
			
?>

<style>
.alert {
  padding: 20px;
  background-color: #DC143C;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<script>
	window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>
<div class="container">
<div class="alert" role='alert'>
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <center><strong>Your Product has been uploaded.</strong></center>
</div></div>


<?php
		}
		else{
			
            echo("Error description: " .  mysqli_error($db));
            
		}

}
}}

function owner_update(){
	global $owner_id,$full_name,$email,$password,$phone_no,$address,$id_type,$id_photo,$errors,$db;
	$owner_id=$_POST['owner_id'];
	$full_name=$_POST['full_name'];
	$email=$_POST['email'];
	$phone_no=$_POST['phone_no'];
	$address=$_POST['address'];
	$id_type=$_POST['id_type'];
	$password = md5($password); // Encrypt password
		$sql = "UPDATE owner SET full_name='$full_name',email='$email',phone_no='$phone_no',address='$address',id_type='$id_type' WHERE owner_id='$owner_id'";
		$query=mysqli_query($db,$sql);
		if(!empty($query)){
			?>

<style>
.alert {
  padding: 20px;
  background-color: #DC143C;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<script>
	window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>
<div class="container">
<div class="alert" role='alert'>
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <center><strong>Your Information has been updated.</strong></center>
</div></div>


<?php
	}
}

//
//function validate($data){
//	$data = trim($data);
//	$data = stripcslashes($data);
//	$data = htmlspecialchars($data);
//	return $data;
//}




 ?>