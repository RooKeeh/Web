<?php
include("Conectare.php");
$error = '';
if (isset($_POST['submit'])) {
    $client_username = htmlentities($_POST['client_username'], ENT_QUOTES);
    $client_pass = htmlentities($_POST['client_pass'], ENT_QUOTES);
    $client_email = htmlentities($_POST['client_email'], ENT_QUOTES);
    $client_str = htmlentities($_POST['client_str'], ENT_QUOTES);
    $client_oras = htmlentities($_POST['client_oras'], ENT_QUOTES);
    $client_tara = htmlentities($_POST['client_tara'], ENT_QUOTES);
    $client_codpost = htmlentities($_POST['client_codpost'], ENT_QUOTES);
    $client_nrcard = htmlentities($_POST['client_nrcard'], ENT_QUOTES);
    $client_tipcard = htmlentities($_POST['client_tipcard'], ENT_QUOTES);
    $client_dataexp = htmlentities($_POST['client_dataexp'], ENT_QUOTES);
    $acceptareemail = htmlentities($_POST['acceptareemail'], ENT_QUOTES);
    $client_nume = htmlentities($_POST['client_nume'], ENT_QUOTES);
    $client_nrinregRC = htmlentities($_POST['client_nrinregRC'], ENT_QUOTES);
    $cod_fiscal = htmlentities($_POST['cod_fiscal'], ENT_QUOTES);
    if ($client_username == '' || $client_pass == '' || $client_email == '' || $client_str == '' || $client_oras == '' || $client_tara == '' ||
        $client_codpost == '' || $client_nrcard == '' || $client_tipcard == '' || $client_dataexp == '' || $acceptareemail == '' || $client_nume == '' ||
        $client_nrinregRC == '' || $cod_fiscal == '') {
        $error = 'ERROR: Campuri goale!';
    } else {
        if ($stmt = $mysqli->prepare("INSERT into clienti (client_username, client_pass, client_email, client_str, client_oras, client_tara, client_codpost, client_nrcard, client_tipcard, client_dataexp, acceptareemail, client_nume, client_nrinregRC, cod_fiscal) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)")) {
            $stmt->bind_param("sssssssisdssii", $client_username, $client_pass, $client_email, $client_str, $client_oras, $client_tara, $client_codpost, $client_nrcard, $client_tipcard, $client_dataexp, $acceptareemail, $client_nume, $client_nrinregRC, $cod_fiscal);
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
        <strong>Username: </strong> <input type="text" name="client_username" value=""/><br/>
        <strong>Parola: </strong> <input type="text" name="client_pass" value=""/><br/>
        <strong>Email: </strong> <input type="text" name="client_email" value=""/><br/>
        <strong>Strada: </strong> <input type="text" name="client_str" value=""/><br/>
        <strong>Oras: </strong> <input type="text" name="client_oras" value=""/><br/>
        <strong>Tara: </strong> <input type="text" name="client_tara" value=""/><br/>
        <strong>Cod Post: </strong> <input type="text" name="client_codpost" value=""/><br/>
        <strong>Nr Card: </strong> <input type="text" name="client_nrcard" value=""/><br/>
        <strong>Tip Card: </strong> <input type="text" name="client_tipcard" value=""/><br/>
        <strong>Data Expirare: </strong> <input type="text" name="client_dataexp" value=""/><br/>
        <strong>Acceptare Email: </strong> <input type="text" name="acceptareemail" value=""/><br/>
        <strong>Nume: </strong> <input type="text" name="client_nume" value=""/><br/>
        <strong>Nr Inregistrare: </strong> <input type="text" name="client_nrinregRC" value=""/><br/>
        <strong>Cod Fiscal: </strong> <input type="text" name="cod_fiscal" value=""/><br/>
        <br/>
        <input type="submit" name="submit" value="Submit"/>
        <a href="Vizualizare.php">Index</a>
    </div>
</form>
</body>
</html>