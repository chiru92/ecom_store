<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/13/2019
 * Time: 2:26 AM
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
                        <a href="index.php"> Home </a>
                    </li>
                    <li>
                        <a href="shop.php"> Shop </a>
                    </li>
                    <li>
                        <a href="checkout.php"> My Account </a>
                    </li>
                    <li class="active">
                        <a href="cart.php"> Shopping Cart </a>
                    </li>
                    <li>
                        <a href="contact.php"> Contact Us </a>
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


<div id="content">   <!--- content Starts --->
    <div class="container"> <!--- container Starts --->
        <div class="col-md-12"> <!--- col-md-12 Starts --->
            <ul class="breadcrumb"> <!--- breadcrumb Starts --->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>Cart</li>
            </ul>    <!--- breadcrumb Ends --->

        </div>  <!--- col-md-12 Ends --->

        <div class="col-md-9" id="cart">    <!--- col-md-9 Starts --->
            <div class="box">   <!--- box Starts --->
                <form action="cart.php" method="post" enctype="multipart/form-data">    <!--- form Starts --->
                    <h1> Shopping Cart </h1>
                    <p class="text-muted"> You currently have 3 item(s) in your cart. </p>
                    <div class="table-responsive">  <!--- table-responsive Starts --->
                        <table class="table">   <!--- table Starts --->
                            <thead>     <!--- thead Starts --->
                                <tr>
                                    <th colspan="2">Product</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Edition</th>
                                    <th colspan="1">Delete</th>
                                    <th colspan="2">Sub Total</th>
                                </tr>
                            </thead>       <!--- thead Ends --->
                            <tbody>     <!--- thead Ends --->
                                <tr>    <!--- tr Starts --->
                                    <td>
                                        <img src="admin_area/product_images/product1.jpg">
                                    </td>
                                    <td>
                                        <a href="#"> A Briefer History of Time </a>
                                    </td>
                                    <td> 2 </td>
                                    <td> $99.00 </td>
                                    <td> 2019 or Newer </td>
                                    <td><input type="checkbox" name="remove[]"></td>
                                    <td> $198.00 </td>
                                </tr>   <!--- tr Ends --->

                                <tr>    <!--- tr Starts --->
                                    <td>
                                        <img src="admin_area/product_images/product1.jpg">
                                    </td>
                                    <td>
                                        <a href="#"> A Briefer History of Time </a>
                                    </td>
                                    <td> 2 </td>
                                    <td> $99.00 </td>
                                    <td> 2019 or Newer </td>
                                    <td><input type="checkbox" name="remove[]"></td>
                                    <td> $198.00 </td>
                                </tr>   <!--- tr Ends --->

                                <tr>    <!--- tr Starts --->
                                    <td>
                                        <img src="admin_area/product_images/product1.jpg">
                                    </td>
                                    <td>
                                        <a href="#"> A Briefer History of Time </a>
                                    </td>
                                    <td> 2 </td>
                                    <td> $99.00 </td>
                                    <td> 2019 or Newer </td>
                                    <td><input type="checkbox" name="remove[]"></td>
                                    <td> $198.00 </td>
                                </tr>   <!--- tr Ends --->
                            </tbody>    <!--- tbody Ends --->
                                <tr>
                                    <th colspan="5"> Total </th>
                                    <th colspan="2"> $198 </th>
                                </tr>
                            <tfoot>     <!--- tfoot Starts --->

                            </tfoot>       <!--- tfoot Ends --->
                        </table>    <!--- table Ends --->
                    </div>  <!--- table-responsive Ends --->

                    <div class="box-footer">    <!--- box-footer Starts --->
                        <div class="pull-left"> <!--- pull-left Starts --->
                            <a href="index.php" class="btn btn-default">
                                <i class="fa fa-chevron-left"></i> Continue Shopping
                            </a>
                        </div>  <!--- pull-left Ends --->
                        <div class="pull-right">    <!--- pull-right Starts --->
                            <button class="btn btn-default" type="submit" name="update" value="Update Cart">
                                <i class="fa fa-refresh"></i> Update Cart
                            </button>

                            <a href="checkout.php" class="btn btn-primary">
                                Proceed to checkout <i class="fa fa-chevron-right"> </i>
                            </a>
                        </div>  <!--- pull-right Ends --->
                    </div>  <!--- box-footer Ends --->
                </form>     <!--- form Ends --->
            </div>  <!--- box Ends --->

            <div id="row same-height-row">  <!--- row same-height-row Starts --->
                <div class="col-md-3 col-sm-6"> <!--- col-md-3 col-sm-6 Starts --->
                    <div class="box same-height headline">  <!--- box same-height headline Starts --->
                        <h3 class="text-center">You also like these Products</h3>
                    </div>      <!--- box same-height headline Ends --->
                </div>  <!--- col-md-3 col-sm-6 Ends --->

                <div class="center-responsive col-md-3 col-sm-6">   <!--- center-responsive col-md-3 col-sm-6 Starts --->
                    <div class="product same-height">   <!--- product same-height Starts --->
                        <a href="details.php">
                            <img src="admin_area/product_images/product2.jpg" class="img-responsive">
                        </a>

                        <div class="text">  <!--- text Starts --->
                            <h3><a href="details.php"> A Briefer History of Time </a></h3>
                            <p  class="price"> $99 </p>
                        </div>  <!--- text Ends --->

                    </div>  <!--- product same-height Ends --->
                </div>      <!--- center-responsive col-md-3 col-sm-6 Ends --->

                <div class="center-responsive col-md-3 col-sm-6">   <!--- center-responsive col-md-3 col-sm-6 Starts --->
                    <div class="product same-height">   <!--- product same-height Starts --->
                        <a href="details.php">
                            <img src="admin_area/product_images/product3.jpg" class="img-responsive">
                        </a>

                        <div class="text">  <!--- text Starts --->
                            <h3><a href="details.php"> A Briefer History of Time </a></h3>
                            <p  class="price"> $99 </p>
                        </div>  <!--- text Ends --->

                    </div>  <!--- product same-height Ends --->
                </div>      <!--- center-responsive col-md-3 col-sm-6 Ends --->

                <div class="center-responsive col-md-3 col-sm-6">   <!--- center-responsive col-md-3 col-sm-6 Starts --->
                    <div class="product same-height">   <!--- product same-height Starts --->
                        <a href="details.php">
                            <img src="admin_area/product_images/product4.jpg" class="img-responsive">
                        </a>

                        <div class="text">  <!--- text Starts --->
                            <h3><a href="details.php"> A Briefer History of Time </a></h3>
                            <p  class="price"> $99 </p>
                        </div>  <!--- text Ends --->

                    </div>  <!--- product same-height Ends --->
                </div>      <!--- center-responsive col-md-3 col-sm-6 Ends --->

            </div>  <!--- row same-height-row Ends --->

        </div>  <!--- col-md-9 Ends --->

        <div class="col-md-3">  <!--- col-md-3 Starts --->
            <div class="box" id="order-summary">    <!--- box Starts --->
                <div class="box-header">    <!--- box-header Starts --->
                    <h3>Order Summary</h3>
                </div>  <!--- box-header Ends --->
                <p class="text-muted">
                    Shipping and additional costs are calculated based on the values you have entered.
                </p>
                <div class="table-responsive"> <!--- table-responsive Starts --->
                    <table class="table">   <!--- table Starts --->
                        <tbody> <!--- tbody Starts --->
                            <tr>
                                <td> Order Subtotal</td>
                                <th> $198 </th>
                            </tr>
                        <tr>
                            <td> Shipping and handling </td>
                            <td> $0.00 </td>
                        </tr>
                        <tr>
                            <td>Tax</td>
                            <th> $0.00 </th>
                        </tr>
                        <tr class="total">
                            <td>Total</td>
                            <th> $198.00 </th>
                        </tr>
                        </tbody>       <!--- tbody Ends --->
                    </table>    <!--- table Ends --->
                </div>  <!--- table-responsive Ends --->
            </div>  <!---box Ends --->
        </div>  <!--- col-md-3 Ends --->

    </div>  <!--- Container Ends --->
</div>  <!--- content Ends --->

<?php
include("includes/footer.php")
?>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>

</body>
</html>
