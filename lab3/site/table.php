<?php
  declare(strict_types=1);
  require_once "inc/lib.inc.php";
  require_once "inc/data.inc.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Таблица умножения</title>
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
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form>
      <label>Количество колонок: </label>
      <br>
      <input name='cols' type='text' value=''>
      <br>
      <label>Количество строк: </label>
      <br>
      <input name='rows' type='text' value=''>
      <br>
      <label>Цвет: </label>
      <br>
      <input name='color' type='color' value='#ff0000' list="listColors">
	<datalist id="listColors">
		<option>#ff0000</option>/>
		<option>#00ff00</option>
		<option>#0000ff</option>
	</datalist>
      <br>
      <br>
      <input type='submit' value='Создать'>
    </form>
    <br>
    <!-- Таблица -->
     <?php 
        if (isset($_GET["cols"]) && $_GET["cols"]) {
          $table_width = (int)$_GET["cols"];
        } 
        if (isset($_GET["rows"]) && $_GET["rows"]) {
          $table_height = (int)$_GET["rows"];
        }
        if (isset($_GET["color"]) && $_GET["color"]) {
          $table_color = $_GET["color"];
        }
     ?>
     <?php getTable($table_width, $table_height, $table_color); ?>
    <!-- Таблица -->
    <!-- Область основного контента -->
  </section>
  <nav>
    <h2>Навигация по сайту</h2>
    <!-- Меню -->
    <?php getMenu($menu); ?>
    <!-- Меню -->
  </nav>
  <footer>
    <!-- Нижняя часть страницы -->
    <?php require_once "inc/bottom.inc.php"; ?>
    <!-- Нижняя часть страницы -->
  </footer>
</body>
</html>