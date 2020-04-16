//ambil elemen2 yang dibutuhkan dengan teknik DOM

var keyword = document.getElementById("keyword");
var tombol_cari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// tombol_cari.addEventListener("click", function () {
//     alert("berhasil");
// });

//tambahkan event ketika keyword ditulis
keyword.addEventListener("keyup", function () {


    //buat objek AJAX 
    var xhr = new XMLHttpRequest();

    //cek kesiapan AJAX
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            //4 berarti sumber ready
            container.innerHTML = xhr.responseText;
        }
    }

    //eksekusi ajax
    xhr.open("GET", "ajax/mahasiswa.php?keyword=" + keyword.value, true);
    xhr.send();

});