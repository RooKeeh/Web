<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = "";
$DATABASE_NAME = 'proiect';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER,
    $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Nu se poate conecta la MySQL: ' . mysqli_connect_error());
}
if (!isset($_POST['username_admin'], $_POST['password_admin'], $_POST['email_admin'])) {
    exit('Completare formular registration !');
}
if (empty($_POST['username_admin']) || empty($_POST['password_admin']) || empty($_POST['email_admin'])) {
    exit('Completare registration form');
}

if (!filter_var($_POST['email_admin'], FILTER_VALIDATE_EMAIL)) {
    exit('Email nu este valid!');
}

if (preg_match('/[A-Za-z0-9]+/', $_POST['username_admin']) == 0) {
    exit('Username nu este valid!');
}
if (strlen($_POST['password_admin']) > 20 || strlen($_POST['password_admin']) < 5) {
    exit('Password trebuie sa fie intre 5 si 20 charactere!');
}
if ($stmt = $con->prepare('SELECT id_admin, password_admin FROM utilizatori WHERE username_admin = ?')) {
    $stmt->bind_param('s', $_POST['username_admin']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo 'Username exists, alegeti altul!';
    } else {
        if ($stmt = $con->prepare('INSERT INTO utilizatori (username_admin, password_admin, email_admin) VALUES (?, ?, ?)')) {
            $password_admin = password_hash($_POST['password_admin'],
                PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['username_admin'], $password_admin, $_POST['email_admin']);
            $stmt->execute();
            echo 'Success inregistrat!';
            header('Location: index_admin.html');
        } else {
            echo 'Nu se poate face prepare statement!';
        }
    }
    $stmt->close();
} else {
    echo 'Nu se poate face prepare statement!';
}
$con->close();
?>