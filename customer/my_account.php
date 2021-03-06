<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/13/2019
 * Time: 2:22 PM
 */
?>

<?php
include("includes/db.php");
include("functions/functions.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Chiru's Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet">
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script> -->

    <!--    <script src="js/bootstrap.min.js"></script>-->
    <script src="js/jquery.min.js"></script>
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
                    <a href="../customer_register.php">
                        Register
                    </a>
                </li>

                <li>
                    <a href="my_account.php">
                        My Account
                    </a>
                </li>

                <li>
                    <a href="../cart.php">
                        Go to cart
                    </a>
                </li>

                <li>
                    <a href="../checkout.php">
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
            <a class="navbar-brand home" href="../index.php">  <!--- navbar navbar-brand home starts--->
                <img src="images/logo.png" alt="chiru large logo" class="hidden-xs" width="64" >
                <img src="images/logo-small.png" alt="chiru small logo" class="visible-xs" width="64">
            </a>    <!--- navbar navbar-brand home ends--->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-align-justify"></i>
            </button>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                <span class="sr-only">Toggle Search</span>
                <i class="fa fa-search"></i>

            </button>
        </div>  <!--- navbar-header Ends --->
        <div class="collapse navbar-collapse" id="navigation">  <!--- navbar-collapse collapse start--->
            <div class="padding-nav">    <!--- padding-nav start--->
                <ul class="nav navbar-nav navbar-left"> <!--- nav navbar-nav navbar-left Start --->
                    <li>
                        <a href="../index.php"> Home </a>
                    </li>
                    <li>
                        <a href="../shop.php"> Shop </a>
                    </li>
                    <li class="active">
                        <a href="my_account.php"> My Account </a>
                    </li>
                    <li>
                        <a href="../cart.php"> Shopping Cart </a>
                    </li>
                    <li>
                        <a href="../contact.php"> Contact Us </a>
                    </li>
                </ul>   <!--- nav navbar-nav navbar-left Ends --->
            </div>      <!--- padding-nav ends--->
            <a class="btn btn-primary navbar-btn right" href="cart.php">    <!--- btn btn-primary navbar-btn right Start --->
                <i class="fa fa-shopping-cart"></i>
                <span> 4 items in cart </span>
            </a>    <!--- btn btn-primary navbar-btn right Ends --->
            <div class="navbar-collapse collapse right">    <!--- navbar-collapse collapse right Start --->
                <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle Search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div>  <!--- navbar-collapse collapse right Ends --->
            <div class="collapse clearfix" id="search"> <!--- collapse clearfix Start --->
                <form class="navbar-form" method="get" action="results.php">       <!--- navbar-form Starts --->
                    <div class="input-group">  <!--- input-group start --->
                        <input class="form-control" type="text" placeholder="Search" name="user_query" required>
                        <span class="input-group-btn">  <!--- input-group-btn --->
                            <button type="submit" value="Search" name="search" class="btn btn-primary">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>  <!--- input-group Ends --->
                </form>     <!--- navbar-form Ends --->
            </div>  <!--- collapse clearfix Ends --->
        </div>   <!--- navbar-collapse collapse ends--->
    </div>  <!--- container ends --->
</div>   <!---navbar navbar-default Ends--->


<div class="content">   <!--- content Starts --->
    <div class="container"> <!--- container Starts --->
        <div class="col-md-12"> <!--- col-md-12 Starts --->
            <ul class="breadcrumb"> <!--- breadcrumb Starts --->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>My Account</li>
            </ul>    <!--- breadcrumb Ends --->

        </div>  <!--- col-md-12 Ends --->

        <div class="col-md-3">  <!--- col-md-3 Starts --->
            <?php include("includes/sidebar.php") ?>
        </div>  <!--- col-md-3 Ends --->

        <div class="col-md-9">  <!--- col-md-9 Starts --->
            <div class="box">   <!--- box Starts --->
                <?php
                if(isset($_GET['my_orders']))
                {
                    include("my_orders.php");
                }
                if(isset($_GET['pay_offline'])) {
                    include ("pay_offline.php");
                }

                if(isset($_GET['edit_account'])) {
                    include("edit_account.php");
                }
                if(isset($_GET['change_pass'])) {
                    include ("change_pass.php");
                }
                if(isset($_GET['delete_account'])) {
                    include ("delete_account.php");
                }
                ?>
            </div>  <!--- box Ends --->
        </div>  <!--- col-md-9 Ends --->

    </div>  <!--- Container Ends --->
</div>  <!--- content Ends --->

<?php
include("includes/footer.php")
?>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>

</body>
</html>
