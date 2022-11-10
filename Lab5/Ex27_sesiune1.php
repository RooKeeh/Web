<?php
session_start(); ?>
<html>
<head><title>Exemplu de sesiune</title></head>
<?php
$_SESSION['Nume'] = "POPICOVICI";
$_SESSION['Prenume'] = "IONITA";
?>
<a href="Ex27_sesiune2.php">pagina spre care se trimit variabilele de sesiune</a>
</html>