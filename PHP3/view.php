<?php
    include'db.inc.php';
    date_default_timezone_set("UTC");

    $sql = "Select * from persons where personid = ".$_POST[personid];

    $result = mysqli_query($con,$sql);

    $rowcount = mysqli_affected_rows($con);

    if ($rowcount == 1)
        {
            echo "<br>The details of the selected persons are <br>";
            $row = mysqli_fetch_array($result);

            echo "The person id is :".$_POST['personid']."<br>";
            echo "First Name is: ";
            echo $row['firstname']."<br>";
            echo "Last Name is:";
            echo $row['lastname']."<br>";

            $date = date_create($row['DOB']);
            echo "Date of Birth is :".date_format($date,"d/m/y");
        }
    else if($rowcount == 0)
        {
            echo "No matching records";
        }
    mysqli_close($con);
?>

<form action="view.html" method="POST">
    <br>
        <input type="submit" value="Return to select page"/>
</form>