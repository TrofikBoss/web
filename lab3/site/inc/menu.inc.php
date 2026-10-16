<h2>Навигация по сайту</h2>
    <!-- Меню -->
    <?php 
    $menu = [["href" => "index.php", "link" => "Домой"], ["href" => "about.php", "link" => "О нас"],
    ["href" => "contact.php", "link" => "Контакты"], ["href" => "table.php", "link" => "Таблица умножения"],
    ["href" => "calc.php", "link" => "Калькулятор"]];
    getMenu($menu); 
?>