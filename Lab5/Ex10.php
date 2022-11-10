<html>
<head>
    <title> Determinarea minimului dintre doua valori </title>
</head>
<body>
<form action="Ex10.php" method="POST">
    A: <input type="text" name="a"/>
    B: <input type="text" name="b"/>
    <input type="submit" name="submit"/>
</form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $a = trim($_POST['a']);
    $b = trim($_POST['b']);
    if ($a != 0) {
        $rezultat = -$b / $a;
        echo "$rezultat";
    } elseif ($b == 0) echo "ecuatia are o infinitate de solutii";
    else echo "ecuatia nu are solutii";
}
?>