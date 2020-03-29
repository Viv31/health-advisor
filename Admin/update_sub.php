<?php
include('conn/connection.php');
include_once('inc/header.php');

if(isset($_POST['update'])){
	$disease_name=$_POST['disease_name'];
	$Disease_ID = $_POST['id'];
	//echo $disease_name;
	//echo $Disease_ID;

	if(empty($disease_name)){
	
	echo "category name can not be blank ";
}
else{

	$check_exist_disease = "SELECT * FROM disease_table where id!= '".$Disease_ID."'";
	$result = mysqli_query($conn,$check_exist_disease);
	if(mysqli_num_rows($result)>0){

	
	header("location:add_disease.php?status=Chking");
}
else{

	$update_disease = "UPDATE disease_table SET disease_name='".$disease_name."' WHERE id='".$Disease_ID."'";
$res = mysqli_query($conn,$update_disease);
if($res!=true){

	die('failed to update ').mysqli_error();
}
else{
	header("location:add_disease.php?state=update");
}
}
}

}

?>