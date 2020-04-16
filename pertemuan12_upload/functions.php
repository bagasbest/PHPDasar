<?php
    $connection =  mysqli_connect("localhost", "root", "", "phpdasar");

    //ambil data dari table mahasiswa / retrieve data
    function query ($query){
        global $connection;
        $result = mysqli_query($connection, $query);
        $rows= [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows [] = $row;
        }

        return $rows;
    }

    function tambah($data){
        global $connection;
        $nama = htmlspecialchars($data["nama"]);
        $nrp = htmlspecialchars($data["nrp"]);
        $email = htmlspecialchars($data["email"]);
        $prodi = htmlspecialchars($data["prodi"]);

        //upload gambar
        $gambar = upload();
        if(!$gambar){
            return false;
        }

        $query = "INSERT INTO mahasiswa
        VALUES
      ('','$nama','$nrp','$email','$prodi','$gambar')

    ";

    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
    }

    function upload(){
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        //cek apakah tidak ada gambar yg diupload
        if($error == 4){
            echo "<script>
                    alert('pilih gambar terlebih dahulu');
                </script>";
            return false;
        }

        //yg boleh diupload hanya gambar
        $ekstensiGambarValid = ['jpg','jpeg','png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if(!in_array($ekstensiGambar, $ekstensiGambarValid )){
            echo "<script>
                    alert('Yang anda upload bukan array');
                </script>";
        }

        //ukuran file terlalu besar
        if($ukuranFile > 1000000){
            echo "<script>
                    alert('File terlalu besar');
                </script>";
        }

        //lolos pengecekan gambar siap diupload
        //generate nama file baru
        $namaFileBaru = uniqid();
        $namaFileBaru.= '.';
        $namaFileBaru.= $ekstensiGambar;
       
        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
        return $namaFileBaru;
    }


    function hapus ($id){
        global $connection;

        $query = "DELETE FROM mahasiswa WHERE id=$id";
        mysqli_query($connection, $query);

        return mysqli_affected_rows($connection);

    }

    function update ($data){
        global $connection;
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $nrp = htmlspecialchars($data["nrp"]);
        $email = htmlspecialchars($data["email"]);
        $prodi = htmlspecialchars($data["prodi"]);

        $gambarLama = htmlspecialchars($data["gambarLama"]);

        //cek apakah user pilih gabar baru atau tidak
        if($_FILES['gambar']['error'] === 4){
            $gambar = $gambarLama;
        } else {
                $gambar = upload();
        }
        

        $query = "UPDATE mahasiswa SET
                    nama = '$nama',
                    nrp  = '$nrp',
                    email = '$email',
                    prodi = '$prodi',
                    gambar = '$gambar'
                    WHERE id = $id
                ";

    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
    }

    function cari ($etCari){
        $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$etCari%'
                OR nrp LIKE '%$etCari%'";
        return query($query);
    }


?>