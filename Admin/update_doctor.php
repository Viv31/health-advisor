<?php 
include_once('conn/connection.php');
include_once('inc/header.php');

$Doctor_ID = $_GET['id'];
//echo $Disease_ID;


?>
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="jumbotron">
		<?php
$get_disease = "SELECT * FROM doctor_list where id = '".$Doctor_ID."' ";
 $res = mysqli_query($conn,$get_disease);
 if(mysqli_num_rows($res) > 0)
                        {
                        	while($rs = mysqli_fetch_assoc($res)){

                        	?>


		<form action="update_doctorsub.php" method="POST">
			<div class="form-group">
			<input type = "text" name = "name" class = "form-control" value="<?php echo $rs['name'];?>" >
			<input type="hidden" name="id" value="<?php echo $Doctor_ID; ?>">

		</div>

		<div class="form-group">
			<textarea name="address" rows="5" cols="30"> <?php echo $rs['address']; ?></textarea> 
			
		</div>

		<div class="form-group">
			<input type = "text" name = "mobile" class = "form-control" maxlength="10" value="<?php echo $rs['mobile'];?>">
		</div>

		<div class="form-group">
			<input type = "text" name = "disease_name" class = "form-control" value="<?php echo $rs['disease_name'];?>" >
		</div>

		<input type = "submit" name="update" class="btn btn-primary">
		</form>

		<?php
	}
	}
	?>
	</div>
	</div>
	<div class="col-md-4"></div>
</div>
<?php include("inc/footer.php"); ?>