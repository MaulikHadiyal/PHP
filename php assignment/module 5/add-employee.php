<?php 
require_once("navbar.php");
require_once("config.php");
// delete employee data 
if(isset($_GET["delid"]))
{
    $delid=$_GET["delid"];
    $delete="delete from tbl_addemployee where empid='$delid'";
    $exe=mysqli_query($con,$delete);
    if($exe)
    {
        echo "<script>
        alert('Your employee data successfuly deleted')
        window.location='add-employee.php';
        </script>";
    }
}

// edit data for update 
if(isset($_GET["edid"]))
{
    $edid=$_GET["edid"];
    $select="select * from tbl_addemployee where empid='$edid'";
    $exe=mysqli_query($con,$select);
    $fetch=mysqli_fetch_array($exe);

}

// update employee data
if(isset($_POST["upd-employee"]))
{
date_default_timezone_set("Asia/Calcutta");    
$edid=$_GET["edid"];
$fnm=$_POST["fnm"];
$lnm=$_POST["lnm"];
$em=$_POST["email"];
$phone=$_POST["phone"];
$add=$_POST["address"];
$reg_date=date("d/m/Y H:i:s a");
$upd="update tbl_addemployee set firstname='$fnm',lastname='$lnm',email='$em',phone='$phone',address='$add',registered_date='$reg_date' where empid='$edid'";
$exe=mysqli_query($con,$upd);
if($exe)
{
    echo "<script>
    alert('Your employee data Updated successfully')
    window.location='add-employee.php';
    </script>";
}
}

?>
<!-- content here -->
<div class="w-100 mx-auto mt-3 p-5 shadow">

<!-- add employee form -->
<div class="row">
<div class="col-md-4"> <img src="https://th.bing.com/th/id/OIP.vKZkWpM0c6N2oAmmBzup7gHaHa?rs=1&pid=ImgDetMain" class="img-fluid w-75">
</div>

<div class="col-md-8">
<?php 
if(!isset($_GET["edid"]))
{

?>

<h3 class="text-center">Add employee here</h3>
<hr class="border border-1 border-dark w-25 mx-auto" />
<form method="post" action="add-data.php">
<div class="row">    
<div class="form-group mt-2 col-md-6">
<input type="text" name="fnm" placeholder="Enter firstName *" class="form-control" required/>
</div>   

<div class="form-group mt-2 col-md-6">
<input type="text" name="lnm" placeholder="Enter lastName *" class="form-control" required />
</div>   
</div>

<div class="form-group mt-2">
<input type="text" name="email" placeholder="Enter email *" class="form-control" required />
</div>  


<div class="row">    
<div class="form-group mt-2 col-md-6">
<input type="password" name="password" placeholder="Enter Password *" class="form-control" required />
</div>   

<div class="form-group mt-2 col-md-6">
<input type="password" name="confirmed-password" placeholder="Enter Confirmed Password *" class="form-control" required />
</div>   
</div>

<div class="form-group mt-2">
<input type="text" name="phone" placeholder="Enter Phone *" class="form-control" required />
</div>  

<div class="form-group mt-2">
<textarea  name="address" placeholder="Enter address *" class="form-control"></textarea>
</div>  


<div class="form-group mt-2">
<input type="submit" name="add-employee" value="AddEmployee" class="btn btn-dark text-white" />
</div>  
</form>
<?php 
}
else 
{
?>

<h3 class="text-center">Edit employee data here</h3>
<hr class="border border-1 border-dark w-25 mx-auto" />
<form method="post">
<div class="row">    
<div class="form-group mt-2 col-md-6">
<label class="text-success">Edit FirstName *</label>    
<input type="text" name="fnm" value="<?php echo $fetch["firstname"];?>" placeholder="Enter firstName *" class="form-control" required/>
</div>   

<div class="form-group mt-2 col-md-6">
<label class="text-success">Edit LasttName *</label> 
<input type="text" name="lnm" value="<?php echo $fetch["lastname"];?>" placeholder="Enter lastName *" class="form-control" required />
</div>   
</div>

<div class="form-group mt-2">
<label class="text-success">Edit Email *</label> 
<input type="text" name="email" value="<?php echo $fetch["email"];?>" placeholder="Enter email *" class="form-control" required />
</div>  

<div class="form-group mt-2">
<label class="text-success">Edit Phone *</label> 
<input type="text" name="phone" value="<?php echo $fetch["phone"];?>" placeholder="Enter Phone *" class="form-control" required />
</div>  

<div class="form-group mt-2">
<label class="text-success">Edit Address *</label> 
<textarea  name="address" placeholder="Enter address *" class="form-control"> 
<?php echo $fetch["address"];?>
</textarea>
</div>  
<div class="form-group mt-2">
<input type="submit" name="upd-employee" value="Update Employee" class="btn btn-danger text-white" />
</div>  
</form>

<?php 
}
?>



<!-- edit form data -->



<!-- display all employees  -->
<table class="table table-responsive mt-4">
<?php 
$select="select * from tbl_addemployee";
$exe=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($exe))
{
?>
<tr>
<td><?php echo $fetch["empid"];?></td>
<td><?php echo $fetch["firstname"];?></td>
<td><?php echo $fetch["lastname"];?></td>
<td><?php echo $fetch["email"];?></td>
<td><?php echo $fetch["phone"];?></td>
<td><?php echo $fetch["address"];?></td>
<td><a href="add-employee.php?delid=<?php echo $fetch["empid"];?>" onclick="return confirm('Are you sure to delete employee Data ?')" class="btn btn-sm btn-danger bg-danger text-white"><span class="bi bi-trash"></span></a>
|  <a href="add-employee.php?edid=<?php echo $fetch["empid"];?>" class="btn btn-sm btn-primary bg-primary text-white"><span class="bi bi-pencil"></span></a>
</td>
</tr>   

<?php 
}
?>
</table>

</div>
</div>

</div>