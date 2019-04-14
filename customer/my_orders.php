<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/14/2019
 * Time: 2:58 AM
 */
?>

<center>    <!--- center Starts --->
    <h1>My Orders</h1>
    <p class="lead">Your orders on one place.</p>
    <p class="text-muted">
        If you hve any questions, please feel free to <a href="../contact.php">contact us</a>, our customer service center is working for you 24x7.
    </p>
</center>   <!--- center Ends --->
<hr>
<div class="table-responsive">  <!--- table-responsive Starts --->
    <table class="table table-bordered table-hover">    <!--- table table-bordered table-hover Starts --->
        <thead> <!--- thead Starts --->
            <tr>
                <th>O N:</th>
                <th>Due Amount:</th>
                <th>Invoice  No:</th>
                <th>Qty:</th>
                <th>Size:</th>
                <th>Order Date:</th>
                <th>Paid/Unpaid</th>
                <th>Status:</th>
            </tr>
        </thead>    <!--- thead Ends --->
        <tbody>     <!--- tbody Starts --->
            <tr>       <!--- tr Starts --->
                <th>#2</th>
                <td>$80</td>
                <td>669635</td>
                <td>2</td>
                <td>2017 or Older</td>
                <td>2019-03-05</td>
                <td>Unpaid</td>
                <td>
                    <a href="confirm.php" target="_blank" class="btn btn-primary btn-sm">Confirm If Paid</a>
                </td>
            </tr>       <!--- tr Ends --->
            <tr>       <!--- tr Starts --->
                <th>#1</th>
                <td>$80</td>
                <td>669635</td>
                <td>2</td>
                <td>2017 or Older</td>
                <td>2019-03-05</td>
                <td>Unpaid</td>
                <td>
                    <a href="confirm.php" target="_blank" class="btn btn-primary btn-sm">Confirm If Paid</a>
                </td>
            </tr>       <!--- tr Ends --->
        </tbody>    <!--- tbody Ends --->
    </table>    <!--- table table-bordered table-hover Ends --->
</div>  <!--- table-responsive Ends --->
