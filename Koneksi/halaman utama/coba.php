<?php
require 'config.php';
// $biodata = query("SELECT * FROM data_diri");

//tombol cari ditekan
if (isset($_POST["Search"])) {
  $biodata = Search2($_POST["keyword"]);
} else {
  $biodata = Search2("");
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
  <link rel="stylesheet" href="../CSS/sos.css">
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
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Daftar Karyawan</span></a></li>
          <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Skill</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
          <li><a href="login.php" class="nav-link"><i class="bx bx-exit"></i> <span>LogOut</span></a></li>

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Hero Section ======= -->
    <div id="hero" class="d-flex flex-column justify-content-center align-items-center bg-info" data-aos="fade-in" style="height: 720px ; color:#fff;">
      <h1>Hallo,Selamat Datang</h1>

      <p><span class="typed" data-typed-items="di Website ini,Silahkan Isi Daftar Dibawah"></span></p>
    </div>
    <!-- End Hero -->


    <!-- ======= Daftar Karyawan Section ======= -->
    <section id="about" class="about">
      <div class="container" style="margin-top: 20px">
        <div class="row">
          <div class="col-md-12">
            <h2 style="text-align: center;margin-bottom: 30px; font-weight:900; font-size:50px;">Daftar Karyawan</h2>
            <!-- tombol tambah data -->
            <button id="button"><i class="bx bxs-user-plus"></i><a href="tambah.php">Tambah Data</a></button>
            <!-- end tombol tambah data -->
            <form class="d-flex" action="" method="POST" style="width: 30%;">
              <input class="form-control me-2" type="search" name="keyword" placeholder="Search" autofocus autocomplete="off">
              <button class="btn btn-outline-success" type="submit" name="Search">Search</button>
            </form>
            <br>
            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr style="background-color: #3498db;">
                  <th style="text-align:center ;">No</th>
                  <!-- <th style="text-align:center ;">id</th> -->
                  <th style="text-align:center ;">Nama</th>
                  <th style="text-align:center ;">Tempat</th>
                  <th style="text-align:center ;">Tgl_lahir</th>
                  <th style="text-align:center ;">Jenis_Kelamin</th>
                  <th style="text-align:center ;">Gol_Darah</th>
                  <th style="text-align:center ;">Alamat</th>

                  <th colspan="2" style="text-align:center ;">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;
                
                foreach ($biodata as $m) : ?>
                  <tr align="center">
                    <td style="text-align:center ;"><?= $i++; ?></td>
                    
                    <td style="text-align:center ;"><?= $m['Nama']; ?></td>
                    <td style="text-align:center ;"><?= $m['Tempat']; ?></td>
                    <td style="text-align:center ;"><?= $m['Tgl_lahir']; ?></td>
                    <td style="text-align:center ;"><?= $m['Jenis_Kelamin']; ?></td>
                    <td style="text-align:center ;"><?= $m['Gol_Darah']; ?></td>
                    <td style="text-align:center ;"><?= $m['Alamat']; ?></td>
                    <td align="center">
                      <button type="button" class="btn btn-primary"><a href="ubah.php?id=<?= $m['id_utama']; ?>"><i class="bx bxs-calendar-edit" style="color: #fff;"></i></a></button>
                      |
                      <button type="button" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?.')"><a href="delete.php?id=<?= $m['id_utama']; ?>"><i class="bx bxs-trash" style="color: #fff;"></i></a></button>
                      |
                      <button type="button" class="btn btn-warning"><a href="Detail.php?id=<?= $m['id_utama']; ?>" style="color: #fff;">Detail</a></button>
                    </td>
                  <?php endforeach; ?>
                  </tr>
              </tbody>

            </table>

          </div>

        </div>

      </div>


      </form>

      </div>
    </section><!-- End Daftar Karyawan Section -->
    <br><br><br><br><br><br><br><br><br><br><br>

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2 style="color: black; font-weight:900;">Skills</h2>

        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill" style="color: black; font-size:15px;">HTML <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill" style="color: black; font-size:15px;">CSS <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill" style="color: black; font-size:15px;">JavaScript <i class="val">35%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

            <div class="progress">
              <span class="skill" style="color: black; font-size:15px;">PHP <i class="val">40%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

            <div class="progress">
              <span class="skill" style="color: black; font-size:15px;">Photoshop <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->
    <br><br><br><br><br><br><br>


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-briefcase"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
              occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-card-checklist"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
              fugiat nulla pariatur</p>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->





  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
  
  
  

</body>

</html>