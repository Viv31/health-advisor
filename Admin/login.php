<?php 
session_start();
include_once("conn/connection.php");

$username = $_POST["username"];
$user_pwd = md5($_POST["user_pwd"]);

if(isset($_POST["login"])){
    //echo"login click";


/*echo $user_email;
echo"<br>";
echo $user_password;
*/

 echo $login_chek = "SELECT id,username,user_pwd FROM admin WHERE 
username = '$username' AND user_pwd = '$user_pwd'"; 
$res = mysqli_query($conn,$login_chek);

$row = mysqli_fetch_assoc($res);
/*print_r($row);
die;
*/

$useremail = $row['username'];
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