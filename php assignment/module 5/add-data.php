<?php 
require_once("config.php");

// add employee
if(isset($_POST["add-employee"]))
{
date_default_timezone_set("Asia/Calcutta");    
$fnm=$_POST["fnm"];
$lnm=$_POST["lnm"];
$em=$_POST["email"];
$pwd=base64_encode($_POST["password"]);
$cpwd=base64_encode($_POST["confirmed-password"]);
$phone=$_POST["phone"];
$add=$_POST["address"];
$reg_date=date("d/m/Y H:i:s a");

// insert data write a sql query
if($pwd==$cpwd)
{
$query="insert into tbl_addemployee(firstname,lastname,email,password,phone,address,registered_date) values('$fnm','$lnm','$em','$pwd','$phone','$add','$reg_date')";
$exe=mysqli_query($con,$query);
echo "<script>
alert('Thanks for adding employee')
window.location='add-employee.php';
</script>"; 
}

else 
{
echo "<script>
alert('Your password and confirmed password does not matched try again')
window.location='add-employee.php';
</script>"; 
}
}

// add contacts data

if(isset($_POST["send"]))
{
date_default_timezone_set("Asia/Calcutta");    
$name=$_POST["name"];
$em=$_POST["email"];
$phone=$_POST["phone"];
$add=$_POST["address"];
$reg_date=date("d/m/Y H:i:s a");

$query="insert into tbl_contact(name,email,phone,address,added_date_time) values('$name','$em','$phone','$add','$reg_date')";
$exe=mysqli_query($con,$query);
echo "<script>
alert('Thanks for Contact with us our admin will contact with you soon')
window.location='contact.php';
</script>"; 
}



// add register data

if(isset($_POST["reg-data"]))
{
date_default_timezone_set("Asia/Calcutta");    
$fnm=$_POST["fnm"];
$lnm=$_POST["lnm"];
$em=$_POST["email"];
$pwd=base64_encode($_POST["password"]);
$cpwd=base64_encode($_POST["confirmed-password"]);
$phone=$_POST["phone"];
$add=$_POST["address"];
$country=$_POST["country"];
$reg_date=date("d/m/Y H:i:s a");

// insert data write a sql query
if($pwd==$cpwd)
{
$query="insert into tbl_register(firstname,lastname,email,password,phone,address,country,added_date_time) values('$fnm','$lnm','$em','$pwd','$phone','$add','$country','$reg_date')";
$exe=mysqli_query($con,$query);
echo "<script>
alert('Thanks for Create your account with us')
window.location='login.php';
</script>"; 
}

else 
{
echo "<script>
alert('Your password and confirmed password does not matched try again')
window.location='register.php';
</script>"; 
}
}


?>