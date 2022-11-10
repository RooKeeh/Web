<html>
<head>
    <title> Schimbarea tipului variabilelor prin casting</title>
</head>
<body>
<?php
$test = 9.8;
$casting = (double)$test;
echo gettype($casting);
echo " ";
echo "este $casting <br>";
$casting = (string)$test;
echo gettype($casting);
echo " ";
echo "este $casting <br>";
$casting = (integer)$test;
echo gettype($casting);
echo " ";
echo "este $casting <br>";
$casting = (double)$test;
echo gettype($casting);
echo " ";
echo "este $casting <br>";
$casting = (boolean)$test;
echo gettype($casting);
echo " ";
echo "este $casting <br>";
echo "<hr>";
echo "Tipul variabilei originale este:";
echo gettype($test);
echo " ";
echo "Valoarea variabilei initiale este: $test";
?>
</body>
</html>