<?php
    declare(strict_types=1);
    $login = '   User   ';
    $password = 'megaP@ssw0rd';
    $name = 'иван';
    $email = 'ivan@petrov.ru';
    $code = '<?=$login?>';
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Использование функций обработки строк</title>
</head>
<body>


<?php
    /**
     * Проверяет пароль на наличие большой буквы, маленькой буквы, цифры и длины 8 и более символов.
     * @param string $password проверяемый пароль
     * 
     * @return void
     */
    function checkPassword(string $password): void {
        if (!preg_match('/\p{Lu}/', $password)) { // регулярные выражения, чтобы проверять пароли на разных языках. не знаю, надо ли.
            echo "Пароль должен содержать заглавную букву<br>";
        }
        if (!preg_match('/\p{Ll}/', $password)) {
            echo "Пароль должен содержать маленькую букву<br>";
        }
        if (!preg_match('/\p{Nd}/', $password)) {
            echo "Пароль должен содержать цифру<br>";
        }
        if (strlen($password) < 8) {
            echo "Пароль должен быть длиной 8 и более символов<br>";
        }
    };


    $login = preg_replace("/^\s+/", "", $login); // регулярные выражения, ещё.
    $login = preg_replace("/\s+$/", "", $login);
    //$login = strtolower($login);
    
    echo "Логин:";
    echo "<pre>" . $login . "</pre>";
    echo "Длина логина:" . strlen($login) . "<br>";
    echo "Пароль:<br>" . $password . "<br>";
    checkPassword($password);

    $s1 = mb_strtoupper(mb_substr($name, 0, 1));
    $name = $s1 . mb_substr($name, 1);
    
    echo "Имя:<br>" . $name . "<br>";

    echo "Email:<br>" . $email . "<br>";
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
        echo "Email проверку прошёл<br>";
    } else {
        echo "Email проверку не прошёл<br>";
    }
    echo htmlspecialchars($code, ENT_QUOTES, 'UTF-8');
?>
</body>
</html>