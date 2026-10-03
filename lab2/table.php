<?php declare(strict_types = 1); ?>
<?php
	$cols = 8;
    $rows = 9;
	?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Таблица умножения</title>
	<style>
		table {
			border: 2px solid black;
			border-collapse: collapse;
		}

		th,
		td {
			padding: 10px;
			border: 1px solid black;
		}

		th {
			background-color: yellow;
		}
	</style>
</head>
<body>
	<h1>Таблица умножения</h1>
    <table><tbody>
	<?php
    for ($i = 0; $i < $rows; $i++) {
    	echo "<tr>";
        for ($j = 0; $j < $cols; $j++) {
        	if ($i == 0 || $j == 0) {
            	echo "<th>" . ($i + 1) * ($j + 1) . "</th>";
            } else {
        		echo "<td>" . ($i + 1) * ($j + 1) . "</td>";
        	}
        }
        echo "</tr>";
    } 
	?> </tbody></table>
</body>
</html>