<html>
<head><title>Exemplu de sesiune</title></head>
<?php
session_start();
$_SESSION['Nume'] = "Ionescu";
$_SESSION['Prenume'] = "Laura";
?>
<a href="Ex20_sesiune2.php">pagina spre care se trimit variabilele de sesi-une</a>
</html>