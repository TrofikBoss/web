<?php declare(strict_types=1); ?>
<h1>Загруженные модули</h1>
<br>
<pre>
<?php
$extension = get_loaded_extensions();
$func_count = 0;

foreach($extension as $key => $value) {
    echo "<h2>" . $value . "</h2><br>";
    print_r(get_extension_funcs($value));
    if (get_extension_funcs($value)) {
        $func_count += (int)count(get_extension_funcs($value));
    }
}

echo "Общее количество функций: " . $func_count . "<br>";
?>
</pre>