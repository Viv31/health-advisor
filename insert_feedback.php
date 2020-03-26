<?php 
session_start();
include_once("conn/connection.php");

$feedback = $_POST["feedback"];

$user_email = $_SESSION["Email"];

 

if(isset($_POST["insert"])){

  /*  echo"Fname".$firstname;
echo"lastname".$lastname;
echo"user_email".$user_email;
echo"user_password:".$user_password;
*/

    //echo "Testing";

    $insert_data="INSERT INTO feedback(user_email,feedback) 
    VALUES('".$user_email."','".$feedback."')";
$res = mysqli_query($conn,$insert_data);
if($res){
$_SESSION['insert_success']="Data inserted Successfully";

header("location:feedback.php");
//echo"Inserted";
}
else{
    echo"Not Inserted";
}

}




?>