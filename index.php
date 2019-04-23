<!-- https://github.com/chiru92/ecom_store -->


<?php
    include("includes/db.php");
    include("functions/functions.php");
?>
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
                    <li class="active">
                        <a href="index.php"> Home </a>
                    </li>
                    <li>
                        <a href="shop.php"> Shop </a>
                    </li>
                    <li>
                        <a href="customer/my_account.php"> My Account </a>
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

<div class="container" id="slider">     <!--- Container starts --->
    <div class="col-md-12">     <!--- col-md-12 Starts --->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">       <!--- carousel starts--->
            <ol class="carousel-indicators">        <!--- carousel-indicators Starts --->
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>       <!--- carousel-indicators Endss --->
            <div class="carousel-inner">        <!--- carousel-inner Starts --->
<!--                <div class="item active">-->
<!--                    <img src="admin_area/slides_images/1.jpg" width="1280">-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <img src="admin_area/slides_images/2.jpeg" width="1280">-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <img src="admin_area/slides_images/3.jpg" width="1280">-->
<!--                </div>-->
<!--                <div class="item">-->
<!--                    <img src="admin_area/slides_images/4.png" width="1280">-->
<!--                </div>-->
                <?php
                    $get_slides = "select * from slider LIMIT 0,1";
                    $run_slides = mysqli_query($connect,$get_slides);
                    while($row_slides = mysqli_fetch_array($run_slides)) {
                        $slide_name = $row_slides['slide_name'];
                        $slide_image = $row_slides['slide_image'];
                        echo "
                            <div class='item active'>
                                <img src='admin_area/slides_images/$slide_image'>
                            </div>";
                    }
                    ?>

                <?php
                $get_slides = "select * from slider LIMIT 1,3";
                $run_slides = mysqli_query($connect,$get_slides);
                while($row_slides = mysqli_fetch_array($run_slides)) {
                    $slide_name = $row_slides['slide_name'];
                    $slide_image = $row_slides['slide_image'];
                    echo "
                            <div class='item'>
                                <img src='admin_area/slides_images/$slide_image'>
                            </div>";
                }
                ?>
            </div>      <!--- carousel-inner Ends --->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">      <!--- left carousel-control Starts --->
                <span class="glyphicon glyphicon-chevron-left"> </span>
                <span class="sr-only"> Previous </span>
            </a>    <!--- left carousel-control Ends --->
            <a class="right carousel-control" href="#myCarousel" data-slide="next">     <!--- right carousel-control Starts --->
                <span class="glyphicon glyphicon-chevron-right"> </span>
                <span class="sr-only"> Next </span>
            </a>       <!--- right carousel-control Ends --->
        </div>      <!--- carousel ends--->
    </div>      <!--- col-md-12 ends --->

</div>      <!--- Container ends --->

<div id="advantages">       <!--- advantages starts --->
    <div class="container">     <!--- container Starts --->
        <div class="same-height-row">       <!--- same-height-row Starts --->
            <div class="col-sm-4">      <!--- col-sm-4 Starts --->
                <div class="box same-height">      <!--- box same-height Starts --->
                    <div class="icon">
                        <i class="fa fa-heart"></i>
                    </div>
                    <h3><a href="#"> WE LOVE OUR CUSTOMERS </a></h3>
                    <p>
                        We are known to provide best possible service ever.
                    </p>
                </div>  <!--- box same-height Ends --->
            </div>      <!--- col-sm-4 Ends --->

            <div class="col-sm-4"> <!--- col-sm-4 Starts --->
                <div class="box same-height">       <!--- box same-height Starts --->
                    <div class="icon">
                        <i class="fa fa-tags"></i>
                    </div>
                    <h3><a href="#"> BEST PRICES </a></h3>
                    <p>
                        You can check on all others sites about the prices and than compare with us.
                    </p>
                </div>      <!--- box same-height Starts --->
            </div>      <!--- col-sm-4 Ends --->

            <div class="col-sm-4"> <!--- col-sm-4 Starts --->
                <div class="box same-height">       <!--- box same-height Starts --->
                    <div class="icon">
                        <i class="fa fa-thumbs-up"></i>
                    </div>
                    <h3><a href="#"> 100% SATISFACTION GUARANTEED </a></h3>
                    <p>
                        Free returns on everything for 3 months.
                    </p>
                </div>      <!--- box same-height Starts --->
            </div>      <!--- col-sm-4 Ends --->
        </div>      <!--- same-height-row Ends --->
    </div>      <!--- container Endss --->
</div>      <!--- advantages ends --->

