<html>
<head>
    <title>Schimbarea tipului variabilelor</title>
</head>
<body>
<?php
$test = 9.8;
echo gettype($test);
echo " ";
echo "este $test <br>";
settype($test, 'string');
echo gettype($test);
echo " ";
echo "este $test <br>";
settype($test, 'integer');
echo gettype($test);
echo " ";
echo "este $test <br>";
settype($test, 'double');
echo gettype($test);
echo " ";
echo "este $test <br>";
settype($test, 'boolean');
echo gettype($test);
echo " ";
echo "este $test <br>";
?>
</body>
</html>