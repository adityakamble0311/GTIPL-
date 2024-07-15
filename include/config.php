<?PHP
$servername = "65.108.74.236";
$username = "growmore_gtipl_user";
$password = "Aditya@1207@";
$dbname = "growmore_gtipl_db";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else{

    /* echo "Database connected Sucessfully..."; */

}
date_default_timezone_set('Asia/Kolkata'); 


$date = new DateTime('now');

$time_stamp = $date->format('Y-m-d H:i:s');

// echo $timestamp;
?> 