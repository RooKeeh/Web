<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Vizualizare Inregistrari</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h1>Inregistrarile din tabela datepers</h1>
<p><b>Toate inregistrarile din datepers</b</p>
<?php
include("Conectare.php");
if ($result = $mysqli->query("SELECT * FROM tbl_product ORDER BY id ")) {
    if ($result->num_rows > 0) {
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>ID</th><th>Nume Produs</th><th>Cod
Produs</th><th>Imagine</th><th>Descriere</th><th>Categorie</th><th></th><th></th></tr>";
        while ($row = $result->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $row->id . "</td>";
            echo "<td>" . $row->name . "</td>";
            echo "<td>" . $row->code . "</td>";
            echo "<td>" . $row->image . "</td>";
            echo "<td>" . $row->descriere . "</td>";
            echo "<td>" . $row->categorie . "</td>";
            echo "<td><a href='Modificare.php?id=" . $row->id . "'>Modificare</a></td>";
            echo "<td><a href='Stergere.php?id=" . $row->id . "'>Stergere</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nu sunt inregistrari in tabela!";
    }
} else {
    echo "Error: " . $mysqli->error();
}
$mysqli->close();
?>
<a href="Inserare.php">Adaugarea unei noi inregistrari</a>
</body>
</html>