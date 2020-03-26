<?php include("inc/header.php"); ?>
<div class="col-md-12">
<div class="col-md-3"></div>
<div class="col-md-6">
  <div class="jumbotron">

<br>
  <h2>Registration Form</h2>
  <hr>
  <form action="insert_patient.php" method="POST" >
  <div class="form-group">
    <label >First Name:</label>
    <input type="text" class="form-control"  name="firstname"  id="fname" placeholder="Enter first name" required>
  </div>
  <div class="form-group">
    <label >Last Name:</label>
    <input type="text" class="form-control"  name="lastname"  id="lname" placeholder="Enter last name" required>
  </div>
  <div class="form-group">
    <label >Email:</label>
    <input type="email" class="form-control"  name="user_email" id="email" placeholder="Enter Email" required>
  </div>
  

  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="user_password" id="pwd" required>
  </div>
  
  <button type="submit" class="btn btn-default" name="insert">Submit</button>
</form>
<span><a href="index.php">Login </a></span>
</div>
<div class="col-md-3"></div>

  </div> 
  </div><!--Column close 12-->



<?php include("inc/footer.php"); ?>