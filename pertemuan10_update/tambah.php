<?php

    require 'functions.php';

    if(isset ($_POST["btnSubmit"])){
        if(tambah($_POST) > 0){
            echo "<script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href='index.php';
                </script>";
        } else {
            echo "<script>
                    alert('Data gagal ditambahkan!');
                    document.location.href='index.php';
                </script>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required> 
            </li>
            <li>
                <label for="nrp">NIM : </label>
                <input type="text" name="nrp" id="nrp" required> 
            </li>
            <li>
                <label for="email">E-mail : </label>
                <input type="text" name="email" id="email" required> 
            </li>
            <li>
                <label for="prodi">Program Studi : </label>
                <input type="text" name="prodi" id="prodi" required> 
            </li>

            <li>
                <label for="gambar">gambar : </label>
                <input type="text" name="gambar" id="gambar" required> 
            </li>

            <li>
            
               <button type="submit" name="btnSubmit">Submit</button>
            </li>
        </ul>
    </form>

    <a href="index.php">Kembali ke data mahasiswa</a>
</body>
</html>