<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: Index_admin.html');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pagina proiect parolata</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<body class="loggedin">
<nav class="navtop">
    <div>
        <h1>Magazin Apple</h1>
        <a href="logout.php"><i class="fas fa-sign-outalt"></i>Logout</a>
    </div>
</nav>
<div class="content">
    <h2>Pagina cu parola</h2>
    <p>Bine ati revenit, <?= $_SESSION['name'] ?>!</p>
</div>
</body>
</html>