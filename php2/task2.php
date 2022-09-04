<?php
$height = $_POST["height"];
$weight = $_POST["weight"];
$bmi = ($weight / ($height * $height));

echo "your height is ".$height."m and your weight is ".$weight." kgs."."<br>";
echo "your bmi is ".$bmi;
?>