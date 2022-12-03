<?php
include("Conectare.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $ID = $_GET['id'];
    if ($stmt = $mysqli->prepare("DELETE FROM produse WHERE ID = ? LIMIT 1")) {
        $stmt->bind_param("i", $ID);
        $stmt->execute();
        $stmt->close();
    } else {
        echo "ERROR: Nu se poate executa delete.";
    }
    $mysqli->close();
    echo "<div>Inregistrarea a fost stearsa!!!!</div>";
}
echo "<p><a href=\"Vizualizare.php\">Index</a></p>";
?>