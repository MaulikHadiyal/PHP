<?php 
require_once("navbar.php");
?>
<!-- content here -->
<div class="w-75 mx-auto mt-3 p-5 shadow">
<h3 class="text-center">Contact with us</h3>
<hr class="border border-1 border-dark w-25 mx-auto" />



<div class="row">
    <div class="col-md-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.679931494302!2d70.7723802740499!3d22.290111043267054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca248c77c099%3A0xdf5ac10af64ac8ee!2sTOPS%20Technologies!5e0!3m2!1sen!2sin!4v1722916796928!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="col-md-7">
        
<!-- contact us form -->
<form method="post" action="add-data.php">
<div class="form-group mt-2">
<input type="text" name="name" placeholder="Enter Name *" class="form-control" />
</div>  



<div class="form-group mt-2">
<input type="text" name="email" placeholder="Enter email *" class="form-control" />
</div>  


<div class="form-group mt-2">
<input type="text" name="phone" placeholder="Enter Phone *" class="form-control" />
</div>  

<div class="form-group mt-2">
<textarea  name="address" placeholder="Enter address *" class="form-control"></textarea>
</div>  


<div class="form-group mt-2">
<input type="submit" name="send" value="SendData" class="btn btn-dark text-white" />
</div>  

</form>
    </div>
</div>

</div>