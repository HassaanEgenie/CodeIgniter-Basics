<!DOCTYPE HTML>
<html>

<head>

<body>
    <?php echo " that is the way to execute php code in View ";
echo "<br>";

$cars = array(
    "Color" => "Black",
    "Model" => "2010 toyota Corola",
    "Company" => "TOYOTA",
);

foreach ($cars as $key => $value) {
    echo "The keys are" . $key . "and value is" . $value . "<br>";
}
?>
</body>
</head>

</html>