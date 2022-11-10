<html>
<head><title>Exemplu de sesiune</title></head>
<body>
<?php
session_start();
$_SESSION['Nume2'] = "ABRAMOVICI";
$_SESSION['Prenume2'] = "MITA";
$_SESSION['Varsta'] = 39;
?>
<a href="Ex27_sesiune3.php">pagina spre care se trimit variabilele de sesiune</a>
</body>
</html>