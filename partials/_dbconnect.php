<?php

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="dbms1";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo "Failed db connection";
    exit;
}

?>