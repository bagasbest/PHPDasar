<?php
    require '../functions.php';

    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM mahasiswa
                WHERE
            nama LIKE '%$keyword%' OR
            nrp LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            prodi LIKE '%$keyword%'   
            ";
    $mahasiswa = query($query);

    $jumlahData = count($mahasiswa);
    

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <?php if($jumlahData == 0 ) : ?>
            <h3><center>Data tidak ditemukan</center></h3>
        <?php else : ?>

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

            <?php endif; ?>
    
</body>
</html>