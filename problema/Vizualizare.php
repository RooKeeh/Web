<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Vizualizare</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<?php
include("Conectare.php");
if ($result = $mysqli->query("SELECT * FROM tbl_product ORDER BY id ")) {
    if ($result->num_rows > 0) {
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>id</th><th>Nume</th><th>Cod</th><th>Imagine</th><th>Pret</th><th>Descriere</th><th>Categorie</th><th></th></tr>";
        while ($row = $result->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $row->id . "</td>";
            echo "<td>" . $row->name . "</td>";
            echo "<td>" . $row->code . "</td>";
            echo "<td>" . $row->image . "</td>";
            echo "<td>" . $row->price . "</td>";
            echo "<td>" . $row->descriere . "</td>";
            echo "<td>" . $row->categorie . "</td>";
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
</body>
</html>