<?php
include("Conectare.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $client_id = $_GET['id'];
    if ($stmt = $mysqli->prepare("DELETE FROM clienti WHERE client_id = ? LIMIT 1")) {
        $stmt->bind_param("i", $client_id);
        $stmt->execute();
        $stmt->close();
    } else {
        echo "ERROR: Nu se poate executa delete.";
    }
    $mysqli->close();
    echo "<div>Inregistrarea a fost stearsa!!!!</div>";
}
echo "<p><a href=\"Vizualizare_admin.php\">Index</a></p>";
?>