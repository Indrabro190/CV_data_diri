<?php
require 'config.php';
//koneksi ke DBMS
// $conn = mysqli_connect("localhost","root","","biodata_diri");
//cek apakah tombol tambah sudah ditekan atau belum
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'coba.php';
        </script>";
  } else {
    echo "<script>
        alert('data gagal ditambahkan!');
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
  <link rel="stylesheet" href="../CSS/tambah.css">
  <!-- End Of My CSS -->

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- font awesome -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <!-- CSS bootstrap detail -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
  <!-- End CSS bootstrap detail -->

  <script src="jquery.min.js" type="text/javascript"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">



</head>

<body style="background-color:#f1f2f6;">

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
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

      <nav id="navbar" class="nav-menu navbar" style="font-weight:900;">
        <ul>
          <li><a href="coba.php" class="nav-link"><i class="bx bx-arrow-back"></i><span>Kembali</span></a></li>
        </ul>
      </nav>
      <!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->



  <main id="main">


    <!-- Ukuran tabel -->
    <div class="col-xl-12">
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
                <input class="form-control" name="Nama" value="" required>

              </div>
              <div class="col-md-5" style="margin-left: 30px;">
                <label class="small mb-1" style="font-weight: 900;">Tempat :</label>
                <input class="form-control" name="Tempat" value="" required>

              </div>
            </div>

            <div class="row gx-3 mb-3">
              <div class="col-md-5" style="margin-left: 30px;">
                <label class="small mb-1" style="font-weight: 900;">Tgl lahir :</label>
                <input type="date" class="form-control" name="Tgl_lahir" value="" required>

              </div>
              <div class="col-md-5" style="margin-left: 30px;">
                <label class="small mb-1" style="font-weight: 900;">Jenis Kelamin :</label>
                <select class="form-select" name="Jenis_Kelamin" required>
                  <option selected disabled value="">Pilih</option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>

              </div>
            </div>

            <div class="row gx-3 mb-3">
              <div class="col-md-5" style="margin-left: 30px;">
                <label class="small mb-1" style="font-weight: 900;">Gol Darah :</label>
                <input class="form-control" name="Gol_Darah" value="">

              </div>
              <div class="col-md-5" style="margin-left: 30px;">
                <label class="small mb-1" style="font-weight: 900;">Alamat :</label>
                <input class="form-control" name="Alamat" value="" required>

              </div>
            </div>

            <div class="row gx-3 mb-3">
              <div class="col-md-5" style="margin-left: 30px;">
                <label class="small mb-1" style="font-weight: 900;">RT/RW :</label>
                <input class="form-control" name="RT_RW" value="" required>

              </div>
              <div class="col-md-5" style="margin-left: 30px;">
                <label class="small mb-1" style="font-weight: 900;">Kel/Desa :</label>
                <input class="form-control" name="Kel_Desa" value="" required>

              </div>
            </div>

            <div class="row gx-3 mb-3">
              <div class="col-md-5" style="margin-left: 30px;">
                <label class="small mb-1" style="font-weight: 900;">Kecamatan :</label>
                <input class="form-control" name="Kecamatan" value="" required></input>

              </div>
              <div class="col-md-5" style="margin-left: 30px;">
                <label class="small mb-1" style="font-weight: 900;">Agama :</label>
                <input class="form-control" name="Agama" value="" required>

              </div>
            </div>

            <div class="row gx-3 mb-3">
              <div class="col-md-5" style="margin-left: 30px;">
                <label class="small mb-1" style="font-weight: 900;">Status Perkawinan :</label>
                <select class="form-select" name="Status_Perkawinan" required>
                  <option selected disabled value="">Pilih</option>
                  <option>Nikah</option>
                  <option>Belum Nikah</option>
                </select>

              </div>
              <div class="col-md-5" style="margin-left: 30px;">
                <label class="small mb-1" style="font-weight: 900;">Pekerjaan :</label>
                <input class="form-control" name="Pekerjaan" value="" required>

              </div>
            </div>

            <div class="row gx-3 mb-3">
              <div class="col-md-5" style="margin-left: 30px;">
                <label class="small mb-1" style="font-weight: 900;">Kewarganegaraan :</label>
                <input class="form-control" name="Kewarganegaraan" value="" required>

              </div>

            </div>


            <!-- Tabel keahlian -->
            <!-- Ukuran tabel -->
            <div class="col-xl-12">
              <!-- End ukuran tabel -->

              <!-- Account card-->
              <div class="card mb-4" style="box-shadow: 1px 2px 5px black;">
                <div class="card-header bg-info" style="color:#fff ; font-weight: 900;">Keahlian</div>
                <div class="card-body">
                  <div class="row gx-3 mb-3">
                    <div class="col-md-5" style="margin-left: 30px;">
                      <label class="small mb-1" style="font-weight: 900;">Nama Keahlian :</label>
                      <input class="form-control" name="nama_keahlian[]" value="" required></input>

                    </div>
                    <div class="col-md-5" style="margin-left: 30px;">
                      <label class="small mb-1" style="font-weight: 900;">keterangan :</label>
                      <input class="form-control" name="keterangan[]" value="" required></input>

                    </div>
                  </div>
                  <div class="row gx-3 mb-3">
                    <div class="col-md-5" style="margin-left: 30px;">
                      <label class="small mb-1" style="font-weight: 900;"></label>
                      <input class="form-control" name="nama_keahlian[]" value="" required></input>

                    </div>
                    <div class="col-md-5" style="margin-left: 30px;">
                      <label class="small mb-1" style="font-weight: 900;"></label>
                      <input class="form-control" name="keterangan[]" value="" required></input>

                    </div>
                  </div>
                  <div class="row gx-3 mb-3">
                    <div class="col-md-5" style="margin-left: 30px;">
                      <label class="small mb-1" style="font-weight: 900;"></label>
                      <input class="form-control" name="nama_keahlian[]" value="" required></input>

                    </div>
                    <div class="col-md-5" style="margin-left: 30px;">
                      <label class="small mb-1" style="font-weight: 900;"></label>
                      <input class="form-control" name="keterangan[]" value="" required></input>

                    </div>
                  </div>
                </div>
              </div>
                  <!-- membuat form  -->
                  <!-- gunakan tanda [] untuk menampung array  -->
                  <!-- <form action="proses.php" method="POST">
                    <div class="control-group after-add-more col-4">
                      <label>Nama Keahlian</label>
                      <input type="text" name="nama_keahlian[]" class="form-control">
                      <label>Keterangan</label>
                      <input type="text" name="keterangan[]" class="form-control">
                      <br>
                      <button class="btn btn-success add-more" type="button">
                        <i class="glyphicon glyphicon-plus"></i> Add
                      </button>
                      <hr>
                    </div>
                  </form> -->
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



                    </div> Tabel Pendidikan -->
                </div>
                <!-- Ukuran tabel -->
                <div class="col-xl-12">
                  <!-- End ukuran tabel -->

                  <!-- Account details card-->
                  <div class="card mb-4" style="box-shadow: 1px 2px 5px black;">
                    <div class="card-header bg-info" style="color:#fff ; font-weight: 900;">Pendidikan</div>
                    <div class="card-body">
                      <!-- membuat form  -->
                      <!-- gunakan tanda [] untuk menampung array  -->
                      <!-- <form action="proses.php" method="POST"> -->
                      <!-- <div class="control-group after-add col-4">
                          <label>TK</label>
                          <input type="text" name="nama_pendidikan[]" class="form-control">
                          <label>SD</label>
                          <input type="text" name="nama_pendidikan[]" class="form-control">
                          <label>SMP</label>
                          <input type="text" name="nama_pendidikan[]" class="form-control">
                          <label>SMA/SMK</label>
                          <input type="text" name="nama_pendidikan[]" class="form-control">
                          <label>Perguruan Tinggi</label>
                          <input type="text" name="nama_pendidikan[]" class="form-control">
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
                          <label>TK</label>
                          <input type="text" name="nama_pendidikan[]" class="form-control">
                          <label>SD</label>
                          <input type="text" name="nama_pendidikan[]" class="form-control">
                          <label>SMP</label>
                          <input type="text" name="nama_pendidikan[]" class="form-control">
                          <label>SMA/SMK</label>
                          <input type="text" name="nama_pendidikan[]" class="form-control">
                          <label>Perguruan Tinggi</label>
                          <input type="text" name="nama_pendidikan[]" class="form-control">
                            <br>
                            <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                            <hr>



                          </div>
                        </div> -->
                      <div class="row gx-3 mb-3">
                        <div class="col-md-5" style="margin-left: 30px;">
                          <label class="small mb-1" style="font-weight: 900;">riwayat pendidikan :</label>


                        </div>
                        <div class="col-md-5" style="margin-left: 30px;">
                          <label class="small mb-1" style="font-weight: 900;">nama pendidikan :</label>
                          <input class="form-control" name="nama_pendidikan" value="">

                        </div>
                        <div class="col-md-5" style="margin-left: 30px;">
                          <label class="" style="font-weight: 900;">TK</label>
                          <input class="form-control" type="hidden" name="riwayat_pendidikan" value="">

                        </div>

                        <div class="col-md-5" style="margin-left: 30px;">
                          <label class="small mb-1" style="font-weight: 900;"></label>
                          <input class="form-control" name="nama_pendidikan" value="">

                        </div>

                        <div class="col-md-5" style="margin-left: 30px;">
                          <label class="" type="hidden" style="font-weight: 900;">SD</label>
                          <input class="form-control" type="hidden" name="riwayat_pendidikan" value="">

                        </div>

                        <div class="col-md-5" style="margin-left: 30px;">
                          <label class="small mb-1" style="font-weight: 900;"></label>
                          <input class="form-control" name="nama_pendidikan" value="">

                        </div>

                        <div class="col-md-5" style="margin-left: 30px;">
                          <label class="" type="hidden" style="font-weight: 900;">SMP</label>
                          <input class="form-control" type="hidden" name="riwayat_pendidikan" value="">

                        </div>

                        <div class="col-md-5" style="margin-left: 30px;">
                          <label class="small mb-1" style="font-weight: 900;"></label>
                          <input class="form-control" name="nama_pendidikan" value="">

                        </div>

                        <div class="col-md-5" style="margin-left: 30px;">
                          <label class="" type="hidden" style="font-weight: 900;">SMA/SMK</label>
                          <input class="form-control" type="hidden" name="riwayat_pendidikan" value="">

                        </div>

                        <div class="col-md-5" style="margin-left: 30px;">
                          <label class="small mb-1" style="font-weight: 900;"></label>
                          <input class="form-control" name="nama_pendidikan" value="">

                        </div>

                        <div class="col-md-5" style="margin-left: 30px;">
                          <label class="" type="hidden" style="font-weight: 900;">Perguruan Tinggi</label>
                          <input class="form-control" type="hidden" name="riwayat_pendidikan" value="">

                        </div>
                      </div>

                      <div class="col-12">
                        <button class="btn btn-primary" type="submit" name="tambah">tambah data</button>
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

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="../assets/vendor/typed.js/typed.min.js"></script>
    <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

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

<!-- <div class="row gx-3 mb-3">
                      <div class="col-md-5" style="margin-left: 30px;">
                        <label class="small mb-1" style="font-weight: 900;">nama keahlian :</label>
                        <input class="form-control" name="nama_keahlian" value="" required>

                      </div>
                      <div class="col-md-5" style="margin-left: 30px;">
                        <label class="small mb-1" style="font-weight: 900;">keterangan :</label>
                        <input class="form-control" name="keterangan" value="" required>

                      </div>

                    </div> -->