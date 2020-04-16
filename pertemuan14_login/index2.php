<?php
    //koneksi ke database
   $connection =  mysqli_connect("localhost", "root", "", "phpdasar");

    //ambil data dari table mahasiswa / retrieve data
    $result = mysqli_query($connection, "SELECT * FROM mahasiswa" );
    //var_dump($result);

    //minta ambilin datanya (fetch) dari objek result

    //1.mysqli_fetch_row =>mengembalikan array numerik / array yang indeksnya angka
    // $mhs = mysqli_fetch_row($result);
    // var_dump($mhs);

    //2.mysqli_fetch_assoc => mengembalikan array assosiatif
//   while(  $mhs = mysqli_fetch_assoc($result) ) {
//     var_dump($mhs["nama"]);
//   }
    

    //3.mysqli_fetch_array => mengembalikan array asosiatf dan array numerik
    // $mhs = mysqli_fetch_array($result);
    // var_dump($mhs);

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
    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        
        <td><?= $i; ?></td>
        <td>
            <a href="">Ubah</a> | 
            <a href="">Hapus</a>
        </td>
        <td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>
        <td><?php echo $row["nrp"];?></td>
        <td><?php echo $row["nama"];?></td>
        <td><?php echo $row["email"];?></td>
        <td><?php echo $row["prodi"];?></td>

    </tr>
    <?php $i++; ?>
<?php endwhile; ?>
</table>
    
</body>
</html>
