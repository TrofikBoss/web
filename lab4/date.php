<?php
    declare(strict_types=1);
    $now = date("Y-m-d", time());
    $birthday = mktime(6, 0, 0, 1, 5, 2006);
    $hour = time();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Использование функций даты и времени</title>
</head>
<body>
	<h1>Использование функций даты и времени</h1>
	<?php
		$hour_int = (int)date("H", $hour);
		$welcome;
		if (0 >= $hour_int && $hour_int < 6) {
			$welcome = "Доброй ночи";
		} elseif (6 >= $hour_int && $hour_int < 12) {
			$welcome = "Доброе утро";
		} elseif (12 >= $hour_int && $hour_int < 18) {
			$welcome = "Добрый день";
		} elseif (18 >= $hour_int && $hour_int < 23) {
			$welcome = "Добрый вечер";
		} else {
			$welcome = "Доброй ночи";
		}
		echo $welcome . "<br>";
		setlocale(LC_ALL, "ru_RU.UTF-8");


		$fmt = new IntlDateFormatter(
			'ru_RU',
			IntlDateFormatter::LONG,
			IntlDateFormatter::SHORT,
			'Europe/Moscow',
			IntlDateFormatter::GREGORIAN,
			"Сегодня d MMMM Y года, EEEE H:mm:ss"
		);

		echo $fmt->format(new DateTime());
		echo "<br>";

		$birthday2 = mktime(6, 0, 0, 1, 5, 2027);
		$time2 = $birthday2 - time();
		$time2_days = $time2 / 60 / 60 / 24;
		$time2_hours = fmod($time2_days, 1) * 24;
		$time2_minutes = fmod($time2_hours, 1) * 60;
		$time2_seconds = fmod($time2_minutes, 1) * 60;

		echo "До моего дня рождения осталось " . round($time2_days) . " дней ", round($time2_hours) . " часов ", round($time2_minutes) . " минут ", round($time2_seconds) . " секунд<br>";
	?>
</body>
</html>