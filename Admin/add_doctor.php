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
  <h2>Add Doctor</h2>
  <hr>
  <form action="insert_doctor.php" method="POST" >
  <div class="form-group">
    <label >Doctor Name:</label>
    <input type="text" class="form-control"  name="name"  id="fname" placeholder="Enter first name" required>
  </div>
  <div class="form-group">
    <label >Address:</label>
    <textarea class="form-control"  name="address"  id="address" placeholder="Enter Address" required rows="10" cols="10"></textarea>
  </div>
  <div class="form-group">
    <label >Mobile:</label>
    <input type="number" class="form-control"  name="mobile" id="mobile" placeholder="Enter Mobile Number"  minlength="10" maxlength="10" required >
  </div>
  

  <div class="form-group">
    <label for="pwd">Disease Name:</label>
    
    <select class="form-control" id="" name="disease_name" required>
	 		
	<option value="">select Disease</option>
    <?php  
    $select_disease="SELECT * FROM disease_table";
    $res = mysqli_query($conn,$select_disease);
    if(mysqli_num_rows($res)>0){
        while($rs = mysqli_fetch_assoc($res)){
            ?>
                <option value ="<?php echo $rs['disease_name'];?>"><?php echo $rs["disease_name"];?></option>
        
        <?php
        }
        

    }
    
    ?>
</select>
  </div>
  
  <button type="submit" class="btn btn-primary" name="insert">Submit</button>
</form>

</div>
<div class="col-md-3"></div>

  </div> 
  </div><!--Column close 12-->

   <div class="col-md-12">
<div class="jumbotron">
<h2 class="text-success text-center">All Doctors</h2><hr>

<table class="table table-hover table-responsive">
    <thead>
      <tr>
        <th>Sno<?php  $sno=1;?></th>
        <th>Doctor's Name</th>
         <th> Address</th>
          <th>Mobile</th>
           <th>Disease</th>
           <th colspan="2">Action</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
$select_user_data="SELECT * FROM doctor_list";
$res = mysqli_query($conn,$select_user_data);
if(mysqli_num_rows($res)>0){
  while($rs = mysqli_fetch_assoc($res)){ ?>

<tr>
        <td><?php echo $sno++; ?></td>
       
        <td><?php echo $rs['name']; ?></td>
        <td><?php echo $rs['address']; ?></td>
        <td><?php echo $rs['mobile']; ?></td>
        <td><?php echo $rs['disease_name']; ?></td>
         <?php  $doctor_id = $rs['id']; ?>
         <td><?php echo "<a href='update_doctor.php?id=$doctor_id'><button class='btn btn-warning'>Edit</button></a>"?></td>
         <td><?php echo "<a href='delete_doctor.php?id=$doctor_id'><button class='btn btn-danger' onclick=' return del();'>Delete</button></a>"?></td>
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