<?php
$age = 20;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Конструкции if-elseif-else</title>
</head>
<body>
	<h1>Конструкции if-elseif-else</h1>
	<?php
	if ($age >= 18 && $age <= 59) {
	    echo "Вам ещё работать и работать<br>";
	} else if ($age > 59) {
	    echo "Вам пора на пенсию<br>";
	} else if ($age >= 1 && $age < 18) {
	    echo "Вам ещё рано работать<br>";
	} else {
	    echo "Неизвестный возраст<br>";
	}
	?> 
</body>
</html>