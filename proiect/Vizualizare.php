<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Vizualizare Inregistrari</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h1>Inregistrarile din tabela produse</h1>
<p><b>Toate inregistrarile din produse</b</p>
<?php
include("Conectare.php");
if ($result = $mysqli->query("SELECT * FROM produse ORDER BY ID ")) {
    if ($result->num_rows > 0) {
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>ID</th><th>Denumire</th><th>Pret</th><th>id_categorie</th></tr>";
        while ($row = $result->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $row->ID . "</td>";
            echo "<td>" . $row->Denumire . "</td>";
            echo "<td>" . $row->Pret . "</td>";
            echo "<td>" . $row->id_categorie . "</td>";
            echo "<td><a href='Modificare.php?id=" . $row->ID . "'>Modificare</a></td>";
            echo "<td><a href='Stergere.php?id=" . $row->ID . "'>Stergere</a></td>";
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
<a href="logout.php">Logout</a>
</body>
</html>