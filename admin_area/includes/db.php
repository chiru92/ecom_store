<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/15/2019
 * Time: 2:31 PM
 */

//$con = mysqli_connect("localhost", "root", "", "ecom_store");
// Inserting data into table
//define("DB_SERVER", "localhost");
//define("DB_USER", "root");
//define("DB_PASSWORD", "");
//define("DB_DATABASE", "ecom_store");
//
//$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
//if($con){
//    echo "Connection Made";
//}

$dbname = 'ecom_store';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';
$connect = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
$con = mysqli_select_db($connect,$dbname) or die("Could not open the db '$dbname'");
//$test_query = "SHOW TABLES FROM $dbname";
$test_query = "USE $dbname";
$result = mysqli_query($connect,$test_query);

//$tblCnt = 0;
//while($tbl = mysqli_fetch_array($result)) {
//    $tblCnt++;
//    #echo $tbl[0]."<br />\n";
//}
//if (!$tblCnt) {
//    echo "There are no tables<br />\n";
//} else {
//    echo "There are $tblCnt tables<br />\n";
//}
//?>