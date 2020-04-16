<?php
    session_start();

    //jika user tidak melalui proses login, maka tendang user ke halaman login
    if(!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
   
    require 'functions.php';

    //pagination
    //konfogirasi
    $jumlahDataPerHalaman = 2;
    $jumlahData = count(query("SELECT * FROM mahasiswa"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
    
    

    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC LIMIT $awalData, $jumlahDataPerHalaman");

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

<a href="logout.php" style="margin-left: 20px;">Logout</a>
<br><br>

    <form action="" method="POST">
        <input type="text" name="etCari" size="30" autofocus placeholder="Masukkan keyword pencarian" autocomplete="off">
        <button typ="submit" name="btnCari">Cari</button>
    </form>
    <br><br>

    <!-- navigasi -->

    <?php  if($halamanAktif > 1) : ?>
        <a href="?halaman=<?php echo $halamanAktif - 1; ?>">&laquo</a>
    <?php endif; ?>
    


    <?php for($i=1; $i<=$jumlahHalaman; $i++) :  ?>
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?php echo $i; ?>" style="font-weight: bold; color:red;"><?php echo $i;?></a>
        <?php else : ?>
            <a href="?halaman=<?php echo $i; ?>"><?php echo $i;?></a>
        <?php endif; ?>
    <?php endfor; ?>

    <?php if($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?php echo $halamanAktif + 1; ?>">&raquo</a>
    <?php endif; ?>

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

    <?php $i=($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman + 1; ?>
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
