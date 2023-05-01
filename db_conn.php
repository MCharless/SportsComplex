<?php
$s_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "sportscomplex";
$conn = mysqli_connect($s_name, $user_name, $password, $db_name);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}
    echo ""

?>
