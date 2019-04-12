<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/12/2019
 * Time: 2:48 PM
 */
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
                    <li class="active">
                        <a href="shop.php"> Shop </a>
                    </li>
                    <li>
                        <a href="checkout.php"> My Account </a>
                    </li>
                    <li>
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
                <li>Shop</li>
            </ul>    <!--- breadcrumb Ends --->

        </div>  <!--- col-md-12 Ends --->

        <div class="col-md-3">  <!--- col-md-3 Starts --->
            <?php include("includes/sidebar.php") ?>
        </div>  <!--- col-md-3 Ends --->


        <div class="col-md-9">  <!--- col-md-9 Starts --->
            <div class="row" id="productMain">  <!--- row Starts --->
                <div class="col-sm-6">  <!--- col-sm-6 Starts --->
                    <div id="mainImage">    <!--- mainImage Starts --->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">    <!--- carousel-indicators Starts --->
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>   <!--- carousel-indicators Ends --->

                            <div class="carousel-inner">   <!--- carousel-inner Starts --->
                                <div class="item active">
                                    <center>
                                        <img src="admin_area/product_images/product1.jpg" class="img-responsive">
                                    </center>
                                </div>
                                <div class="item">
                                    <center>
                                        <img src="admin_area/product_images/product1_1.jpg" class="img-responsive">
                                    </center>
                                </div>
                                <div class="item">
                                    <center>
                                        <img src="admin_area/product_images/product1_2.jpg">
                                    </center>
                                </div>
                            </div>  <!--- carousel-inner Ends --->

                            <a href="#myCarousel" class="left carousel-control" data-slide="prev">  <!--- left carousel-control Starts --->
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only"> Previous </span>
                            </a>    <!--- left carousel-control Ends --->

                            <a href="#myCarousel" class="right carousel-control" data-slide="next">     <!--- right carousel-control Starts --->
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only"> Next </span>
                            </a>    <!--- right carousel-control Ends --->

                        </div>
                    </div>  <!--- mainImage Ends --->
                </div>  <!--- col-sm-6 Ends --->

                <div class="col-sm-6">     <!--- col-sm-6 Starts --->
                    <div class="box">   <!--- box Starts --->
                        <h1 class="text-center"> A Briefer History of Time </h1>
                        <form action="details.php" method="post" class="form-horizontal">      <!--- form-horizontal Starts --->
                            <div class="form-group">    <!--- form-group Starts --->
                                <label class="col-md-5 control-label"> Product Quantity </label>
                                <div class="col-md-7">  <!--- col-md-7 Starts --->
                                    <select name="product_qty" class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>  <!--- col-md-7 Ends --->
                            </div>  <!--- form-group Ends --->

                            <div class="form-group">    <!--- form-group Starts --->
                                <label class="col-md-5 control-label"> Product Edition</label>
                                <div class="col-md-7">  <!--- col-md-7 Starts --->
                                    <select name="product_size" class="form-control">
                                        <option>Select a Edition</option>
                                        <option>2017 or Older</option>
                                        <option>2018</option>
                                        <option>2019 or Newer</option>
                                    </select>
                                </div>  <!--- col-md-7 Ends --->
                            </div>  <!--- form-group Ends --->

                            <p class="price"> $99 </p>
                            <p class="text-center buttons">    <!--- text-center buttons Starts --->
                                <button class="btn btn-primary" type="submit">
                                    <i class="fa fa-shopping-cart"></i> Add to Cart
                                </button>
                            </p>    <!--- text-center buttons Ends --->

                        </form>     <!--- form-horizontal Ends --->
                    </div>  <!--- box Ends --->

                    <div class="row" id="thumbs">   <!--- row Starts --->
                        <div class="col-xs-4">  <!--- col-xs-4 Starts --->
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/product1.jpg" class="img-responsive">
                            </a>
                        </div>  <!--- col-xs-4 Ends --->
                        <div class="col-xs-4">  <!--- col-xs-4 Starts --->
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/product1_1.jpg" class="img-responsive">
                            </a>
                        </div>  <!--- col-xs-4 Ends --->
                        <div class="col-xs-4">  <!--- col-xs-4 Starts --->
                            <a href="#" class="thumb">
                                <img src="admin_area/product_images/product1_2.jpg" class="img-responsive">
                            </a>
                        </div>  <!--- col-xs-4 Ends --->
                    </div><!--- row Ends --->
                </div>  <!--- col-sm-6 Ends --->

            </div>  <!--- row Ends --->

            <div class="box" id="details">  <!--- box Starts --->
                <p>
                <h4>Product Details</h4>
                <p>
                    A Brief History of Time: From the Big Bang to Black Holes is a popular-science book on cosmology (the study of the universe) by British physicist Stephen Hawking.It was first published in 1988. Hawking wrote the book for nonspecialist readers with no prior knowledge of scientific theories.
                </p>
                <h4> Edition </h4>
                <ul>
                    <li>2017 or Older</li>
                    <li>2018</li>
                    <li>2019 or Newer</li>
                </ul>
                </p>
                <hr>
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

    </div>  <!--- Container Ends --->
</div>  <!--- content Ends --->

<?php
include("includes/footer.php")
?>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>

</body>
</html>
