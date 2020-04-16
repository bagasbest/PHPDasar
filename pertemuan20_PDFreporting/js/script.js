//jquery ambil dokumen
$(document).ready(function () {

    //hilangkan tombol cari
    $('#tombol-cari').hide();



    // event ketika keyword ditulis
    $('#keyword').on('keyup', function () {

        //memunculkan icon loading
        $('.pos').show();

        //load memiliki keterbatasan karena ia hanya bisa menggunakan method $_GET
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

        //$.get()
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function (data) {
            $('#container').html(data);
            $('.pos').hide();
        });
    });

});