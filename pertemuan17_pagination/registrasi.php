<?php

    require 'functions.php';

    if(isset ($_POST["register"])) {
        if(registrasi($_POST) > 0){
            echo "<script>
                    alert('user baru berhasil ditambahkan');
                </script>";
        } else {
            echo mysqli_error($connection);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <h1>Halaman Registrasi</h1>    
    <form action="" method="POST">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password : </label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi password : </label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Register</button>
            </li>

            <br><br>

            <li>
                <a href="login.php">kembali ke menu login</a>
            </li>
        </ul>
    </form>
</body>
</html>