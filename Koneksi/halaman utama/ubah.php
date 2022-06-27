<?php
require 'config.php';

//ambil id dari url
$id = $_GET['id'];

//m$m berdasarkan id
// $m = query("SELECT data_diri.*,keahlian.nama_keahlian,keahlian.keterangan,pendidikan.riwayat_pendidikan,pendidikan.nama_pendidikan
// FROM data_diri
// INNER JOIN keahlian ON data_diri.id_utama = keahlian.id_utama
// INNER JOIN pendidikan ON data_diri.id_utama = pendidikan.id_utama AND data_diri.id_utama = $id;");
$m = query("SELECT * FROM data_diri WHERE data_diri.id_utama = $id");
$keahlian = query("SELECT nama_keahlian,keterangan FROM keahlian WHERE keahlian.id_utama = $id");
$pendidikan = query("SELECT riwayat_pendidikan,nama_pendidikan FROM pendidikan WHERE pendidikan.id_utama = $id");

//pastikan tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST, $id) > 0) {
    echo "<script>
             alert('data berhasil diubah');
             document.location.href = 'coba.php';
            </script>";
  } else {
    echo "<script>
    alert('data gagal diubah');
    document.location.href = 'coba.php';
   </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CV DataKaryawan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- My CSS -->
  <link rel="stylesheet" href="./sos.css">
  <!-- End Of My CSS -->

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header =======-->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="../assets/img/profile-img.jpg" alt="" class="img-fluid rounded-circle" style="height: 120px;">
        <h1 class="text-light"><a href="coba.php">Indrabro190</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>

          <li><a href="coba.php" class="nav-link"><i class="bx bx-arrow-back"></i> <span>Kembali</span></a></li>

        </ul>
      </nav>.
      <!--nav-menu -->
    </div>
  </header>End Header -->



  <main id="main">

    <body style="padding-left: 100px; background-color:aquamarine;">
      <!-- Ukuran tabel -->
      <div class="col-xl-11">
        <!-- End ukuran tabel -->

        <!-- Account details card-->
        <div class="card mb-4" id="1" style="box-shadow: 1px 2px 5px black;">
          <div class="card-header bg-info" style="color:#fff ; font-weight: 900;">Data-Diri</div>
          <div class="card-body">
            <form class="row g-3" action="" method="POST">
              <div class="row gx-3 mb-3">
                <!-- Tabel Data Diri -->
                <div class="col-md-5" style="margin-left: 30px;">
                  <label class="small mb-1" style="font-weight: 900;">Masukkan Nama :</label>
                  <input class="form-control" name="Nama" required value="<?= $m['Nama']; ?>">

                </div>
                <div class="col-md-5" style="margin-left: 30px;">
                  <label class="small mb-1" style="font-weight: 900;">Tempat :</label>
                  <input class="form-control" name="Tempat" required value="<?= $m['Tempat']; ?>">

                </div>
              </div>

              <div class="row gx-3 mb-3">
                <div class="col-md-5" style="margin-left: 30px;">
                  <label class="small mb-1" style="font-weight: 900;">Tgl lahir :</label>
                  <input class="form-control" name="Tgl_lahir" required value="<?= $m['Tgl_lahir']; ?>">

                </div>
                <div class="col-md-5" style="margin-left: 30px;">
                  <label class="small mb-1" style="font-weight: 900;">Jenis Kelamin :</label>
                  <select class="form-select" name="Jenis_Kelamin" id="validationTooltip04" required>
                    <option selected disabled value="<?= $m['Jenis_Kelamin']; ?>">Pilih</option>
                    <option <?= $m['Jenis_Kelamin'] == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
                    <option <?= $m['Jenis_Kelamin'] == 'Perempuan' ?  'selected' : ''; ?>>Perempuan</option>
                  </select>

                </div>
              </div>

              <div class="row gx-3 mb-3">
                <div class="col-md-5" style="margin-left: 30px;">
                  <label class="small mb-1" style="font-weight: 900;">Gol Darah :</label>
                  <input class="form-control" name="Gol_Darah" value="<?= $m['Gol_Darah']; ?>">

                </div>
                <div class="col-md-5" style="margin-left: 30px;">
                  <label class="small mb-1" style="font-weight: 900;">Alamat :</label>
                  <input class="form-control" name="Alamat" required value="<?= $m['Alamat']; ?>">

                </div>
              </div>

              <div class="row gx-3 mb-3">
                <div class="col-md-5" style="margin-left: 30px;">
                  <label class="small mb-1" style="font-weight: 900;">RT/RW :</label>
                  <input class="form-control" name="RT_RW" required value="<?= $m['RT_RW']; ?>">

                </div>
                <div class="col-md-5" style="margin-left: 30px;">
                  <label class="small mb-1" style="font-weight: 900;">Kel/Desa :</label>
                  <input class="form-control" name="Kel_Desa" required value="<?= $m['Kel_Desa']; ?>">

                </div>
              </div>

              <div class="row gx-3 mb-3">
                <div class="col-md-5" style="margin-left: 30px;">
                  <label class="small mb-1" style="font-weight: 900;">Kecamatan :</label>
                  <input class="form-control" name="Kecamatan" required value="<?= $m['Kecamatan']; ?>">

                </div>
                <div class="col-md-5" style="margin-left: 30px;">
                  <label class="small mb-1" style="font-weight: 900;">Agama :</label>
                  <input class="form-control" name="Agama" required value="<?= $m['Agama']; ?>">

                </div>
              </div>

              <div class="row gx-3 mb-3">
                <div class="col-md-5" style="margin-left: 30px;">
                  <label class="small mb-1" style="font-weight: 900;">Status Perkawinan :</label>
                  <select class="form-select" name="Status_Perkawinan" id="validationTooltip04" required>
                    <option selected disabled value="<?= $m['Status_Perkawinan']; ?>">Pilih</option>
                    <option <?= $m['Status_Perkawinan'] == 'Nikah' ? 'selected' : ''; ?>>Nikah</option>
                    <option <?= $m['Status_Perkawinan'] == 'Belum Nikah' ? 'selected' : ''; ?>>Belum Nikah</option>
                  </select>

                </div>
                <div class="col-md-5" style="margin-left: 30px;">
                  <label class="small mb-1" style="font-weight: 900;">Pekerjaan :</label>
                  <input class="form-control" name="Pekerjaan" required value="<?= $m['Pekerjaan']; ?>">

                </div>
              </div>

              <div class="row gx-3 mb-3">
                <div class="col-md-5" style="margin-left: 30px;">
                  <label class="small mb-1" style="font-weight: 900;">Kewarganegaraan :</label>
                  <input class="form-control" name="Kewarganegaraan" required value="<?= $m['Kewarganegaraan']; ?>">

                </div>
                <br><br><br><br><br><br><br><br>

              </div>


              <!-- Tabel keahlian -->
              <!-- Ukuran tabel -->
              <div class="col-xl-12">
                <!-- End ukuran tabel -->

                <!-- Account card-->
                <div class="card mb-4" style="box-shadow: 1px 2px 5px black;">
                  <div class="card-header bg-info" style="color:#fff ; font-weight: 900;">Keahlian</div>
                  <div class="card-body">
                    <!-- <form action="" method="POST"> -->
                    <!-- <div class="control-group after-add-more col-4">
                      <label>Nama Keahlian</label>
                      <input type="text" name="nama_keahlian[]" class="form-control">
                      <label>Keterangan</label>
                      <input type="text" name="keterangan[]" class="form-control">
                      <br>
                      <button class="btn btn-success add-more" type="button">
                        <i class="glyphicon glyphicon-plus"></i> Add
                      </button>
                      <hr>
                    </div> -->
                    <!-- <button class="btn btn-success" type="tambah">Submit</button> -->
                    <!-- </form> -->

                    <!-- class hide membuat form disembunyikan  -->
                    <!-- hide adalah fungsi bootstrap 3, klo bootstrap 4 pake invisible  -->
                    <!-- <div class="copy hide">
                    <div class="control-group col-4">
                      <label>Nama Keahlian</label>
                      <input type="text" name="nama_keahlian[]" class="form-control">
                      <label>Keterangan</label>
                      <input type="text" name="keterangan[]" class="form-control">
                      <br>
                      <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                      <hr>
                  </div>
                </div> -->
                    <div class="row gx-3 mb-3">
                      <div class="col-md-5" style="margin-left: 30px;">
                        <label class="small mb-1" style="font-weight: 900;">nama keahlian :</label>
                        <input class="form-control" name="nama_keahlian[]" required value="<?= $keahlian['nama_keahlian']; ?>">

                      </div>
                      <div class="col-md-5" style="margin-left: 30px;">
                        <label class="small mb-1" style="font-weight: 900;">keterangan :</label>
                        <input class="form-control" name="keterangan[]" required value="<?= $keahlian['keterangan']; ?>"></input>

                      </div>

                    </div>
                    <div class="row gx-3 mb-3">
                      <div class="col-md-5" style="margin-left: 30px;">
                        <label class="small mb-1" style="font-weight: 900;"></label>
                        <input class="form-control" name="nama_keahlian[]" required value="<?= $keahlian['nama_keahlian']; ?>">

                      </div>
                      <div class="col-md-5" style="margin-left: 30px;">
                        <label class="small mb-1" style="font-weight: 900;"></label>
                        <input class="form-control" name="keterangan[]" required value="<?= $keahlian['keterangan']; ?>"></input>

                      </div>

                    </div>
                    <div class="row gx-3 mb-3">
                      <div class="col-md-5" style="margin-left: 30px;">
                        <label class="small mb-1" style="font-weight: 900;"></label>
                        <input class="form-control" name="nama_keahlian[]" required value="<?= $keahlian['nama_keahlian']; ?>">

                      </div>
                      <div class="col-md-5" style="margin-left: 30px;">
                        <label class="small mb-1" style="font-weight: 900;"></label>
                        <input class="form-control" name="keterangan[]" required value="<?= $keahlian['keterangan']; ?>"></input>

                      </div>

                    </div>
                  </div>


<br><br><br><br>


                  <!-- Tabel Pendidikan -->
                  <!-- Ukuran tabel -->
                  <div class="col-xl-12">
                    <!-- End ukuran tabel -->

                    <!-- Account details card-->
                    <div class="card mb-4" style="box-shadow: 1px 2px 5px black;">
                      <div class="card-header bg-info" style="color:#fff ; font-weight: 900;">Pendidikan</div>
                      <div class="card-body">

                        <div class="row gx-3 mb-3">
                          <div class="col-md-5" style="margin-left: 30px;">
                            <label class="small mb-1" style="font-weight: 900;">riwayat pendidikan :</label>


                          </div>
                          <div class="col-md-5" style="margin-left: 30px;">
                            <label class="small mb-1" style="font-weight: 900;">nama pendidikan :</label>
                            <input class="form-control" name="nama_pendidikan[]" required value="<?= $pendidikan['nama_pendidikan']; ?>">

                          </div>
                          <div class="col-md-5" style="margin-left: 30px;">
                            <label class="" style="font-weight: 900;">TK</label>
                            <input class="form-control" type="hidden" name="riwayat_pendidikan" value="<?= $pendidikan['riwayat_pendidikan']; ?>">

                          </div>

                          <div class="col-md-5" style="margin-left: 30px;">
                            <label class="small mb-1" style="font-weight: 900;"></label>
                            <input class="form-control" name="nama_pendidikan[]" value="<?= $pendidikan['nama_pendidikan']; ?>">

                          </div>

                          <div class="col-md-5" style="margin-left: 30px;">
                            <label class="" style="font-weight: 900;">SD</label>
                            <input class="form-control" type="hidden" name="riwayat_pendidikan" value="<?= $pendidikan['riwayat_pendidikan']; ?>">

                          </div>

                          <div class="col-md-5" style="margin-left: 30px;">
                            <label class="small mb-1" style="font-weight: 900;"></label>
                            <input class="form-control" name="nama_pendidikan[]" value="<?= $pendidikan['nama_pendidikan']; ?>">

                          </div>

                          <div class="col-md-5" style="margin-left: 30px;">
                            <label class="" style="font-weight: 900;">SMP</label>
                            <input class="form-control" type="hidden" name="riwayat_pendidikan" value="<?= $pendidikan['riwayat_pendidikan']; ?>">

                          </div>

                          <div class="col-md-5" style="margin-left: 30px;">
                            <label class="small mb-1" style="font-weight: 900;"></label>
                            <input class="form-control" name="nama_pendidikan[]" value="<?= $pendidikan['nama_pendidikan']; ?>">

                          </div>

                          <div class="col-md-5" style="margin-left: 30px;">
                            <label class="" style="font-weight: 900;">SMA/SMK</label>
                            <input class="form-control" type="hidden" name="riwayat_pendidikan" value="<?= $pendidikan['riwayat_pendidikan']; ?>">

                          </div>

                          <div class="col-md-5" style="margin-left: 30px;">
                            <label class="small mb-1" style="font-weight: 900;"></label>
                            <input class="form-control" name="nama_pendidikan[]" value="<?= $pendidikan['nama_pendidikan']; ?>">

                          </div>

                          <div class="col-md-5" style="margin-left: 30px;">
                            <label class="" style="font-weight: 900;">Perguruan Tinggi</label>
                            <input class="form-control" type="hidden" name="riwayat_pendidikan" value="<?= $pendidikan['riwayat_pendidikan']; ?>">

                          </div>
                        </div>



                        <!-- <div class="col-12" style="margin-left:800px;"> -->
                        <button class="btn btn-primary" type="submit" name="ubah" style="margin-right: 20px auto;">ubah data</button>
                        <!-- </div> -->



                      </div>
                    </div>
                  </div>
                  <!-- End Tabel pendidikan -->

            </form>
          </div>
        </div>
      </div>

      <!-- End Tabel Data Diri -->
      <br><br><br><br><br><br>




      <!-- End Tabel keahlian -->

      <br><br><br><br><br><br><br>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


      <!-- fungsi javascript untuk menampilkan form dinamis  -->
      <!-- penjelasan :
saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
      <script type="text/javascript">
        $(document).ready(function() {
          $(".add-more").click(function() {
            var html = $(".copy").html();
            $(".after-add-more").after(html);
          });

          // saat tombol remove dklik control group akan dihapus 
          $("body").on("click", ".remove", function() {
            $(this).parents(".control-group").remove();
          });
        });
      </script>
    </body>

</html>