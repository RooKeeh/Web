<html>
<head>
    <title>Tema</title>
</head>
<body>
<?php
$nr = array("1", "4", "2");
$value = max($nr);
$key = array_search(max($nr), $nr);
$nr[$key] = 1 / $value;
print_r($nr);
?>
</body>
</html>