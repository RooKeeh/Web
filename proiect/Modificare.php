<?php
include("Conectare.php");
$error = '';
if (!empty($_POST['ID'])) {
    if (isset($_POST['submit'])) {
        if (is_numeric($_POST['ID'])) {
            $ID = $_POST['ID'];
            $Denumire = htmlentities($_POST['Denumire'], ENT_QUOTES);
            $Pret = htmlentities($_POST['Pret'], ENT_QUOTES);
            $id_categorie = htmlentities($_POST['id_categorie'], ENT_QUOTES);
            if ($Denumire == '' || $Pret == '' || $id_categorie == '') {
                echo "<div> ERROR: Completati campurile obligatorii!</div>";
            } else {
                if ($stmt = $mysqli->prepare("UPDATE produse SET Denumire=?, Pret=?, id_categorie=? WHERE ID='" . $ID . "'")) {
                    $stmt->bind_param("sdi", $Denumire, $Pret, $id_categorie);
                    $stmt->execute();
                    $stmt->close();
                } else {
                    echo "ERROR: nu se poate executa update.";
                }
            }
        } else {
            echo "id incorect!";
        }
    }
} ?>
<html>
<head><title> <?php if ($_GET['ID'] != '') {
            echo "Modificare inregistrare";
        } ?> </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
</head>
<body>
<h1><?php if ($_GET['id'] != '') {
        echo "Modificare Inregistrare";
    } ?></h1>
<?php if ($error != '') {
    echo "<div style='padding:4px; border:1px solid red; color:red'>" . $error . "</div>";
} ?>
<form action="" method="post">
    <div>
        <?php if ($_GET['id'] != '') { ?>
        <input type="hidden" name="ID" value="<?php echo $_GET['id']; ?>"/>
        <p>ID: <?php echo $_GET['id'];
            if ($result = $mysqli->query("SELECT * FROM produse where ID='" . $_GET['id'] . "'"))
            {
            if ($result->num_rows > 0)
            {
            $row = $result->fetch_object(); ?></p>
        <strong>Denumire: </strong> <input type="text" name="Denumire"
                                           value="<?php echo $row->Denumire; ?>"/><br/>
        <strong>Pret: </strong> <input type="text" name="Pret" value="<?php echo $row->Pret; ?>"/><br/>
        <strong>id_categorie: </strong> <input type="text" name="id_categorie" value="<?php echo $row->id_categorie;
        }
        }
        } ?>"/><br/>
        <br/>
        <input type="submit" name="submit" value="Submit"/>
        <a href="Vizualizare.php">Inapoi</a>
    </div>
</form>
</body>
</html>