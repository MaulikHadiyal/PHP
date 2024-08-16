<?php 
require_once("navbar.php");
?>
<!-- content here -->
<div class="w-50 mx-auto mt-3 p-5 shadow">
<h3 class="text-center">Create your account</h3>
<hr class="border border-1 border-dark w-25 mx-auto" />

<!-- register data -->
<form method="post" action="add-data.php">

<div class="row">    
<div class="form-group mt-2 col-md-6">
<input type="text" name="fnm" placeholder="Enter firstName *" class="form-control" />
</div>   

<div class="form-group mt-2 col-md-6">
<input type="text" name="lnm" placeholder="Enter lastName *" class="form-control" />
</div>   
</div>

<div class="form-group mt-2">
<input type="text" name="email" placeholder="Enter email *" class="form-control" />
</div>  


<div class="row">    
<div class="form-group mt-2 col-md-6">
<input type="password" name="password" placeholder="Enter Password *" class="form-control" />
</div>   

<div class="form-group mt-2 col-md-6">
<input type="password" name="confirmed-password" placeholder="Enter Confirmed Password *" class="form-control" />
</div>   
</div>

<div class="form-group mt-2">
<input type="text" name="phone" placeholder="Enter Phone *" class="form-control" />
</div>  

<div class="form-group mt-2">
<textarea  name="address" placeholder="Enter address *" class="form-control"></textarea>
</div>  

<div class="form-group mt-2">
<select name="country"  placeholder="Select country *" class="form-control">
<option value="">-select country-</option>
    <?php   
    //  fetch all country
    $url="https://country.io/names.json";
    $data=file_get_contents($url,true);
    $country=json_decode($data,true);
    foreach($country as $country1)
    {
    ?>
    <option value="<?php echo $country1;?>"><?php echo $country1;?></option>
   <?php 
    }
    ?>
</select>
</div>  


<div class="form-group mt-2">
<input type="submit" name="reg-data" value="Register" class="btn btn-dark text-white" />
</div>  

</form>
</div>