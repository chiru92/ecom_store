<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/22/2019
 * Time: 3:46 PM
 */
    $dbname = 'ecom_store';
    $dbuser = 'root';
    $dbpass = '';
    $dbhost = 'localhost';
    $db = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
    $con = mysqli_select_db($db,$dbname) or die("Could not open the db '$dbname'");

    //$db = mysqli_connect("localhost","root","","ecom_store");
    function getPro() {
        global $db;

        $get_products = "select * from products order by 1 DESC LIMIT 0,10";

        $run_products = mysqli_query($db, $get_products);
        while ($row_products=mysqli_fetch_array($run_products)) {
            $pro_id = $row_products['product_id'];
            $pro_title = $row_products['product_title'];
            $pro_price = $row_products['product_price'];
            $pro_img1 = $row_products['product_img1'];

            echo "
                <div class='col-md-4 col-sm-6 single'>
                    <div class='product'>
                        <a href='details.php?pro_id-$pro_id'>
                            <img src='admin_area/product_images/$pro_img1' class='img-responsive'>
                        </a>
                    </div>
                    <div class='text'>
                        <h3><a href='details.php?pro_id-$pro_id'>
                            $pro_title
                        </a> </h3>
                        <p class='price'> $pro_price</p>
                        <p class='buttons'>
                            <a href='details.php?pro_id-$pro_id' class='btn btn-default'>View details</a>
                            <a href='details.php?pro_id-$pro_id' class='btn btn-primary'>
                                <i class='fa fa-shopping-cart'></i>
                            </a>
                        </p>
                    </div>
                </div>
            ";
        }

    }
?>


