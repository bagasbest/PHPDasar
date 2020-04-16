<?php

session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
    //require 'functions.php';

    $id = $_GET["id"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
</head>
<body>
    <h1>Intip Data Mahasiswa</h1>

    <ul>
        <li>Nama : <?php echo $_GET["nama"]; ?></li>
    </ul>

    <a href="index.php">Kembali ke Data Mahasiswa</a>
    
</body>
</html>