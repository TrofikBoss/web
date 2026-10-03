<?php
	$leftMenu = [["link" => "Домой", "href" => "index.php"],
    ["link" => "О нас", "href" => "about.php"],
    ["link" => "Контакты", "href" => "contact.php"],
    ["link" => "Таблица умножения", "href" => "table.php"],
    ["link" => "Калькулятор", "href" => "calc.php"]];

	/**
     * Undocumented function
     * @param array $menu массив, содержащий структуру меню
     * @param bool $vertical указывает, будет ли отсортировано меню по вертикали или нет (по умолчанию true)
     * 
     * @return void
     */
	function getMenu(array $menu, bool $vertical = true): void {
    	echo "<ul";
        if ($vertical == false) {
        	echo " class='horizontal'";
        };
        echo ">";
        foreach ($menu as $item) {
        	echo "<li><a href = '" . $item["href"] . "'>" . $item["link"] . "</a></li>";
        }
        echo "</ul>";
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Меню</title>
	<style>
		.menu {
			list-style-type: none;
			margin: 0;	
			padding: 0;
		}

		.horizontal li {
			display: inline;
			padding: 5px
		}
	</style>
</head>
<body>
	<h1>Меню</h1>
	<?php
    getMenu($leftMenu, false);
	/*
	ЗАДАНИЕ 3
	- Отрисуйте вертикальное меню вызывая функцию getMenu() с одним параметром
	*/
	/*
	ЗАДАНИЕ 4
	- Отрисуйте горизонтальное меню вызывая функцию getMenu() со вторым параметром равным false
	*/
	?> 
</body>
</html>