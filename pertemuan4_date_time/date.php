<?php
    //date untuk menampilkan dengan format tertentu
    //echo date("l, d-M-Y"); 


   //Time
   //UNIX timeStamp / EPOCH time
   //detik yang sudah berlalu sejak 1970 - now
   //    echo time(); 
   //cek 100 hari kedepan hari apa 
   //echo date("l", time()-60*60*24*100);




    //mktime
    //membuat sendiri mktime dari 1970 - now

    //mktime(0,0,0,0,0,0)
    //jam, menit, detik, bulan, tanggal, tahun

    // mktime(0,0,0,5,23,1999);
    //  echo date("l", mktime(0,0,0,5,23,1999)); 


    //strtotime
    // echo date("l", strtotime("23 may 1999"));

?>