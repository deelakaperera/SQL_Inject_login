<?php
$serv_name = 'localhost';
$uname = 'root';
$pass = '';
$db_name = 'demo123';



$conn = mysqli_connect($serv_name, $uname, $pass, $db_name);
if (!$conn) {
    echo "Error " . mysqli_connect_error();
}
