<?php
require "config.php";
$id = $_GET['id'];

//m$m berdasarkan id
// $m = query("SELECT data_diri.*,keahlian.nama_keahlian,keahlian.keterangan FROM data_diri
// INNER JOIN keahlian ON data_diri.id_utama = keahlian.id_data_diri AND data_diri.id_utama = $id;");
$m = query("SELECT data_diri.*,keahlian.nama_keahlian,keahlian.keterangan,pendidikan.riwayat_pendidikan,pendidikan.nama_pendidikan
FROM data_diri INNER JOIN keahlian ON data_diri.id_utama = keahlian.id_utama
INNER JOIN pendidikan ON data_diri.id_utama = pendidikan.id_utama AND data_diri.id_utama = $id;");

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
    <link rel="stylesheet" href="../CSS/detail.css">
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


</head>

<body>

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

            <nav id="navbar" class="nav-menu navbar">
                <ul>

                    <li><a href="coba.php" class="nav-link"><i class="bx bx-arrow-back"></i> <span>Kembali</span></a></li>

                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->



    <main id="main">

        <!-- ======= Daftar Karyawan Section ======= -->
        <!-- <section id="detail" class="detail"> -->
        <div class="card">

            <!-- <div class="section-title"> -->
            <!-- <h2>Detail Karyawan</h2> -->
            <form action="coba.php" method="POST">

                <div class="container">
                    <div class="team-single">

                        <div class="row">
                            <div class="container-xl px-4 mt-4">
                                <!-- Account page navigation-->

                                <!-- <hr class="mt-0 mb-4">
                                <div class="row">
                                    <div class="col-xl-4">
                                        Profile picture card
                                        <div class="card mb-4 mb-xl-0">
                                            <div class="card-header">Profile Picture</div>
                                            <div class="card-body text-center">
                                                Profile picture image
                                                <img class="img-account-profile rounded-circle mb-2" src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                                Profile picture help block
                                                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                                Profile picture upload button
                                                <button class="btn btn-primary" type="button">Upload new image</button>
                                            </div>
                                        </div>
                                    </div> -->

                                <!-- Ukuran tabel -->
                                <div class="col-xl-12" style="justify-content: center; align-items:center; margin:auto;">
                                    <!-- End ukuran tabel -->

                                    <!-- Account details card-->
                                    <div class="card mb-4">
                                        <div class="card-header bg-dark" style="color:#fff ; font-weight: 900;">Detail Karyawan</div>
                                        <div class="card-body">
                                            <form>
                                                <!-- Form Group (username)-->
                                                <div class="pertama">
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-5" style="margin-left: 30px;">
                                                            <!-- <label class="small mb-1" style="font-weight: 900; color: red;">Nama :</label> -->
                                                            <label class="">Nama : <span><?= $m['Nama']; ?></span></label>
                                                        </div>

                                                        <!-- Form Row-->


                                                    </div>
                                                    <!-- Form Group (last name)-->
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-5" style="margin-left: 30px;">
                                                            <!-- <label class="small mb-1" style="font-weight: 900; color: green ;">Tgl lahir</label> -->
                                                            <label class="">Tempat : <span><?= $m['Tempat']; ?></span></label>

                                                        </div>

                                                    </div>
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-5" style="margin-left: 30px;">
                                                            <!-- <label class="small mb-1" style="font-weight: 900; color:#3B3B98 ;">Gol Darah :</label> -->
                                                            <label class="">Tgl lahir : <span><?= $m['Tgl_lahir']; ?></span></label>

                                                        </div>

                                                    </div>

                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-5" style="margin-left: 30px;">
                                                            <!-- <label class="small mb-1" style="font-weight: 900; color:#6ab04c ;">RT/RW :</label> -->
                                                            <label class="">Jenis Kelamin : <span><?= $m['Jenis_Kelamin']; ?></span></label>

                                                        </div>


                                                    </div>
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-5" style="margin-left: 30px;">
                                                            <!-- <label class="small mb-1" style="font-weight: 900; color:#12CBC4 ;">Kecamatan</label> -->
                                                            <label class="">Gol Darah : <span><?= $m['Gol_Darah']; ?></span></label>
                                                        </div>


                                                    </div>
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-5" style="margin-left: 30px;">
                                                            <!-- <label class="small mb-1" style="font-weight: 900; color:#5758BB ;">Status_Perkawinan</label> -->
                                                            <label class="">Alamat : <span><?= $m['Alamat']; ?></span></label>
                                                        </div>


                                                    </div>
                                                    <div class="geser">
                                                        <div class="row gx-3 mb-3">
                                                            <div class="col-md-5" style="margin-left: 30px;">
                                                                <!-- <label class="small mb-1" style="font-weight: 900; color:#833471 ;">Kewarganegaraan</label> -->
                                                                <label class="">RT/RW : <span><?= $m['RT_RW']; ?></span></label>
                                                            </div>

                                                        </div>

                                                        <div class="row gx-3 mb-3">
                                                            <div class="col-md-5" style="margin-left: 30px;">
                                                                <!-- <label class="small mb-1" style="font-weight: 900; color:#1B1464 ;">Keterangan</label> -->
                                                                <label class="">Kel/Desa : <span><?= $m['Kel_Desa']; ?></span></label>
                                                            </div>

                                                        </div>

                                                        <div class="row gx-3 mb-3">
                                                            <div class="col-md-5" style="margin-left: 30px;">
                                                                <!-- <label class="small mb-1" style="font-weight: 900; color:#5758BB ;">Keahlian</label> -->
                                                                <label class="">Kecamatan : <span><?= $m['Kecamatan']; ?></span></label>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-5" style="margin-left: 30px;">
                                                            <!-- <label class="small mb-1" style="font-weight: 900; color:#5758BB ;">Keahlian</label> -->
                                                            <label class="">Agama : <span><?= $m['Agama']; ?></span></label>
                                                        </div>

                                                    </div>

                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-5" style="margin-left: 30px;">
                                                            <!-- <label class="small mb-1" style="font-weight: 900; color:#5758BB ;">Keahlian</label> -->
                                                            <label class="">Status Perkawinan : <span><?= $m['Status_Perkawinan']; ?></span></label>
                                                        </div>

                                                    </div>

                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-5" style="margin-left: 30px;">
                                                            <!-- <label class="small mb-1" style="font-weight: 900; color:#5758BB ;">Keahlian</label> -->
                                                            <label class="">Pekerjaan : <span><?= $m['Pekerjaan']; ?></span></label>
                                                        </div>

                                                    </div>

                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-5" style="margin-left: 30px;">
                                                            <!-- <label class="small mb-1" style="font-weight: 900; color:#5758BB ;">Keahlian</label> -->
                                                            <label class="">Kewarganegaraan : <span><?= $m['Kewarganegaraan']; ?></span></label>
                                                        </div>

                                                    </div>

                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-5" style="margin-left: 30px;">
                                                            <!-- <label class="small mb-1" style="font-weight: 900; color:#5758BB ;">Keahlian</label> -->
                                                            <label class="">Nama Keahlian :<span><?= $m['nama_keahlian']; ?></span></label>
                                                        </div>

                                                    </div>

                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-5" style="margin-left: 30px;">
                                                            <!-- <label class="small mb-1" style="font-weight: 900; color:#5758BB ;">Keahlian</label> -->
                                                            <label class="">Keterangan :<span><?= $m['keterangan']; ?></span></label>
                                                        </div>

                                                    </div>

                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-5" style="margin-left: 30px;">
                                                            <!-- <label class="small mb-1" style="font-weight: 900; color:#5758BB ;">Keahlian</label> -->
                                                            <label class="">Riwayat Pendidikan :</label>
                                                        </div>

                                                    </div>

                                                    <div class="geser">
                                                        <div class="row gx-3 mb-3">
                                                            <div class="col-md-5" style="margin-left: 30px;">
                                                                <!-- <label class="small mb-1" style="font-weight: 900; color:#833471 ;">Kewarganegaraan</label> -->
                                                                <label class="">TK: <span><?= $m['nama_pendidikan']; ?></span></label>
                                                            </div>

                                                        </div>

                                                        <div class="row gx-3 mb-3">
                                                            <div class="col-md-5" style="margin-left: 30px;">
                                                                <!-- <label class="small mb-1" style="font-weight: 900; color:#1B1464 ;">Keterangan</label> -->
                                                                <label class="">SD : <span><?= $m['nama_pendidikan']; ?></span></label>
                                                            </div>

                                                        </div>

                                                        <div class="row gx-3 mb-3">
                                                            <div class="col-md-5" style="margin-left: 30px;">
                                                                <!-- <label class="small mb-1" style="font-weight: 900; color:#5758BB ;">Keahlian</label> -->
                                                                <label class="">SMP : <span><?= $m['nama_pendidikan']; ?></span></label>
                                                            </div>

                                                        </div>

                                                        <div class="row gx-3 mb-3">
                                                            <div class="col-md-5" style="margin-left: 30px;">
                                                                <!-- <label class="small mb-1" style="font-weight: 900; color:#5758BB ;">Keahlian</label> -->
                                                                <label class="">SMA/SMK : <span><?= $m['nama_pendidikan']; ?></span></label>
                                                            </div>

                                                        </div>

                                                        <div class="row gx-3 mb-3">
                                                            <div class="col-md-5" style="margin-left: 30px;">
                                                                <!-- <label class="small mb-1" style="font-weight: 900; color:#5758BB ;">Keahlian</label> -->
                                                                <label class="">Perguruan Tinggi : <span><?= $m['nama_pendidikan']; ?></span></label>
                                                            </div>

                                                        </div>
                                                    </div>



                                                </div>

                                            </form>
                                        </div>


                                    </div>

                                </div>

            </form>

        </div>

        <!-- End Daftar Karyawan Section -->
        <!-- End Tabel keahlian -->

        <br><br><br><br><br><br><br>


</body>

</html>