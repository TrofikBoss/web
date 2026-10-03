<?php declare(strict_types = 1); ?>
<?php
    
	/**
	 * Генерирует таблицу умножения определённого размера и цвета
	 * 
	 * @param int $cols Количество столбцов в генерируемой таблице (по умолчанию 10)
	 * @param int $rows Количество строк в генерируемой таблице (по умолчанию 10)
	 * @param string $color Цвет главных ячеек (по умолчанию "yellow")
	 * 
	 * @return int $count Количество вызовов функции;
	 */
    function getTable(int $cols = 10, int $rows = 10, string $color = "yellow"): int {
    	static $count = 0;
        echo "<table><tbody>";
        for ($i = 0; $i < $rows; $i++) {
        	echo "<tr>";
            for ($j = 0; $j < $cols; $j++) {
            	if ($i == 0 || $j == 0) {
                	echo "<th style='background-color: ".$color."'>" . ($i + 1) * ($j + 1) . "</th>";
                } else {
            		echo "<td>" . ($i + 1) * ($j + 1) . "</td>";
            	}
            }
            echo "</tr>";
        } 
	    echo "</tbody></table>";
        $count = $count + 1;
        return $count;
    }
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
	<?php
    getTable(5, 6, "red");
    echo "<hr>";
    getTable();
    echo "<hr>";
    getTable(14);
    echo "<hr>";
	$count1 = getTable(7, 8);
    echo "<hr>";
    echo "Таблица была отрисована " . $count1 . " раза";
	?> 
</body>
</html>