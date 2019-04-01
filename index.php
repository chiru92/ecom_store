<!-- https://github.com/chiru92/ecom_store -->


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chiru's Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script> -->
</head>
<body>

<div id="top">  <!-- top starts -->
    <div class="container"> <!-- container starts -->
        <div class="col-md-6 offer">    <!-- col-md-6 offer starts -->
            <a href="#" class="btn btn-success btn-sm">
                Welcome : Guest
            </a>
            <a href="#">
                Shopping Cart Total Price: 100$, Total Items 2
            </a>
        </div>  <!-- col-md-6 offer ends -->

        <div class="col-md-12">  <!-- col-md-6 starts -->
        <ul class="menu" >   <!-- menu starts -->
            <li>
                <a href="customer_register.php">
                Register
                </a>
            </li>

            <li>
            <a href="checkout.php">
                My Account
            </a>
            </li>

            <li>
            <a href="cart.php">
                Go to cart
            </a>
            </li>

            <li>
            <a href="checkout.php">
                Login
            </a>
            </li>
        </ul><!-- menu ends -->
        
        </div>   <!-- col-md-6 ends -->
    </div>  <!-- container ends -->
</div>  <!-- top ends -->

<div class="navbar navbar-default" id="navbar"> <!---navbar navbar-default Starts--->
    <div class="container"> <!--- container starts --->
        <div class="navbar-header"> <!--- navbar-header Starts --->
            <a class="navbar-brand home" href="index.php">  <!--- navbar navbar-brand home starts--->
                <img src="images/logo.png" alt="computerfever logo" class="hidden-xs" width="64" >
                <img src="images/logo-small.png" alt="computerfever logo" class="visible-xs" width="64">
            </a>    <!--- navbar navbar-brand home ends--->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-align-justify"></i>
            </button>
            <button type="button" class="navbar-toggle" data-toggle="navbar-toggle" data-target="#search">
                <span class="sr-only">Toggle Search</span>
                <i class="fa fa-search"></i>

            </button>
        </div>  <!--- navbar-header Ends --->
    </div>  <!--- container ends --->
</div>   <!---navbar navbar-default Ends---> 

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>

