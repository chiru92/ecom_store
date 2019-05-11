<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/12/2019
 * Time: 1:27 AM
 */

?>

<div class="panel panel-default sidebar-menu">  <!--- panel panel-default sidebar-menu Starts--->
    <div class="panel-heading"> <!--- panel-heading Starts --->
        <h3 class="panel-title"> Products Categories </h3>
    </div>  <!--- panel-heading Ends --->
    <div class="panel-body">    <!--- panel-body Starts --->
        <ul class="nav nav-pills nav-stacked category-menu">    <!--- nav nav-pills nav-stacked category-menu Starts --->
<!--            <li><a href="shop.php">Jackets</a> </li>-->
<!--            <li><a href="shop.php">Accessories</a> </li>-->
<!--            <li><a href="shop.php">Shoes</a> </li>-->
<!--            <li><a href="shop.php">Coats</a> </li>-->
<!--            <li><a href="shop.php">T-Shirts </a> </li>-->

            <?php
                getPCats();
            ?>
        </ul>   <!--- nav nav-pills nav-stacked category-menu Ends --->
    </div>  <!--- panel-body Ends --->
</div> <!--- panel panel-default sidebar-menu Ends --->



<div class="panel panel-default sidebar-menu">  <!--- panel panel-default sidebar-menu Starts--->
    <div class="panel-heading"> <!--- panel-heading Starts --->
        <h3 class="panel-title"> Products Categories </h3>
    </div>  <!--- panel-heading Ends --->
    <div class="panel-body">    <!--- panel-body Starts --->
        <ul class="nav nav-pills nav-stacked category-menu">    <!--- nav nav-pills nav-stacked category-menu Starts --->
<!--            <li><a href="shop.php">Men</a> </li>-->
<!--            <li><a href="shop.php">Women</a> </li>-->
<!--            <li><a href="shop.php">Kids</a> </li>-->
<!--            <li><a href="shop.php">Others</a> </li>-->
<!--            <li><a href="shop.php">T-Shirts </a> </li>-->

            <?php
                getCats();
            ?>
        </ul>   <!--- nav nav-pills nav-stacked category-menu Ends --->
    </div>  <!--- panel-body Ends --->
</div> <!--- panel panel-default sidebar-menu Ends --->
