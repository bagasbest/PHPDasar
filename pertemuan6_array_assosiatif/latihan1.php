<?php
  //array numerik
  // $mahasiswa = [
  //     ["Bagas Pangestu", "14117026", "Teknik Informatika", "bagas.14117026@student.itera.ac.id"],
  //     ["Bejo Subejo", "15117042", "Biologi", "bejo.15117042@student.itera.ac.id"],
  //     ["Nanang Sunanang", "161170133", "Teknik Mesin", "nanang.16117122@student.itera.ac.id"]
    
  //   ];

  //array assosiatif
  $mahasiswa = [
               
              ["nama" => "Bagas Pangestu",
                "NIM" => "14117026",
                "Email" => "bagas.14117026@student.itera.ac.id",
                "Program Studi" => "Teknik Informatika",
                "gambar" => "bagas.jpg"
              ],

              ["Email" => "bejo.15117042@student.itera.ac.id",
                "nama" => "Bejo Subejo",
                "NIM" => "15117042",
                "Program Studi" => "Biologi",
                "gambar" => "b.jpg"
              ],

              ["nama" => "Nanang Sunanang",
                "NIM" => "161170133",
                "Email" => "nanang.16117122@student.itera.ac.id",
                "Program Studi" => "Teknik Mesin",
                "gambar" => "c.jpg"
               // "Tugas" => [80,40,90]
              ] 
            
            ];

            //echo $mahasiswa[2]["Tugas"][1];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
</head>
<body>

            <h1>Data Mahasiswa</h1>

            <?php foreach ($mahasiswa as $mhs) : ?>
                <ul>
                    <li>
                        <img src="img/<?php echo $mhs["gambar"]; ?>">
                    </li>
                    <li> Nama : <?php echo $mhs["nama"]; ?></li>
                    <li> NIM : <?php echo $mhs["NIM"]; ?></li>
                    <li> Email : <?php echo $mhs["Email"]; ?></li>
                    <li> Program Studi : <?php echo $mhs["Program Studi"]; ?></li>
                </ul>
            <?php endforeach; ?>
  
</body>
</html>
