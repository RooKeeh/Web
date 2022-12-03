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
if (!isset($_POST['username_admin']) && !isset($_POST['password_admin'])) {
    exit('Completati username si password !');
}
if ($stmt = $con->prepare('SELECT id_admin, password_admin FROM utilizatori WHERE username_admin = ?')) {
    $stmt->bind_param('s', $_POST['username_admin']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id_admin, $password_admin);
        $stmt->fetch();
        if (password_verify($_POST['Password'], $password_admin)) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username_admin'];
            $_SESSION['id'] = $id_admin;
            echo 'Bine ati venit' . $_SESSION['name'] . '!';
            header('Location: Vizualizare.php');
        } else {
            echo 'Incorrect username sau password!';
        }
    } else {
        echo 'Incorrect username sau password!';
    }
    $stmt->close();
}
?>