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

    /**
     * Вызывает меню
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
    