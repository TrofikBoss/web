<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Калькулятор</title>
</head>
<body>

<h1>Калькулятор</h1>

<?php
$num1 = null;
$num2 = null;
$operator = "+";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = (int)$_POST["num1"];
    $num2 = (int)$_POST["num2"];
    $operator = strip_tags($_POST["operator"]);
}

    if (!is_null($num1) && !is_null($num2)) {
        if ($operator == "+") {
            $result = $num1 + $num2;
        }
        if ($operator == "-") {
            $result = $num1 - $num2;
        }
        if ($operator == "*") {
            $result = $num1 * $num2;
        }
        if ($operator == "/") {
            if ($num2 == 0){
                $result = "На ноль делить нельзя <br>";
            } else {
                $result = $num1 / $num2;
            }
        }
    }
    echo $result . "<br>";
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<p><label for="num1">Число 1</label><br>
<input type="text" name="num1" id="num1" required value="<?=$num1?>"></p>

<p><label for="operator">Оператор</label><br>
<select name="operator" id="operator">
    <option value="+" <?php if ($operator == "+") {echo "selected";}?> >+</option>
    <option value="-" <?php if ($operator == "-") {echo "selected";}?>>-</option>
    <option value="*" <?php if ($operator == "*") {echo "selected";}?>>*</option>
    <option value="/" <?php if ($operator == "/") {echo "selected";}?>>/</option>
</select></p>

<p><label for="num2">Число 2</label><br>
<input type="text" name="num2" id="num2" required value="<?=$num2?>"></p>

<button type="submit">Считать!</button>

</form>

</body>
</html>