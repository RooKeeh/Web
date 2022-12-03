<?php
include("Conectare.php");
$error = '';
if (isset($_POST['submit'])) {
    $Denumire = htmlentities($_POST['Denumire'], ENT_QUOTES);
    $Pret = htmlentities($_POST['Pret'], ENT_QUOTES);
    $id_categorie = htmlentities($_POST['id_categorie'], ENT_QUOTES);
    if ($Denumire == '' || $Pret == '' || $id_categorie == '') {
        $error = 'ERROR: Campuri goale!';
    } else {
        if ($stmt = $mysqli->prepare("INSERT into produse (Denumire, Pret, id_categorie) VALUES (?, ?, ?)")) {
            $stmt->bind_param("sds", $Denumire, $Pret, $id_categorie);
            $stmt->execute();
            $stmt->close();
        } else {
            echo "ERROR: Nu se poate executa insert.";
        }
    }
}
$mysqli->close();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head><title><?php echo "Inserare inregistrare"; ?> </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<h1><?php echo "Inserare inregistrare"; ?></h1>
<?php if ($error != '') {
    echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error . "</div>";
} ?>
<form action="" method="post">
    <div>
        <strong>Denumire: </strong> <input type="text" name="Denumire" value=""/><br/>
        <strong>Pret: </strong> <input type="text" name="Pret" value=""/><br/>
        <strong>id_categorie: </strong> <input type="text" name="id_categorie" value=""/><br/>
        <br/>
        <input type="submit" name="submit" value="Submit"/>
        <a href="Vizualizare.php">Inapoi</a>
    </div>
</form>
</body>
</html>