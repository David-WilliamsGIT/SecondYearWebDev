
<?php
echo $_POST["feet"]." feet and ".$_POST["inches"]." inches.<br>";

$HeightInInches = 0;
$HeightInCms = 0.0;
$FormattedNumber = 0.0;

$HeightInInches = $_POST["feet"] * 12 + $_POST["inches"];
echo "You are".$HeightInInches." inches "."<br>";
$HeightInCms = $HeightInInches / 0.39370;
$FormattedNumber = number_format($HeightInCms, 2);

echo "you are "."$FormattedNumber"." cms."."<br>";

if ($HeightInInches > 75) {
    echo "My, you are tall!!";
}
?>