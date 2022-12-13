<?php
include("Conectare.php");
$error = '';
if (!empty($_POST['client_id'])) {
    if (isset($_POST['submit'])) {
        if (is_numeric($_POST['client_id'])) {
            $client_id = $_POST['client_id'];
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
                echo "<div> ERROR: Completati campurile obligatorii!</div>";
            } else {
                if ($stmt = $mysqli->prepare("UPDATE clienti SET client_username=?, client_pass=?, client_email=?, client_str=?, client_oras=?, client_tara=?, client_codpost=?, client_nrcard=?, client_tipcard=?, client_dataexp=?, acceptareemail=?, client_nume=?, client_nrinregRC=?, cod_fiscal=? WHERE client_id='" . $client_id . "'")) {
                    $stmt->bind_param("sssssssisdssii", $client_username, $client_pass, $client_email, $client_str, $client_oras, $client_tara, $client_codpost, $client_nrcard, $client_tipcard, $client_dataexp, $acceptareemail, $client_nume, $client_nrinregRC, $cod_fiscal);
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
<head><title> <?php if ($_GET['client_id'] != '') {
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
        <input type="hidden" name="client_id" value="<?php echo $_GET['id']; ?>"/>
        <p>client_id: <?php echo $_GET['id'];
            if ($result = $mysqli->query("SELECT * FROM clienti where client_id='" . $_GET['id'] . "'"))
            {
            if ($result->num_rows > 0)
            {
            $row = $result->fetch_object(); ?></p>
        <strong>Username: </strong> <input type="text" name="client_username"
                                           value="<?php echo $row->client_username; ?>"/><br/>
        <strong>Parola: </strong> <input type="text" name="client_pass" value="<?php echo $row->client_pass; ?>"/><br/>
        <strong>Email: </strong> <input type="text" name="client_email" value="<?php echo $row->client_email; ?>"/><br/>
        <strong>Strada: </strong> <input type="text" name="client_str" value="<?php echo $row->client_str; ?>"/><br/>
        <strong>Oras: </strong> <input type="text" name="client_oras" value="<?php echo $row->client_oras; ?>"/><br/>
        <strong>Tara: </strong> <input type="text" name="client_tara" value="<?php echo $row->client_tara; ?>"/><br/>
        <strong>Cod Post: </strong> <input type="text" name="client_codpost"
                                           value="<?php echo $row->client_codpost; ?>"/><br/>
        <strong>Nr Card: </strong> <input type="text" name="client_nrcard"
                                          value="<?php echo $row->client_nrcard; ?>"/><br/>
        <strong>Tip Card: </strong> <input type="text" name="client_tipcard"
                                           value="<?php echo $row->client_tipcard; ?>"/><br/>
        <strong>Data Expirare: </strong> <input type="text" name="client_dataexp"
                                                value="<?php echo $row->client_dataexp; ?>"/><br/>
        <strong>Acceptare Email: </strong> <input type="text" name="acceptareemail"
                                                  value="<?php echo $row->acceptareemail; ?>"/><br/>
        <strong>Nume: </strong> <input type="text" name="client_nume" value="<?php echo $row->client_nume; ?>"/><br/>
        <strong>Nr Inregistrare: </strong> <input type="text" name="client_nrinregRC"
                                                  value="<?php echo $row->client_nrinregRC; ?>"/><br/>
        <strong>Cod Fiscal: </strong> <input type="text" name="cod_fiscal" value="<?php echo $row->cod_fiscal;
        }
        }
        } ?>"/><br/>
        <br/>
        <input type="submit" name="submit" value="Submit"/>
        <a href="Vizualizare.php">Index</a>
    </div>
</form>
</body>
</html>