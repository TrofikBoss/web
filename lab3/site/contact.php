<?php
  declare(strict_types=1);
  require_once "inc/lib.inc.php";
  require_once "inc/data.inc.php";
?>

<!DOCTYPE html>
<html>

<head>
  <title>Контакты</title>
  <meta charset="utf-8">
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
    <h1>Обратная связь</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <h3>Адрес</h3>
    <address>123456 Москва, Малый Американский переулок 21</address>
    <h3>Задайте вопрос</h3>
    <form method='post'>
      <label>Тема письма: </label>
      <br>
      <input name='subject' type='text' size="50">
      <br>
      <label>Содержание: </label>
      <br>
      <textarea name='body' cols="50" rows="10"></textarea>
      <br>
      <br>
      <input type='submit' value='Отправить'>
    </form>
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