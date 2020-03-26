<?php 
session_start();
include_once("conn/connection.php");

$user_email = $_POST["user_email"];
$user_password = md5($_POST["user_password"]);

if(isset($_POST["login"])){
    //echo"login click";


/*echo $user_email;
echo"<br>";
echo $user_password;
*/

 $login_chek = "SELECT id,user_email,user_password FROM patient_register WHERE 
user_email = '$user_email' AND user_password = '$user_password'";
$res = mysqli_query($conn,$login_chek);

$row = mysqli_fetch_assoc($res);
/*print_r($row);
die;
*/

$useremail = $row['user_email'];
$id = $row['id'];



if(mysqli_num_rows($res)>0){
    $_SESSION["UserId"]=$id;
    $_SESSION["Email"]=$useremail;

header("location:dashboard.php");

}
else{
    echo"error";
}


}

?>