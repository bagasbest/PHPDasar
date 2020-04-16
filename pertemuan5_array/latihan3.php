<?php 
    $mahasiswa = [
        ["Bagas Pangestu", "14117026", "Teknik Informatika", "bagas.14117026@student.itera.ac.id"],
        ["Ucup Surucup", "14117030", "Fisika", "ucup.14117030@student.itera.ac.id"]
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiwa ITERA</h1>
   <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?php echo $mhs[0]; ?></li>
        <li>NIM  :<?php echo $mhs[1]; ?></li>
        <li>Program Studi : <?php echo $mhs[2]; ?></li>
        <li>Email : <?php echo $mhs[3]; ?></li>
    </ul>
        <?php endforeach; ?>
    
</body>
</html>