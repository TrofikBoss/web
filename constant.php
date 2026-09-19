<?php
define("constanta", 20);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Константы</title>
</head>
<body>
	<h1>Константы</h1>
	<?php
    if (defined("constanta")) {
        echo constanta . "<br>";
        echo "Константа существует <br>";
    }
    echo PHP_VERSION . "<br>";
    echo __DIR__ . "<br>";
	?>
</body>
</html>