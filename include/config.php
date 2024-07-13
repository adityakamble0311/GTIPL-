<?PHP
$servername = "localhost";
$username = "growmore_user";
$password = "Aditya@2707@";
$dbname = "growmore_db";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else{

    echo "Database connected Sucessfully...";

}
date_default_timezone_set('Asia/Kolkata'); 


$date = new DateTime('now');

$time_stamp = $date->format('Y-m-d H:i:s');

echo $timestamp;
?> 