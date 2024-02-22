<?php
session_start();

include "../koneksi.php";
$result = mysqli_query($konek, "SELECT * FROM tb_user");
 
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit(); // Terminate script execution after the redirect
}

?>

<style>
        .gambar {
            max-width: 100%;
            height: auto;
        }
    </style>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>Wisata</title>
  <link rel="shortcut icon" href="assets/images/wonderful.png" type="image/svg" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/lineicons.css" />
  <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
  <section class="navbar-area navbar-nine">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="index.php">
              <img src="../logo/tugas logo only.png" alt="Logo" width="80px" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine"
              aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
              <span class="toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
              <ul class="navbar-nav me-auto">
                <li class="nav-item">
                  <a class="page-scroll active" href="#hero-area">Home</a>
                </li>
                <li class="nav-item">
                  <a class="page-scroll" href="#services">Tempat Wisata</a>
                </li>

                <li class="nav-item">
                  <a class="page-scroll" href="#pricing">Harga Tiket Masuk</a>
                </li>
              </ul>
        <style>

        .fa-regular.fa-user {
            margin-left: 5px; 
        }
        .dropdown-menu .dropdown-item {
            color: black;
        }
        .dropdown-menu {
            background-color: #333; 
        }

</style>
            
    <ul class="navbar-nav ms-auto me-md-4 mb-2 mb-lg-0">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <li class="nav-item dropdown d-flex text-light">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Hi, <?php echo $_SESSION['username']; ?>!
                    <i class="fa-regular fa-user"></i>
                </button>
                <ul class="dropdown-menu border-0 bg-gradient-dark text-black" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                    <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>


            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
  
  <section id="hero-area" class="header-area header-eight">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-content">
            <h1>Selamat datang, <?php echo $_SESSION['username']; ?>! <br>Mau Kemana?</h1>
            <p>
             Temukan berbagai tempat wisata menarik di bandung dengan<br>pengalaman yang tak pernah tebayarkan sebelumnya!
            </p>
            
            <div class="button">
              <a href="#contact" class="btn primary-btn">Pesan Sekarang</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12">
          <div class="header-image">
            <img src="assets/images/deran.jpg" alt="#" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about-area about-five">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-12">
          <div class="about-image-five">
            <img src="assets/images/Gunung Putri Lembang.jpg" alt="about" />
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div class="about-five-content">
            <h2 class="main-title fw-bold">Cek daftar tempat wisata di Bandung ini untuk jadi referensimu!</h2>
            <div class="about-five-tab">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-who" role="tabpanel" aria-labelledby="nav-who-tab">
                  Bandung adalah kota yang selalu ngangenin, bahkan bagi kamu yang udah sering liburan ke Bandung sekalipun. Maklum, selain , Bandung juga penuh dengan objek wisata yang bikin kota ini jadi salah satu magnet wisata utama di Pulau Jawa.<br><br>
                  Enggak heran juga, tiap akhir pekan, ada ribuan atau bahkan puluhan ribu masyarakat Jakarta yang memilih Kota Bandung sebagai destinasi liburan pendek mereka!
                  Apa aja sih sebenernya tempat wisata di Bandung yang bikin kota ini layak untuk dikunjungi dan dieksplor lagi?
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- section TEMPAT WISATA -->

  <section id="services" class="services-area services-eight">
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2 class="fw-bold">Tempat Wisata</h2>
                        <p>Temukan Destinasi Wisata Yang Kamu Inginkan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <?php
            $sql = "SELECT nama, deskripsi, image FROM tb_wisata";
            $result = mysqli_query($konek, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-services">
                            <a href="index.php">
                                <img class='gambar' src='data:image/jpeg;base64,<?php echo base64_encode($row['image']) ?>' alt='image'>
                            </a>
                            <div class="service-content"><br>
                                <h4><?php echo $row["nama"] ?></h4>
                                <p><?php echo $row["deskripsi"];?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo "<div class='col-12'>Tidak ada data dalam tabel.</div>";
            }
            ?>
        </div>
    </div>
