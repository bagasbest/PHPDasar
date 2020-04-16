<?php
    require 'functions.php';


    $id = $_GET["id"];

    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

    
if(isset ($_POST["btnSubmit"])){
    if(update($_POST) > 0){
        echo "<script>
                alert('Data berhasil di ubah');
                document.location.href ='index.php';
            </script>";

    } else {
        echo "<script>
                alert('Data gagal di ubah');
                document.location.href ='index.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data</title>
</head>
<body>
    <h1>Update Data Mahasiswa</h1>
    <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $mhs["id"]; ?>">
        <ul>
        <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required value="<?php echo $mhs["nama"]; ?>"> 
            </li>
            <li>
                <label for="nrp">NIM : </label>
                <input type="text" name="nrp" id="nrp" required value="<?php echo $mhs["nrp"]; ?>"> 
            </li>
            <li>
                <label for="email">E-mail : </label>
                <input type="text" name="email" id="email" required value="<?php echo $mhs["email"]; ?>"> 
            </li>
            <li>
                <label for="prodi">Program Studi : </label>
                <input type="text" name="prodi" id="prodi" required value="<?php echo $mhs["prodi"]; ?>"> 
            </li>

            <li>
                <label for="gambar">gambar : </label>
                <input type="text" name="gambar" id="gambar" required value="<?php echo $mhs["gambar"]; ?>"> 
            </li>

            <li>
            
               <button type="submit" name="btnSubmit">Submit</button>
            </li>
        </ul>
    </form>

    <a href="index.php">Kembali ke Data Mahasiswa</a>
    
</body>
</html>