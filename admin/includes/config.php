<?php

//Database Connection Constants

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gallery_db";

//DB connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if($conn){
    echo "true";
}



?>