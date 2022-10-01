<!DOCTYPE html>
<html>
<head>
	<title>Array Exercises Part 2</title>
</head>
<body>
	<h1>Separate Odd Even</h1>
<?php
$OddEven = array(25,47,42,56,32);
            echo "<br/>Test Data: ";
            for ($i = 0; $i < count($OddEven); $i++) {
                echo $OddEven[$i].", ";
            }
            $OddEven_odd = array();
            $OddEven_even = array();
            for ($i = 0; $i < count($OddEven); $i++) {
                if ($OddEven[$i] % 2 == 0) {
                    array_push($OddEven_even, $OddEven[$i]);
                }
                else {
                    array_push($OddEven_odd, $OddEven[$i]);
                }
            }
            echo "<br/>The Even elements are :<br/>";
            for ($i = 0; $i < count($OddEven_even); $i++) {
                echo "$OddEven_even[$i] ";
            }
            echo "<br/>The Odd elements are :<br/>";
            for ($i = 0; $i < count($OddEven_odd); $i++) {
                echo "$OddEven_odd[$i] ";
            }
?>
</body>
</html>