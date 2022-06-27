<?php
    //membuat koneksi
    $conn = mysqli_connect('localhost', 'root', '', 'biodata_diri');

    
    //memasukkan data ke array
        $nama_keahlian = $_POST['nama_keahlian'];
        $keterangan = $_POST['keterangan'];

        $total = count($nama_keahlian);


    //melakukan perulangan input
    for($i=0; $i<$total; $i++){

        mysqli_query($conn,"INSERT INTO keahlian
            nama_keahlian = '$nama_keahlian[$i]',
            keterangan = '$keterangan[$i]'
        ");
    }

    //kembali ke halaman sebelumnya
    header("location: coba.php");