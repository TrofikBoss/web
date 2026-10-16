<?php declare(strict_types=1); ?>
<pre>
<?php
$constants = get_defined_constants(); 
$array = ["Core" => $constants];
print_r($array);
?>
<pre>