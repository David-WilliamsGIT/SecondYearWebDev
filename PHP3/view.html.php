<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="displayview.php" method="Post">
<p><label for="personid"> Enter the personid you want to find</label>
<input  type="text" name="personid" id="personid" placeholder = "person id" autocomplete=off 
required value= "" />
</p>
<p><label for= "firstname"> First name  </label>
<input  type="text" name="firstname" id="firstname" placeholder = "first name" disabled 
value= "" />

</p>
<p><label for="surname">Last Name</label>
<input  type="text" name="surname" id="surname" placeholder = "Surname"  disabled 
value= ""/>

</p>
<p><label for="dob">Date Of Birth</label>
<input  type="text" name="dob" id="dob" placeholder = "Date of Birth" disabled 
value= ""/>
</p>
<br> <br>

<input type="submit" value = "Submit" /> 
<p>
</form>
<?php
    if (!ISSET($_SESSION['firtname']) and ISSET($_SESSION['personid'])
        {
            echo '<p sytle="color": red; text-align: center; font-size:20"> No record found for a person
                with id..'.$_SESSION['personid'].'<br> Please try again!</p>';

            unset ($_SESSION['personid']);

        }
?>
</body>
</html>