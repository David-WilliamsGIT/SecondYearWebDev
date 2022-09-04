<?php
$hostname = "localhost";
$username = "C00263768";
$password = "Tool1jambi!";

$dbname = "MyDBC00263768";

$con = mysqli_connect($hostname,$username,$password, $dbname);

if(!$con)
    {
        die "Failed to connect to MySQL: ". mysqli_connect_error();
    }
?>