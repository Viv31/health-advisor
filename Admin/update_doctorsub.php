<?php
include('conn/connection.php');
include_once('inc/header.php');

if(isset($_POST['update'])){
	
	$name=$_POST['name'];
	$address=$_POST['address'];
	$mobile=$_POST['mobile'];
	$disease_name=$_POST['disease_name'];

	$Doctor_ID = $_POST['id'];
	//echo $disease_name;
	//echo $Disease_ID;

	if(empty($disease_name)){
	
	echo "category name can not be blank ";
}
else{

	$check_exist_doctor = "SELECT * FROM doctor_list where id!= '".$Doctor_ID."'";
	$result = mysqli_query($conn,$check_exist_doctor);
	if(mysqli_num_rows($result)>0){

	
	header("location:add_doctor.php?status=Chking");
}
else{

	$update_disease = "UPDATE doctor_list SET name='".$name."',address='".$address."',mobile='".$mobile."',disease_name='".$disease_name."' WHERE id='".$Doctor_ID."'";
$res = mysqli_query($conn,$update_disease);
if($res!=true){

	die('failed to update ').mysqli_error();
}
else{
	header("location:add_doctor.php?state=update");
}
}
}

}

?>