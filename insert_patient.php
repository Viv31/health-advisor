<?php 
session_start();
include_once("conn/connection.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$user_email = $_POST["user_email"];
$user_password  = md5($_POST["user_password"]);
 

if(isset($_POST["insert"])){

  /*  echo"Fname".$firstname;
echo"lastname".$lastname;
echo"user_email".$user_email;
echo"user_password:".$user_password;
*/

    //echo "Testing";

    $insert_data="INSERT INTO patient_register(firstname,lastname,user_email,user_password) 
    VALUES(
        '".$firstname."',
     '".$lastname."',
     '".$user_email."',
    '".$user_password."' 
)";
$res = mysqli_query($conn,$insert_data);
if($res){
$_SESSION['insert_success']="Data inserted Successfully";

header("location:index.php");
//echo"Inserted";
}
else{
    echo"Not Inserted";
}

}




?>