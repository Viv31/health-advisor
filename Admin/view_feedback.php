<?php include("inc/session.php"); ?>
<?php include("inc/header.php"); ?>
<?php include("inc/navbar.php"); ?>

<div class="col-md-12">
<div class="jumbotron">
<h2 class="text-success text-center">All Feedback</h2><hr>

<table class="table table-hover">
    <thead>
      <tr>
        <th>Sno<?php  $sno=1;?></th>
        <th>Username</th>
        <th>Feedback</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
$select_user_data="SELECT * FROM feedback";
$res = mysqli_query($conn,$select_user_data);
if(mysqli_num_rows($res)>0){
	while($rs = mysqli_fetch_assoc($res)){ ?>

<tr>
        <td><?php echo $sno++; ?></td>
       
        <td><?php echo $rs['user_email']; ?></td>
         <td><?php echo $rs['feedback']; ?></td>
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