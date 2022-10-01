<!DOCTYPE html>
<html>
<head>
	<title>Array Exercises Part2</title>
</head>
<body>
<?php
    $DuplEl = array(5,1,1);
    echo "Test Data: ";
          for ($i = 0; $i < count($DuplEl); $i++) {
               echo "$DuplEl[$i], ";
            }
    echo "</br>Total number of duplicate elements found in the array is : ";
        for ($i = 0; $i < count($DuplEl); $i++) {
             for ($j = $i + 1; $j < count($DuplEl); $j++) {
                if ($DuplEl[$i] == $DuplEl[$j])
                    echo "$DuplEl[$j]";
                }
            }
?>
</body>
</html>