<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$variable = 8;
echo "Value is now $variable";
	echo "<br />";

$variable += 2;
echo "Add 2. Value is now $variable";
	echo "<br />";

$variable -= 4;
echo "Subtract 4. Value is now $variable";
	echo "<br />";

$variable *= 5;
echo "Multiply by 5. Value is now $variable";
	echo "<br />";

$variable /= 3;
echo "Divide by 3. Value is now $variable";
	echo "<br />";

$variable = ++$variable;
echo "Increment value by one. Value is now $variable";
	echo "<br />";

$variable = --$variable;
echo "Decrement value by one. Value is now $variable";

?>
</body>
</html>