<!DOCTYPE html>
<html>
<head>
	<title>Array Exercises Part 2</title>
</head>
<body>
<?php
$FreqCo = array(25,12,43);
            echo "<br/><br/>Test Data: ";
            for ($i = 0; $i < count($FreqCo); $i++) {
                echo $FreqCo[$i].", ";
            }
            echo "</br>Frequency :</br>";
            for ($i = 0, $unique = array(); $i < count($FreqCo); $i++) {
                $frequency = 0;
                if (!in_array($FreqCo[$i], $unique)) {
                    array_push($unique, $FreqCo[$i]);
                }
                for ($j = 0; $j < count($FreqCo); $j++) {
                    if ($unique[$i] == $FreqCo[$j]) {
                        $frequency++;
                    }
                }
                if ($unique[$i]) {
                    echo "$unique[$i] occurs $frequency times<br/>";
                }
            }

?>
</body>
</html>