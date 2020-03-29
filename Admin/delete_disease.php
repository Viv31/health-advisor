<?php
include('conn/connection.php');
include_once('inc/header.php');

$Disease_ID = $_GET['id'];
//echo $cat_id;
?>
<?php
$delete_id="DELETE FROM disease_table WHERE id ='".$Disease_ID."'";
$res=mysqli_query($conn,$delete_id);
if($res!=true){
	die('unable to delete').mysqli_error();
}
else{
	header("location:add_disease.php?status=delete");
}

?>