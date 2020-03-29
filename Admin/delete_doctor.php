<?php
include('conn/connection.php');
include_once('inc/header.php');

$doctor_id = $_GET['id'];
//echo $cat_id;
?>
<?php
$delete_id="DELETE FROM doctor_list WHERE id ='".$doctor_id."'";
$res=mysqli_query($conn,$delete_id);
if($res!=true){
	die('unable to delete').mysqli_error();
}
else{
	header("location:add_doctor.php?status=delete");
}

?>