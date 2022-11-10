<html>
<head>
    <title>Variabila-variabilei</title>
</head>
<body>
<?php
$nume = 'Ion';
$$nume = 'Maria';
echo $Ion . "<br>";
echo $nume . "<br>";
echo $$nume . "<br>";
$nume = '123';
$$nume = '456';
echo $nume . "<br>";
echo ${'123'} . "<br>";
?>
</body>
</html>