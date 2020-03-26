<?php include("inc/header.php"); 
if(isset($_SESSION["Email"])){
  session_destroy();
    header("location:index.php");

}


?>
<div class="col-md-12">
<div class="col-md-3"></div>
<div class="col-md-6">

  <div class="jumbotron">
  <p>
  <?php 
  if(isset($_SESSION['insert_success'])){
    echo $_SESSION['insert_success'];

  }
  unset($_SESSION['insert_success']);
  
  
  ?>
  </p>
  
<br>
  <h2>Login Form</h2>
  <hr>
  <form action="login.php" method="POST" >
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="user_email" class="form-control" id="email" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="user_password" class="form-control" id="pwd" required>
  </div>
  
  <button type="submit" class="btn btn-default" name="login">Login</button>
</form>
<span><a href="register.php">Register here</a></span>
</div>
<div class="col-md-3"></div>

  </div> 
  </div><!--Column close 12-->
  <?php include("inc/footer.php"); ?>
  
