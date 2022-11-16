<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title>Vizualizare Inregistrari</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h1>Inregistrarile din tabela clienti</h1>
<p><b>Toate inregistrarile din clienti</b</p>
<?php
include("Conectare.php");
if ($result = $mysqli->query("SELECT * FROM clienti ORDER BY client_id ")) {
    if ($result->num_rows > 0) {
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>ID</th><th>Username</th><th>Parola</th><th>Email</th><th>Strada</th><th>Oras</th><th>Tara</th><th>Cod Postal</th><th>Nr Card</th>
<th>Tip Card</th><th>Data expirare</th><th>Acceptare Email</th><th>Nume</th><th>Nr Inregistrare</th><th>Cod Fiscal</th></tr>";
        while ($row = $result->fetch_object()) {
            echo "<tr>";
            echo "<td>" . $row->client_id . "</td>";
            echo "<td>" . $row->client_username . "</td>";
            echo "<td>" . $row->client_pass . "</td>";
            echo "<td>" . $row->client_email . "</td>";
            echo "<td>" . $row->client_str . "</td>";
            echo "<td>" . $row->client_oras . "</td>";
            echo "<td>" . $row->client_tara . "</td>";
            echo "<td>" . $row->client_codpost . "</td>";
            echo "<td>" . $row->client_nrcard . "</td>";
            echo "<td>" . $row->client_tipcard . "</td>";
            echo "<td>" . $row->client_dataexp . "</td>";
            echo "<td>" . $row->acceptareemail . "</td>";
            echo "<td>" . $row->client_nume . "</td>";
            echo "<td>" . $row->client_nrinregRC . "</td>";
            echo "<td>" . $row->cod_fiscal . "</td>";
            echo "<td><a href='Modificare.php?id=" . $row->client_id . "'>Modificare</a></td>";
            echo "<td><a href='Stergere.php?id=" . $row->client_id . "'>Stergere</a></td>";
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