<div id="hot">  <!---hot starts --->
    <div class="box">   <!--- box starts --->
        <div class="container">     <!--- container starts --->
            <div class="col-md-12">     <!--- col-md-12 Starts --->
                <h2>Latest this week</h2>
            </div>      <!--- col-md-12 Ends --->
        </div>      <!--- container ends --->
    </div>      <!--- box ends --->
</div>      <!---hot ends --->

<div id="content" class="container">    <!--- container starts --->
    <div class="row">   <!--- row starts --->
<!--        <div class="col-sm-4 col-sm-6 single">      <!--- col-sm-4 col-sm-6 single starts --->-->
<!--            <div class="product">       <!--- product starts --->-->
<!--                <a href="details.php">-->
<!--                    <img src="admin_area/product_images/product1.jpg" class="img-responsive" >-->
<!--                </a>-->
<!--                <div class="text">      <!--- text starts --->-->
<!--                    <h3><a href="details.php">A Briefer History of Time</a></h3>-->
<!--                    <p class="price">$99</p>-->
<!--                    <p class="buttons">-->
<!--                        <a href="details.php" class="btn btn-default"> View Details </a>-->
<!--                        <a href="details.php" class="btn btn-primary">-->
<!--                            <i class="fa fa-shopping-cart"></i> Add to cart-->
<!--                        </a>-->
<!--                    </p>-->
<!--                </div>      <!--- text ends --->-->
<!--            </div>      <!--- product ends --->-->
<!--        </div>      <!--- col-sm-4 col-sm-6 single ends --->-->
<!---->
<!--        <div class="col-sm-4 col-sm-6 single">      <!--- col-sm-4 col-sm-6 single starts --->-->
<!--            <div class="product">       <!--- product starts --->-->
<!--                <a href="details.php">-->
<!--                    <img src="admin_area/product_images/product2.jpg" class="img-responsive">-->
<!--                </a>-->
<!--                <div class="text">      <!--- text starts --->-->
<!--                    <h3><a href="details.php">A Briefer History of Time</a></h3>-->
<!--                    <p class="price">$99</p>-->
<!--                    <p class="buttons">-->
<!--                        <a href="details.php" class="btn btn-default"> View Details </a>-->
<!--                        <a href="details.php" class="btn btn-primary">-->
<!--                            <i class="fa fa-shopping-cart"></i> Add to cart-->
<!--                        </a>-->
<!--                    </p>-->
<!--                </div>      <!--- text ends --->-->
<!--            </div>      <!--- product ends --->-->
<!--        </div>      <!--- col-sm-4 col-sm-6 single ends --->-->
<!---->
<!--        <div class="col-sm-4 col-sm-6 single">      <!--- col-sm-4 col-sm-6 single starts --->-->
<!--            <div class="product">       <!--- product starts --->-->
<!--                <a href="details.php">-->
<!--                    <img src="admin_area/product_images/product3.jpg" class="img-responsive">-->
<!--                </a>-->
<!--                <div class="text">      <!--- text starts --->-->
<!--                    <h3><a href="details.php">A Briefer History of Time</a></h3>-->
<!--                    <p class="price">$99</p>-->
<!--                    <p class="buttons">-->
<!--                        <a href="details.php" class="btn btn-default"> View Details </a>-->
<!--                        <a href="details.php" class="btn btn-primary">-->
<!--                            <i class="fa fa-shopping-cart"></i> Add to cart-->
<!--                        </a>-->
<!--                    </p>-->
<!--                </div>      <!--- text ends --->-->
<!--            </div>      <!--- product ends --->-->
<!--        </div>      <!--- col-sm-4 col-sm-6 single ends --->-->
<!---->
<!--        <div class="col-sm-4 col-sm-6 single">      <!--- col-sm-4 col-sm-6 single starts --->-->
<!--            <div class="product">       <!--- product starts --->-->
<!--                <a href="details.php">-->
<!--                    <img src="admin_area/product_images/product4.jpg" class="img-responsive">-->
<!--                </a>-->
<!--                <div class="text">      <!--- text starts --->-->
<!--                    <h3><a href="details.php">A Briefer History of Time</a></h3>-->
<!--                    <p class="price">$99</p>-->
<!--                    <p class="buttons">-->
<!--                        <a href="details.php" class="btn btn-default"> View Details </a>-->
<!--                        <a href="details.php" class="btn btn-primary">-->
<!--                            <i class="fa fa-shopping-cart"></i> Add to cart-->
<!--                        </a>-->
<!--                    </p>-->
<!--                </div>      <!--- text ends --->-->
<!--            </div>      <!--- product ends --->-->
<!--        </div>      <!--- col-sm-4 col-sm-6 single ends --->-->
<!---->
<!--        <div class="col-sm-4 col-sm-6 single">      <!--- col-sm-4 col-sm-6 single starts --->-->
<!--            <div class="product">       <!--- product starts --->-->
<!--                <a href="details.php">-->
<!--                    <img src="admin_area/product_images/product5.jpg" class="img-responsive">-->
<!--                </a>-->
<!--                <div class="text">      <!--- text starts --->-->
<!--                    <h3><a href="details.php">A Briefer History of Time</a></h3>-->
<!--                    <p class="price">$99</p>-->
<!--                    <p class="buttons">-->
<!--                        <a href="details.php" class="btn btn-default"> View Details </a>-->
<!--                        <a href="details.php" class="btn btn-primary">-->
<!--                            <i class="fa fa-shopping-cart"></i> Add to cart-->
<!--                        </a>-->
<!--                    </p>-->
<!--                </div>      <!--- text ends --->-->
<!--            </div>      <!--- product ends --->-->
<!--        </div>      <!--- col-sm-4 col-sm-6 single ends --->-->
<!---->
<!--        <div class="col-sm-4 col-sm-6 single">      <!--- col-sm-4 col-sm-6 single starts --->-->
<!--            <div class="product">       <!--- product starts --->-->
<!--                <a href="details.php">-->
<!--                    <img src="admin_area/product_images/product6.jpg" class="img-responsive">-->
<!--                </a>-->
<!--                <div class="text">      <!--- text starts --->-->
<!--                    <h3><a href="details.php">A Briefer History of Time</a></h3>-->
<!--                    <p class="price">$99</p>-->
<!--                    <p class="buttons">-->
<!--                        <a href="details.php" class="btn btn-default"> View Details </a>-->
<!--                        <a href="details.php" class="btn btn-primary">-->
<!--                            <i class="fa fa-shopping-cart"></i> Add to cart-->
<!--                        </a>-->
<!--                    </p>-->
<!--                </div>      <!--- text ends --->-->
<!--            </div>      <!--- product ends --->-->
<!--        </div>      <!--- col-sm-4 col-sm-6 single ends --->-->
<!---->
<!--        <div class="col-sm-4 col-sm-6 single">      <!--- col-sm-4 col-sm-6 single starts --->-->
<!--            <div class="product">       <!--- product starts --->-->
<!--                <a href="details.php">-->
<!--                    <img src="admin_area/product_images/product7.jpeg" class="img-responsive">-->
<!--                </a>-->
<!--                <div class="text">      <!--- text starts --->-->
<!--                    <h3><a href="details.php">A Briefer History of Time</a></h3>-->
<!--                    <p class="price">$99</p>-->
<!--                    <p class="buttons">-->
<!--                        <a href="details.php" class="btn btn-default"> View Details </a>-->
<!--                        <a href="details.php" class="btn btn-primary">-->
<!--                            <i class="fa fa-shopping-cart"></i> Add to cart-->
<!--                        </a>-->
<!--                    </p>-->
<!--                </div>      <!--- text ends --->-->
<!--            </div>      <!--- product ends --->-->
<!--        </div>      <!--- col-sm-4 col-sm-6 single ends --->-->
<!---->
<!--        <div class="col-sm-4 col-sm-6 single">      <!--- col-sm-4 col-sm-6 single starts --->-->
<!--            <div class="product">       <!--- product starts --->-->
<!--                <a href="details.php">-->
<!--                    <img src="admin_area/product_images/product4.png" class="img-responsive">-->
<!--                </a>-->
<!--                <div class="text">      <!--- text starts --->-->
<!--                    <h3><a href="details.php">A Briefer History of Time</a></h3>-->
<!--                    <p class="price">$99</p>-->
<!--                    <p class="buttons">-->
<!--                        <a href="details.php" class="btn btn-default"> View Details </a>-->
<!--                        <a href="details.php" class="btn btn-primary">-->
<!--                            <i class="fa fa-shopping-cart"></i> Add to cart-->
<!--                        </a>-->
<!--                    </p>-->
<!--                </div>      <!--- text ends --->-->
<!--            </div>      <!--- product ends --->-->
<!--        </div>      <!--- col-sm-4 col-sm-6 single ends --->-->


        <?php
            getPro();
        ?>

    </div>      <!--- row ends --->
</div>      <!--- container ends --->

<?php
    include("includes/footer.php")
?>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
</body>
</html>

