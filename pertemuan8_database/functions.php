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
?>