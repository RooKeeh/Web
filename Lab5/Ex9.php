<html>
<head>
    <title> Determinarea minimului dintre doua valori </title>
</head>
<body>
<form action="Ex9.php" method="POST">
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
    if ($a < $b) {
        echo "Minimul este:$a";
    } else {
        echo "Minimul este:$b";
    }
}
?>