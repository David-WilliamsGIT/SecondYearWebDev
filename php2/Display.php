<?php
$hostname = "localhost";
$username = "C00263768";
$password = "Tool1jambi!";

$dbname = "MyDBC00263768";

$con = mysqli_connect($hostname,$username,$password, $dbname);

if(!$con)
    {
        echo "Failed to connect to MySQL: ". mysqli_connect_error();
    }

$sql = "Select * from Student";

$result = mysqli_query($con,$sql);

echo "<br>The Student table contains the following records:<br>";

while($row=mysqli_fetch_array($result))
    {
        echo $row["StudentID"]." ".$row["StudentName"]."<br>";
    }

    mysqli_close($con);
?>