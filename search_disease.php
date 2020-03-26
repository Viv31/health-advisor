<?php include("inc/header.php"); 
if(!isset($_SESSION["Email"])){
    header("location:index.php");

}


error_reporting(0);
?>
<?php include("inc/navbar.php"); ?>
<style>
#search_res,#result_msg{
    display:none;
}
</style>
<div class="col-md-12">
<div class="jumbotron">
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">

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
<br>
<input type="submit" name="submit" value="Search" class="btn btn-primary">
</form>
</div>
</div>
<div class="col-md-12">
<h5 id="result_msg"> Search Result  Related  <span style="color:orange;"> <?php echo $_POST["disease_name"]; ?></span> </h5>
<div class="jumbotron" id="search_res">
<table class="table table-hover table-responsive">
    <thead>
      <tr>
        <th>Sno<?php $i=1; ?></th>
        <th>Doctor name</th>
        <th>Mobile</th>
        <th>Address</th>
      </tr>
    </thead>
    <tbody>
<?php 

if(isset($_POST["submit"])){
    $disease_name=$_POST["disease_name"];
//echo $disease_name;
    //echo"Click";
    echo"<style>
    #search_res,#result_msg{
        display:block;
    }
    
    
    </style>";
    $select_doctor="SELECT * FROM doctor_list WHERE disease_name= '".$disease_name."' ";
    $result = mysqli_query($conn, $select_doctor); 
    if(mysqli_num_rows($result)>0){
        while($doc_data =mysqli_fetch_assoc($result) ){
            ?>
    
      <tr>
      <td><?php echo $i++; ?></td>
        <td><?php echo $doc_data["name"]; ?></td>
        <td><?php echo $doc_data["mobile"]; ?></td>
        <td><?php echo $doc_data["address"]; ?></td>
      </tr>
      
      
    



<?php
        }

    }
    

}

?>
</tbody>
  </table>

</div>
</div>

<?php include("inc/footer.php"); ?>