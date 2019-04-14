<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/15/2019
 * Time: 2:56 AM
 */
?>

<h1 align="center"> Edit Your Account </h1>
<form action="" method="post" enctype="multipart/form-data">        <!--- form Starts--->
    <div class="form-group">     <!--- form-group Starts --->
        <label> Customer Name: </label>
        <input type="text" name="c_name" class="form-control" required>
    </div>   <!--- form-group Ends --->
    <div class="form-group">     <!--- form-group Starts --->
        <label> Customer Email: </label>
        <input type="text" name="c_email" class="form-control" required>
    </div>   <!--- form-group Ends --->
    <div class="form-group">     <!--- form-group Starts --->
        <label> Customer Country: </label>
        <input type="text" name="c_country" class="form-control" required>
    </div>   <!--- form-group Ends ---><div class="form-group">     <!--- form-group Starts --->
        <label> Customer City: </label>
        <input type="text" name="c_city" class="form-control" required>
    </div>   <!--- form-group Ends ---><div class="form-group">     <!--- form-group Starts --->
        <label> Customer Contact: </label>
        <input type="text" name="c_contact" class="form-control" required>
    </div>   <!--- form-group Ends --->
    <div class="form-group">     <!--- form-group Starts --->
        <label> Customer Address: </label>
        <input type="text" name="c_address" class="form-control" required>
    </div>   <!--- form-group Ends --->
    <div class="form-group">     <!--- form-group Starts --->
        <label> Customer Image: </label>
        <input type="file" name="c_image" class="form-control" required> <br>
        <img src="customer_images/profilePic.jpg" width="100" height="100" class="img-responsive">
    </div>   <!--- form-group Ends --->
    <div class="text-center">   <!--- text-center Starts --->
        <button name="update" class="btn btn-primary">
            <i class="fa fa-user-md"></i> Update Now
        </button>
    </div>  <!--- text-center Ends --->
</form>     <!--- form Ends --->
