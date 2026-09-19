<?php

$bmw = array("model" => "X5", "speed, km/h" => 120, "doors" => 5, "year" => 2006);
$toyota = array("model" => "Carina", "speed, km/h" => 130, "doors" => 4, "year" => 2007);
$opel = array("model" => "Corsa", "speed, km/h" => 140, "doors" => 5, "year" => 2007);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Массивы</title>
</head>
<body>
	<h1>Массивы</h1>
	<?php
	function a($obj) {
	    echo $obj["model"] . " - " . $obj["speed, km/h"] . " - " . $obj["doors"] . " - " . $obj["year"] . "<br>";
	}
	a($bmw);
	a($toyota);
	a($opel);
	?>

</body>
</html>