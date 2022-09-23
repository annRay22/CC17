<!DOCTYPE html>
<html>
<head>
	<title>PHP Exercise 7</title>
</head>
<body>

<?php
echo "<table border =\"0\" cellpadding='30' cellspacing='1' align='left'>";
	for ($row=1; $row <= 7; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 7; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>

</body>
</html>