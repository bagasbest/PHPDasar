<?php

    if(isset($_POST["btnSubmit"])){
        if($_POST["username"] == "admin" && $_POST["password"] == "123"){
            header("Location: admin.php");
        } else {
            $error = true;

        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
<h1>Selamat datang admin</h1>

    <?php if(isset($error)) : ?>
    <p style="color: red; font-style: italic;">Username atau Password Salah</p>
    <?php endif; ?>
    <ul>
    <form action="" method="POST">
        <li>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
        </li>
        <br>
        <li>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password">
        </li>

        <li>
            <button type="submit" name="btnSubmit">Login</button>
        </li>
    </form>
    </ul>
    
</body>
</html>