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
        $gambar = htmlspecialchars($data["gambar"]);

        $query = "INSERT INTO mahasiswa
        VALUES
      ('','$nama','$nrp','$email','$prodi','$gambar')

    ";

    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
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
        $gambar = htmlspecialchars($data["gambar"]);

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