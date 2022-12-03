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
if (!isset($_POST['Username'], $_POST['Pass'], $_POST['Email'])) {
    exit('Completare formular registration !');
}
if (empty($_POST['Username']) || empty($_POST['Pass']) || empty($_POST['Email'])) {
    exit('Completare registration form');
}

if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
    exit('Email nu este valid!');
}

if (preg_match('/[A-Za-z0-9]+/', $_POST['Username']) == 0) {
    exit('Username nu este valid!');
}
if (strlen($_POST['Pass']) > 20 || strlen($_POST['Pass']) < 5) {
    exit('Password trebuie sa fie intre 5 si 20 charactere!');
}
if ($stmt = $con->prepare('SELECT id, Pass FROM clienti WHERE Username = ?')) {
    $stmt->bind_param('s', $_POST['Username']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo 'Username exists, alegeti altul!';
    } else {
        if ($stmt = $con->prepare('INSERT INTO clienti (Username, Pass, Email) VALUES (?, ?, ?)')) {
            $Pass = password_hash($_POST['Pass'],
                PASSWORD_DEFAULT);
            $stmt->bind_param('sss', $_POST['Username'], $Pass, $_POST['Email']);
            $stmt->execute();
            echo 'Success inregistrat!';
            header('Location: index.html');
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