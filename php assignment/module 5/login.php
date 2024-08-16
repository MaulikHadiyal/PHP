<?php 
require_once("navbar.php");
?>
<!-- content here -->
<div class="w-75 mx-auto mt-3 p-5 shadow">
<h3 class="text-center">Login with Us</h3>
<hr class="border border-1 border-dark w-25 mx-auto" />


<div class="row">
    <div class="col-md-5">
 <img src="https://th.bing.com/th/id/OIP.vKZkWpM0c6N2oAmmBzup7gHaHa?rs=1&pid=ImgDetMain" class="img-fluid w-75">
    </div>
    <div class="col-md-7">
        
<!-- contact us form -->
<form method="post" action="add-data.php">


<div class="form-group mt-5">
<input type="text" name="email" placeholder="Enter email *" class="form-control" />
</div>  


<div class="form-group mt-3">
<input type="password" name="password" placeholder="Enter Password *" class="form-control" />
</div>  

<div class="form-group mt-2">
<input type="submit" name="login" value="SignIn" class="btn btn-dark text-white" />
<b><a href="">Forget Password ?</a></b>

</div>  
<div class="form-group mt-2">
<b>Don't have an account ?<a href="register.php">Create your account</a></b>
</div>

</form>
    </div>
</div>

</div>