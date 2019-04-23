<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/17/2019
 * Time: 12:00 AM
 */
?>

<?php
    include ("includes/db.php")
?>



<!DOCTYPE html>
<html>
    <head>
        <title> Insert Products </title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
        <script>tinymce.init({ selector:'textarea' });</script>
    </head>

    <body>

    <div class="row">   <!--- row Starts --->
        <div class="col-lg-12"> <!--- col-lg-12 Starts --->
            <ol class="breadcrumb">     <!--- breadcrumb Starts --->
                <li class="active">
                    <i clas s="fa fa-dashboard"></i> Dashboard / Insert Product
                </li>
            </ol>   <!--- breadcrumb Ends --->
        </div>  <!--- col-lg-12 Ends --->
    </div>  <!--- row Ends --->

    <div class="row">   <!--- row 2 Starts --->
        <div class="col-lg-12">     <!--- col-lg-12 Starts --->
            <div class="panel panel-default">   <!--- panel panel-default Starts --->
                <div class="panel-heading">     <!--- panel-heading Starts --->
                    <h3 class="panel-title">
                        <i class="fa fa-money fa-fw"></i> Insert Products
                    </h3>
                </div>  <!--- panel-heading Ends --->
                <div class="panel-body">    <!--- panel-body Starts --->
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">      <!--- form-horizontal Starts --->
                        <div class="form-group">    <!--- form-group Starts --->
                            <label class="col-md-3 control-label"> Product Title</label>
                            <div class="col-md-6">
                                <input type="text" name="product_title" class="form-control" required>
                            </div>
                        </div>  <!--- form-group Ends --->
                        <div class="form-group">    <!--- form-group Starts --->
                            <label class="col-md-3 control-label"> Product Category</label>
                            <div class="col-md-6">
                                <select name="product_cat" class="form-control">
                                    <option> Select a Product Category</option>
                                    <?php
                                        $get_p_cats = "select * from product_categories";
                                        $run_p_cats = mysqli_query($connect, $get_p_cats);
                                        while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {
                                            $p_cat_id = $row_p_cats['p_cat_id'];
                                            $p_cat_title = $row_p_cats['p_cat_title'];
                                            echo "<option value='$p_cat_id'>$p_cat_title</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>  <!--- form-group Ends --->
                        <div class="form-group">    <!--- form-group Starts --->
                            <label class="col-md-3 control-label"> Category</label>
                            <div class="col-md-6">
                                <select name="cat" class="form-control">
                                    <option> Select a Category</option>
                                    <?php
                                        $get_cat = "select * from categories";
                                        $run_cat = mysqli_query($connect, $get_cat);
                                        while ($row_cat = mysqli_fetch_array($run_cat)) {
                                            $cat_id = $row_cat['cat_id'];
                                            $cat_title = $row_cat['cat_title'];
                                            echo "<option value='$cat_id'>$cat_title</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>  <!--- form-group Ends --->
                        <div class="form-group">    <!--- form-group Starts --->
                            <label class="col-md-3 control-label"> Product Image 1</label>
                            <div class="col-md-6">
                                <input type="file" name="product_img1" class="form-control" required>
                            </div>
                        </div>  <!--- form-group Ends --->


                        <div class="form-group">    <!--- form-group Starts --->
                            <label class="col-md-3 control-label"> Product Image 2</label>
                            <div class="col-md-6">
                                <input type="file" name="product_img2" class="form-control" required>
                            </div>
                        </div>  <!--- form-group Ends --->

                        <div class="form-group">    <!--- form-group Starts --->
                            <label class="col-md-3 control-label"> Product Image 3</label>
                            <div class="col-md-6">
                                <input type="file" name="product_img3" class="form-control" required>
                            </div>
                        </div>  <!--- form-group Ends --->
                        <div class="form-group">    <!--- form-group Starts --->
                            <label class="col-md-3 control-label"> Product Price</label>
                            <div class="col-md-6">
                                <input type="text" name="product_price" class="form-control" required>
                            </div>
                        </div>  <!--- form-group Ends --->
                        <div class="form-group">    <!--- form-group Starts --->
                            <label class="col-md-3 control-label"> Product Keywords</label>
                            <div class="col-md-6">
                                <input type="text" name="product_keywords" class="form-control" required>
                            </div>
                        </div>  <!--- form-group Ends --->
                        <div class="form-group">    <!--- form-group Starts --->
                            <label class="col-md-3 control-label"> Product Description</label>
                            <div class="col-md-6">
                                 <textarea name="product_desc" class="form-control" rows="6" cols="20"></textarea>
                            </div>
                        </div>  <!--- form-group Ends --->
                        <div class="form-group">    <!--- form-group Starts --->
                            <label class="col-md-3 control-label"> </label>
                            <div class="col-md-6">
                                <input type="submit" name="submit" value="Insert Product" class="btn btn-primary form-control">
                            </div>
                        </div>  <!--- form-group Ends --->

                    </form>     <!--- form-horizontal Ends --->
                </div>      <!--- panel-body Ends --->
            </div>      <!--- panel panel-default Ends --->
        </div>  <!--- col-lg-12 Ends --->
    </div>  <!--- row 2 Ends --->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>

<?php
    if (isset($_POST['submit'])) {
        $product_title = $_POST['product_title'];
        $product_cat = $_POST['product_cat'];
        $cat = $_POST['cat'];
        $product_price = $_POST['product_price'];
        $product_desc = $_POST['product_desc'];
        $product_keywords = $_POST['product_keywords'];

        $product_img1 = $_FILES['product_img1']['name'];
        $product_img2 = $_FILES['product_img2']['name'];
        $product_img3 = $_FILES['product_img3']['name'];

        $temp_name1 = $_FILES['product_img1']['temp_name'];
        $temp_name2 = $_FILES['product_img2']['temp_name'];
        $temp_name3 = $_FILES['product_img3']['temp_name'];

        move_uploaded_file($temp_name1,"product_images/$product_img1");
        move_uploaded_file($temp_name2,"product_images/$product_img2");
        move_uploaded_file($temp_name3,"product_images/$product_img3");

        $insert_product = "INSERT INTO products(p_cat_id,cat_id,date,product_title,product_img1,product_img2,product_img3,product_price,product_desc,product_keywords) VALUES ('$product_cat','$cat',NOW(),'$product_title','$product_img1','$product_img2','$product_img3','$product_price','$product_desc','$product_keywords')";

        $run_product = mysqli_query($connect,$insert_product);
        if($run_product) {
            echo "<script>alert('Product has been inserted successfully</script>";
            echo "<script>window.open('insert_product.php','_self')</script>";
        }
    }
?>