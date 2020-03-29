<?php include("inc/session.php"); ?>
<?php include("inc/header.php"); ?>
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
  <h2>Add Disease</h2>
  <hr>
  <form action="insert_disease.php" method="POST" >
  <div class="form-group">
    <label >Disease Name:</label>
    <input type="text" class="form-control"  name="disease_name"  id="fname" placeholder="Enter first name" required>
  </div>
  <button type="submit" class="btn btn-primary" name="insert">Submit</button>
</form>

</div>
<div class="col-md-3"></div>

  </div> 
  </div><!--Column close 12-->
  <div class="col-md-12">
<div class="jumbotron">
<h2 class="text-success text-center">All Disease</h2><hr>

<table class="table table-hover table-responsive">
    <thead>
      <tr>
        <th>Sno<?php  $sno=1;?></th>
        <th>Disease Name</th>
         <th colspan="2">Action</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
$select_user_data="SELECT * FROM disease_table";
$res = mysqli_query($conn,$select_user_data);
if(mysqli_num_rows($res)>0){
  while($rs = mysqli_fetch_assoc($res)){ ?>

<tr>
        <td><?php echo $sno++; ?></td>
       
        <td><?php echo $rs['disease_name']; ?></td>
        <?php  $disease_id = $rs['id']; ?>
         <td><?php echo "<a href='update_disease.php?id=$disease_id'><button class='btn btn-warning'>Edit</button></a>"?></td>
         <td><?php echo "<a href='delete_disease.php?id=$disease_id'><button class='btn btn-danger' onclick=' return del();'>Delete</button></a>"?></td>
      </tr>

    <?php

  }

}

?>
      
      
    </tbody>
  </table>
</div>

</div>
<?php include("inc/footer.php"); ?>
<script>
  function del(){
   var y = confirm("Do you Really want to delete this!!!");
         if(y){
         return true;
       }
           else{
              return false;
           }
              
    }

</script>