</section>


  <!-- section HARGA -->

  <section id="pricing" class="pricing-area pricing-fourteen">
    <div class="section-title-five">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content">
                        <h2 class="fw-bold">Harga Tiket Masuk</h2>
                        <p>Silahkan Memilih Tiket Yang Tersedia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $sql = "SELECT nama, harga, keterangan, image FROM tb_wisata";
            $result = mysqli_query($konek, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="pricing-style-fourteen">
                            <a href="index.php">
                                <img class='gambar' src='data:image/jpeg;base64,<?php echo base64_encode($row['image']) ?>' alt='image'>
                            </a>
                            <div class="table-head"><br>
                                <h2><?php echo $row["nama"] ?></h2>
                            </div>
                            <div class="table-content"><br>
                                <ul class="table-list">
                                    <li> <i class="lni lni-checkmark-circle"></i> <?php echo $row["harga"] ?></li>
                                    <li> <i class="lni lni-checkmark-circle"></i> <?php echo $row["keterangan"] ?></li>
                                </ul>
                            </div>
                            <div class="light-rounded-buttons">
                                <a href="#contact" class="btn primary-btn-outline">Pesan Sekarang</a>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<div class='col-12'>Tidak ada data dalam tabel.</div>";
            }
            ?>
        </div>
    </div>
</section>


  <section id="contact" class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <div class="contact-item-wrapper">
            <div class="row">
              <div class="col-12 col-md-6 col-xl-12">
                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="lni lni-phone"></i>
                  </div>
                  <div class="contact-content">
                    <h4>Kontak</h4>
                    <p>0821-2345-678</p>
                    <p>exploresphere@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-12">
                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="lni lni-map-marker"></i>
                  </div>
                  <div class="contact-content">
                    <h4>Alamat</h4>
                    <p>Bandung, Jawa Barat, Indonesia</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-xl-12">
                <div class="contact-item">
                  <div class="contact-icon">
                    <i class="lni lni-alarm-clock"></i>
                  </div>
                  <div class="contact-content">
                    <h4>Jam Operasional</h4>
                    <p>Senin - Minggu</p>
                    <p>Buka: 10:00 Pagi - 5:30 Malam</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="contact-form-wrapper">
            <div class="row">
              <div class="col-xl-10 col-lg-8 mx-auto">
                <div class="section-title text-center">
                  <span> Hubungi Kami </span>
                  <h2>
                    Pesan Tiketmu Sekarang!
                  </h2>
                  <p>
                    Buruan Pesan Tiketmu Sekarang Sebelum Kehabisan!
                  </p>
                </div>
              </div>
            </div>
            <form action="proses_book.php" method="POST" class="contact-form">
              <div class="row">
                <div class="col-md-6">
                <input type="hidden" name="id" id="id" placeholder="Nama" required />
                  <input type="text" name="nama" id="name" placeholder="Nama" required />
                </div>
                <div class="col-md-6">
                  <input type="email" name="email" id="email" placeholder="Email" required />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" name="nohp" id="phone" placeholder="No Telepon" required />
                </div>
                <div class="col-md-6">
                  <input type="date" name="tgl" id="data" placeholder="Date" required />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <input type="number" name="jumlah_org" id="phone" placeholder="Jumlah Orang" required />
                </div>
                <div class="col-md-6">
                  <select class="form-select" name="wisata" id="st_dept">
                      <option class="text-muted" selected disabled>Pilih Destinasi</option>
                      <?php

                      $query = "SELECT id, nama FROM tb_wisata"; 
                      $result = mysqli_query($konek, $query);

                      if ($result && mysqli_num_rows($result) > 0) {
                          while($row = mysqli_fetch_assoc($result)) {
                              echo "<option value='" . $row['nama'] . "'>" . $row['nama'] . "</option>";
                          }
                      } else {
                          echo "<option>Tidak ada destinasi tersedia</option>";
                      }
                      ?>
                  </select>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="col-12">
                  <div class="button text-center rounded-buttons">
                    <button type="submit" class="btn primary-btn rounded-full">
                      Pesan
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer-area footer-eleven">
    <div class="footer-top">
      <div class="container">
        <div class="inner-content">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
              <div class="footer-widget f-about">
                <div class="logo">
                  <a href="index.php">
                    <img src="../logo/tugas web logo full.png" alt="#" class="img-fluid" />
                  </a>
                </div>
                <p class="copyright-text">
                  <span>© 2024 Tempat Wisata.</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>