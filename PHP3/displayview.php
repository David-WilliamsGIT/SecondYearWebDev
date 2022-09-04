<?php
session_start();
include 'db.inc.php'

$sql = "Select * from persons where personid = ".$_POST['personid'];

if (!$result = mysqli_query($con,$sql))
    {
        die ('Error in querying the databas'.mysqli_error($con));
    }

    $rowcount = mysqli_affected_rows($con);
    $_SESSION['persomid']=$_POST['personid'];

    if ($rowcount == 1)
        {
            $row = mysqli_fetch_array($result);

            $_SESSION['personid'] = $row ['personID'];
            $_SESSION['firstname'] = $row ['firstname'];
            $_SESSION['lastname'] = $row ['lastname'];
            $_SESSION['dob'] = $row ['DOB'];
        }
    else if ($rowcount == 0)
        {
            unset ($_SESSION['firstname']);
            unset ($_SESSION['lastname']);
            unset ($_SESSION['dob']);
        }
    mysqli_close($con);
    header('Location: view.html.php')
?>