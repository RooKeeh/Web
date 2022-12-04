<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'proiect';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER,
    $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Esec conectare MySQL: ' . mysqli_connect_error());
}
if (!isset($_POST['Username']) && !isset($_POST['Pass'])) {
    exit('Completati username si password !');
}
if ($stmt = $con->prepare('SELECT ID, Pass FROM clienti WHERE Username = ?')) {
    $stmt->bind_param('s', $_POST['Username']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($ID, $Pass);
        $stmt->fetch();
        if (password_verify($_POST['Password'], $Pass)) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['Username'];
            $_SESSION['id'] = $ID;
            echo 'Bine ati venit' . $_SESSION['name'] . '!';
            header('Location: magazin_logout.php');
        } else {
            echo 'Incorrect username sau password!';
        }
    } else {
        echo 'Incorrect username sau password!';
    }
    $stmt->close();
}
?>