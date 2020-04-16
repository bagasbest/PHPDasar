<?php
    session_start();
    require 'functions.php';

    //cek cookie terlebih dahulu, ada gak cookie login
    
     if(isset($_COOKIE["login"]) && isset($_COOKIE['key'])){
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        //ambil username berdasarkan id
        $result = mysqli_query($connection, "SELECT username FROM username
                            WHERE id='$id'");

        $row = mysqli_fetch_assoc($result);

        //cek cookie dan username
        if($key === hash('sha256', $row["username"])){
            $_SESSION['login'] = true;
        }


     }

    if(isset($_SESSION["login"])) {
        //jika sessionnya ada lempar ke index
        header ("Location: index.php");
        exit;
    }

    

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($connection, "SELECT * FROM user 
                WHERE username='$username'");

                //cek username

                if(mysqli_num_rows($result) == 1){
                    $row = mysqli_fetch_assoc($result);
                    if(password_verify($password, $row["password"])){
                        
                        //set session
                        $_SESSION["login"] = true;

                        //cek remember me
                        if(isset($_POST["remember"])){
                            //buat cookie
                            setcookie('id', $row["id"], time()+60);
                            setcookie('key', hash('sha256', $row['username']), time()+60);
                        }
                        
                        //lempar ke index.php
                        header("Location: index.php");
                        exit;
                    }
                    
                }

                $error = true;

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
    <h1>Login Page</h1>

    <?php if(isset($error)) :  ?>
        <p style="color: red; font-style: italic;">Username / Password salah</p>
    <?php endif; ?> 
    
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
                <label for="remember">Remember me : </label>
                <input type="checkbox" name="remember" id="remember">
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
            <br>
            <b>atau</b>
            <br><br>
            <li>Belum memiliki akun? silahkan <a href="registrasi.php">Daftar</a></li>

        </ul>
    </form>




</body>
</html>