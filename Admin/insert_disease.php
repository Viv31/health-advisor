<?php include("inc/session.php"); ?>
<?php 
include_once("conn/connection.php");

$disease_name = $_POST["disease_name"];


if(isset($_POST["insert"])){

   echo"disease_name".$disease_name;

    //echo "Testing";

    $insert_data="INSERT INTO disease_table(disease_name) 
    VALUES(
        '".$disease_name."')";
$res = mysqli_query($conn,$insert_data);
if($res){
$_SESSION['insert_success']="Disease inserted Successfully";

header("location:add_disease.php");
//echo"Inserted";
}
else{
    echo"Not Inserted";
}

}




?>