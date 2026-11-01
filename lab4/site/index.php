<?php
  declare(strict_types=1);
  require_once "inc/lib.inc.php";
  require_once "inc/data.inc.php";

  // Инициализация заголовков страницы
  $title = "Сайт нашей школы";

  $hour = time();
  $hour_int = (int)date("H", $hour);
  $welcome = "";
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
  $header = "$welcome, Гость!";
  $id = strtolower(strip_tags(trim($_GET["id"] ?? '')));
  switch ($id) {
    case 'about':
      $title = "О сайте";
      $header = "О нашем сайте";
      break;
    case "contact":
      $title = "Контакты";
      $header = "Обратная связь";
      break;
    case 'table':
		  $title = 'Таблица умножения';
		  $header = 'Таблица умножения';
		  break;
	  case 'calc':
		  $title = 'Он-лайн калькулятор';
		  $header = 'Калькулятор';
		  break; 
  }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <!-- Верхняя часть страницы -->
    <?php require_once "inc/top.inc.php"; ?>
    <!-- Верхняя часть страницы -->
  </header>

  <section>
    <!-- Заголовок -->
    <h1><?=$welcome;?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
    switch($id){
      case 'about': 
        include 'about.php';
        break;
      case 'contact':
        include 'contact.php';
        break;
      case 'table':
        include 'table.php';
        break;
      case 'calc':
        include 'calc.php';
        break;
      default:
        include 'inc/index.inc.php'; 
    }
    ?>
    <!-- Область основного контента -->
  </section>
  <nav>
    <!-- Навигация -->
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
     <?php getMenu($menu); ?>
    <!-- Меню -->
    <!-- Навигация -->
  </nav>
  <footer>
    <!-- Нижняя часть страницы -->
    <?php require_once "inc/bottom.inc.php"; ?>
    <!-- Нижняя часть страницы -->
  </footer>
</body>
</html>
