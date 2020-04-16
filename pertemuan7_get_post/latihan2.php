<?php
    //superglobals
    //variable global milik php
    //merupakan array asosiatif
    // var_dump ($_GET);

    
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
                "Prodi" => "Teknik Informatika",
                "gambar" => "bagas.jpg"
              ],

              ["Email" => "bejo.15117042@student.itera.ac.id",
                "nama" => "Bejo Subejo",
                "NIM" => "15117042",
                "Prodi" => "Biologi",
                "gambar" => "b.jpg"
              ],

              ["nama" => "Nanang Sunanang",
                "NIM" => "161170133",
                "Email" => "nanang.16117122@student.itera.ac.id",
                "Prodi" => "Teknik Mesin",
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
    <title>GET</title>
</head>
<body>
    <h1>GET Request</h1>
    <ul>
    <?php  foreach($mahasiswa as $mhs) :?>
                  <li>
                    <a href="latihan3.php?nama=<?php echo $mhs["nama"]; ?>&NIM=<?php echo $mhs["NIM"]; ?>&Email=<?php echo $mhs["Email"]; ?>&Prodi=<?php echo $mhs["Prodi"]; ?>&gambar=<?php echo $mhs["gambar"]; ?>"><?php echo $mhs["nama"];?> </a>
                  </li>
    <?php endforeach;?>
    </ul>
</body>
</html>