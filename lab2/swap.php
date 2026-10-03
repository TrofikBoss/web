<?php declare(strict_types = 1); ?>
<?php
$a = 10;
$b = 5;

$swap = function(&$one, &$two) {
	$three = $one;
    $one = $two;
    $two = $three;
};



$swap($a, $b);

echo "a = ".$a." b = ".$b;

/**
 * @param array &$mass Массив значений, которые должны быть изменены. 
 * @param callable $callback Функция, которая должна быть применена ко всем элементам массива.
 * 
 * @return void;
 */
function map(array &$mass, callable $callback): void {
	foreach ($mass as &$item) {
    	$item = $callback($item);
    }
};

$mass = [3, 6, 9, 12, 15, 18, 21];
$f = function($arg) { 
    return $arg * $arg;
};
map($mass, $f);
print_r($mass);