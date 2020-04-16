<?php
    //cek apakah data sudah dibawa oleh user
    if(!isset($_GET["nama"]) || 
        !isset($_GET["NIM"]) || 
        !isset($_GET["Email"]) || 
        !isset($_GET["Prodi"])){
        //redirect
        header("Location: latihan2.php");
        exit;
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>

    <ul>
        <li>
            <img src="img/<?php echo $_GET["gambar"]; ?>">
        </li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["NIM"]; ?></li>
        <li><?= $_GET["Email"]; ?></li>
        <li><?php echo $_GET["Prodi"]; ?></li>
    </ul>

    <a href="latihan2.php">Kembali ke daftar mahasiswa</a>
    
</body>
</html>