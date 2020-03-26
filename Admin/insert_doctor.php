<?php include("inc/session.php"); ?>
<?php 
include_once("conn/connection.php");

$name = $_POST["name"];
$address = $_POST["address"];
$mobile = $_POST["mobile"];
$disease_name = $_POST["disease_name"];


if(isset($_POST["insert"])){

   echo"name".$name;

    //echo "Testing";

    $insert_data="INSERT INTO doctor_list(name,address,mobile,disease_name) 
    VALUES(
        '".$name."',
        '".$address."',
        '".$mobile."',
        '".$disease_name."')";
$res = mysqli_query($conn,$insert_data);
if($res){
$_SESSION['insert_success']="Doctor inserted Successfully";

header("location:add_doctor.php");
//echo"Inserted";
}
else{
    echo"Not Inserted";
}

}
?>