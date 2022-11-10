<html>
<head>
    <title>Operatorii aritmetici</title>
</head>
<body>
<?php
$an = date("Y");
echo "An: <b>$an</b> <br>";
$an = ($an + 1);
echo "An urmator: <b>$an</b>";
?>
<br>
<?php
$an = 2020;
echo "An: <b>$an</b> <br>";
$an = ($an + 1);
echo "An urmator: <b>$an</b>";
?>
<br>
<?php
$rate = 7.5;
$euro = 100;
echo "Pentru <b>$euro</b> EUR, se primeste";
$moneda = ($euro * $rate);
echo "<b>$moneda</b> DKK.";
?>
6
<br>
<?php
$rate = 7.5;
$moneda = 100;
echo "Pentru <b>$moneda</b> EUR, se primeste";
$euro = ($moneda / $rate);
echo "<b>$euro</b> DKK.";
?>
<br>
<?php
$rate = 7.5;
$moneda = 100;
echo "Pentru <b>$moneda</b> EUR, se primeste";
$euro = ($moneda / $rate);
$rotunjire = round($euro);
echo "<b>$rotunjire</b> DKK.";
?>
<br>
<?php
$x = 2;
$y = 5;
$rezultat = ((1 + (2 - $x)) * ($y / 2));
echo "Rezultatul este: <b>$rezultat</b>";
?>
<br>
<?php
$x = 7;
echo " ‘x’ este: <b>$x</b>";
echo "<p/>";
$x++;
echo " ‘x’ este: <b>$x</b>";
?>
<br>
<?php
$x = 2;
$y = 1;
$rezultat = ($x > $y);
echo "Rezultatul este: <b>$rezultat</b>";
?>
</body>
</html>