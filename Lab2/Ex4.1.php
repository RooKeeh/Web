<html>
<head>
    <title>Exemplu pentru tipurile de variabile PHP</title>
</head>
<body>
<?php
echo "<h3>Numar intreg</h3>";
$an = 2020;
echo "An curent: ";
echo $an;
?>
<br>
<?php
echo "<h3>Numar real</h3>";
$pi = 3.1415926;
echo "<em>Pi</em> (&pi;) este: ";
echo $pi;
?>
<br>
<?php
echo "<h3>Sir de caractere si concatenare</h3>";
$sir = "Buna, eu sunt:";
$x = "POP VIOREL";
echo $sir . " " . $x;
$nume = "Unchiul Vanea";
$nascut = 1961;
$tara = "Romania";
echo "<br>Buna ziua, numele meu este: <b>";
echo $nume;
echo "</b>";
echo "<p/>";
echo "Sunt un personaj de roman: <br>";
echo "<em>" . $tara . "</em>";
echo "<p/>";
echo "Eu am <b>";
echo(2013 - $nascut);
echo "</b> de ani.";
?>
<br>
<?php
echo "<h3>Numele de variabile sunt case sensitive</h3>";
$nume = "Aici se memorează un text";
$Nume = "Aici se memorează un alt text";
echo $nume;
echo "<br>";
echo $Nume;
?>
</body>
</html>