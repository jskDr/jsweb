<!DOCTYPE html>
<html>
<head>
	<title>PHP Hello</title>
</head>
<body>

<?php
echo "My first PHP script!</br>";

// single line comment
$x = 5 * 10;
echo $x."<br>";
echo "Five is $x<br>";

$colors = array("red", "green", "blue", "yello");
foreach ($colors as $value) {
	echo "$value <br>";
}
?>

</body>
</html>
