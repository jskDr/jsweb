<html>
<body>

X = <?php echo $_POST["X"]; ?><br>
Y = <?php echo $_POST["Y"]; ?><br>
Z = <?php echo $_POST["Z"]; ?><br>

<?php
$X = (int) $_POST["X"];
$Y = (int) $_POST["Y"];
$Z = (int) $_POST["Z"];
$Z_calc = $X * $Y;
if ($Z == $Z_calc) {
	echo "Your answer is correct.<br>";
}
else {
	echo "The correct answer is $Z_calc. <br>";
}
?>

</body>
</html>
