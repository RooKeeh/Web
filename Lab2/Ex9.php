<html>
<head><title>Testarea tipului variabilelor</title></head>
<body>
<?php
$test = 0;
echo gettype($test);
echo "<br>";
$test = 8;
echo gettype($test);
echo "<br>";
$test = 9.8;
echo gettype($test);
echo "<br>";
$test = "curs";
echo gettype($test);
echo "<br>";
$test = true;
echo gettype($test);
echo "<br>";
?>
</body>
</html>