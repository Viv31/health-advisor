<?php include("inc/header.php"); 
if(!isset($_SESSION["Email"])){
    header("location:index.php");

}

?>
<?php include("inc/navbar.php"); ?>
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
  <h2>Add Feedback</h2>
  <hr>
  <form action="insert_feedback.php" method="POST" >
  <div class="form-group">
    <label >Feedback :</label>
    <textarea name="feedback" class="form-control" placeholder="Enter Feedback" rows="10" cols="10" required="Please fill out this section"></textarea>
  </div>
  
<button type="submit" class="btn btn-primary" name="insert">Submit</button>
</form>

</div>
<div class="col-md-3"></div>

  </div> 
  </div><!--Column close 12-->

<?php include("inc/footer.php"); ?>
