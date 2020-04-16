<?php
   
    require 'functions.php';

    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");

    //tombol cari ditekan
    if(isset ($_POST["btnCari"]) ){
        $mahasiswa = cari($_POST["etCari"]);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

    <form action="" method="POST">
        <input type="text" name="etCari" size="30" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
        <button typ="submit" name="btnCari">Cari</button>
    </form>
    <br>

<table border="1" cellpading="20" cellspacing="0">


    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Prodi</th>
    </tr>

    <?php $i=1; ?>
    <?php foreach($mahasiswa as $row) : ?>
    <tr>
        
        <td><?= $i; ?></td>
        <td>
            <a href="show.php?id=<?php echo $row["id"]; ?>&nama=<?php echo $row["nama"];?>">Intip</a> |
            <a href="update.php?id=<?php echo $row["id"]; ?>">Ubah</a> | 
            <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Anda yakin ingin menghapus data dengan nama <?php echo $row["nama"]; ?> ?');">Hapus</a>
        </td>
        <td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
        <td><?php echo $row["nrp"];?></td>
        <td><?php echo $row["nama"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><?php echo $row["prodi"];?></td>

    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>
    
</body>
</html>
