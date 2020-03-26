<?php include("inc/header.php"); 
if(!isset($_SESSION["Email"])){
    header("location:index.php");

}

?>
<?php 
$select_user_data="SELECT * FROM patient_register WHERE id='".$_SESSION["UserId"]."'";
$res = mysqli_query($conn,$select_user_data);
$row = mysqli_fetch_assoc($res);



?>

<?php include("inc/navbar.php"); ?>
<h4>WELCOME,<?php echo $_SESSION["Email"]; ?></h4>

<div class="col-md-12">
<div class="jumbotron">
<h2 class="text-success text-center">Profile Details</h2><hr>
<?php 
//print_r($row);
?>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $row['firstname']; ?></td>
        <td><?php echo $row['lastname']; ?></td>
        <td><?php echo $row['user_email']; ?></td>
      </tr>
      
    </tbody>
  </table>
</div>

</div>

<?php include("inc/footer.php"); ?>