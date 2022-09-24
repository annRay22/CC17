<!DOCTYPE html>
<html>
<head>
	<title>PHPArrayExercises2</title>
</head>
<body>
<?php
$Cities = array ("Tokyo", "Mexico City", "New York City", "Mumbai Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London ");
	
	for($i = 0; $i < COUNT($Cities); $i++){
		print $Cities[$i] . ", ";
	}
?>
<?php sort($Cities); ?>

<ul>
<?php
	for ($i = 0; $i < COUNT($Cities); $i++) {
	 	echo "<li>$Cities[$i]</li>";
	}

?>
</ul>

<?php array_push($Cities, "Los Angeles", "Calcutta", "Osaka", "Beijing"); ?>
<?php sort($Cities); ?>

<ul>
<?php
	for ($i = 0; $i < COUNT($Cities); $i++) {
	 	echo "<li>$Cities[$i]</li>";
		}
?>
</ul>
</body>
</html>