<?php
require 'config.php';
//ambil id di url
$id = $_GET ['id'];

// function hapus($id)
// {
//   $conn = koneksi();

//   mysqli_query($conn, "DELETE FROM data_diri WHERE id_utama = $id") or die(mysqli_error($conn));
//   return mysqli_affected_rows($conn);
// }

if(hapus($id) > 0){
    echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'coba.php';
    </script>";
}else{
    echo "<script>
    alert('data gagal dihapus');
    document.location.href = 'coba.php';
    </script>";
}
?>







