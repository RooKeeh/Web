<html>
<head>
    <title>Calculul lui n! </title>
</head>
<body>
<form action="Ex12.php" method="POST">
    A: <input type="text" name="a"/>
    <input type="submit" name="submit"/>
</form>
<?php
if (isset($_POST['submit'])) {
    $n = trim($_POST['a']);
    $i = 1;
    $fact = 1;
    while ($i <= $n) {
        $fact = $fact * $i;
        $i++;
    }
    echo "Rezultatul lui n! este: $fact";
} ?>
</body>
</html>