<?php
include ('../../koneksi.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Dashboard User</title>

  <!-- Fontfaces CSS-->
  <link href="../css/font-face.css" rel="stylesheet" media="all">
  <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
  <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
  <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
  <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
  <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
  <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
  <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
  <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
  <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="../css/theme.css" rel="stylesheet" media="all">


</head>

<?php
$npm = $_SESSION['npm'];
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE npm = '$npm'");
$data = mysqli_fetch_array($query);

if ($npm == 0) {
    header("location:../../index.html");
}
?>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <a href="dashboard_user.php" style="margin-left:10%;">
                            <img src="../images/icon/logo-atron.png" />
                        </a>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled">
                            <li class="has-sub">
                                <a href="dashboard_user.php">
                                    <i class="fas fa-tachometer-alt"></i>Dashboard
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                            <li class="has-sub">
                                <a href="profile_user.php">
                                    <i class="fas fa-user-circle"></i>Profile
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="profile_user.php">My Profile</a>
                                    </li>
                                    <li>
                                        <a href="manage_user.php">Manage Profile</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="pengajuan.php">
                                    <i class="fas fa-fw fa-paper-plane"></i>Pengajuan
                                    <span class="bot-line"></span>
                                </a>
                                <ul class="header3-sub-list list-unstyled">
                                    <li>
                                        <a href="permohonan_pkl.php">Permohonan PKL</a>
                                    </li>
                                    <li>
                                        <a href="mahasiswa_aktif.php">Keterangan Mahasiswa Aktif</a>
                                    </li>
                                    <li>
                                        <a href="surat_keluar.php">Surat Keluar</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="riwayat_pengajuan_user.php">
                                    <i class="fas fa-fw fa-hourglass-half"></i>Riwayat Pengajuan
                                    <span class="bot-line"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <img src="../../images/<?php echo $data['foto']  ?>" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="../profile_user.php"><?php echo $data['nama'] ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                            <a href="profile_user.php">
                                                <img src="../../images/<?php echo $data['foto']  ?>" />
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="profile_user.php"><?php echo $data['nama'] ?></a>
                                            </h5>
                                            <span class="email"><?php echo $data['email'] ?></span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="profile_user.php">
                                                <i class="fas fa-fw fa-user-circle"></i>Profile</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="manage_user.php">
                                                <i class="fas fa-fw fa-cog"></i>Manage Profile</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="../../logout.php">
                                            <i class="fas fa-fw fa-sign-out-alt"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        <header class="header-mobile header-mobile-2 d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="dashboard_user.php">
                            <img src="../images/icon/logo-atron.png"/>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="dashboard_user.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-user-circle"></i>Profile</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="profile_user.php">My Profile</a>
                                </li>
                                <li>
                                    <a href="manage_user.php">Manage Profile</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="pengajuan.php">
                                <i class="fas fa-copy"></i>Pengajuan</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="permohonan_pkl.php">Permohonan PKL</a>
                                </li>
                                <li>
                                    <a href="mahasiswa_aktif.php">Keterangan Mahasiswa Aktif</a>
                                </li>
                                <li>
                                    <a href="surat_keluar.php">Surat Keluar</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="riwayat_pengajuan_user.php">
                                <i class="fas fa-fw fa-hourglass-half"></i>Riwayat Pengajuan</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="sub-header-mobile-2 d-block d-lg-none">
            <div class="header__tool">
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                          <img src="../../images/<?php echo $data['foto']  ?>" />
                        </div>
                        <div class="content">
                          <a class="js-acc-btn" href="../profile_user.php"><?php echo $data['nama'] ?></a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                  <a href="profile_user.php">
                                      <img src="../../images/<?php echo $data['foto']  ?>" />
                                  </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                      <a href="profile_user.php"><?php echo $data['nama'] ?></a>
                                    </h5>
                                    <span class="email"><?php echo $data['email'] ?></span>
                                </div>
                            </div>
                            <div class="account-dropdown__body">
                                <div class="account-dropdown__item">
                                    <a href="profile_user.php">
                                        <i class="fas fa-fw fa-user-circle"></i>Profile</a>
                                </div>
                                <div class="account-dropdown__item">
                                    <a href="manage_user.php">
                                        <i class="fas fa-fw fa-cog"></i>Manage Profile</a>
                                </div>
                            </div>
                            <div class="account-dropdown__footer">
                              <a href="../../logout.php">
                                <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4 mt-4">Welcome back
                                <span> <?php echo $data['nama'] ?> !</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>

            <div class="card mt-2 ml-5" style="max-width: 1200px;">
                <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="../images/gedung-fik.png" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-title"><strong>ATRON Fasilkom</strong></h1>
                        <h4 class="card-title">Administrasi Online Fakultas Ilmu Komputer</h4>
                        <br>
                        <p class="card-text">Selamat datang di website ATRON Fasilkom!</p>
                        <br>
                        <p class="card-text">Website ini dibuat bertujuan untuk memudahkan kedua belah pihak baik pihak TU maupun Mahasiswa dalam urusan administrasi surat menyurat pada kebutuhan tertentu.</p>
                        <p class="card-text">Berikut merupakan jenis administrasi yang dicakup:</p>
                        <br>
                        <p class="card-text">1. Surat Permohonan PKL</p>
                        <p class="card-text">2. Surat Keterangan Mahasiswa Aktif</p>
                        <p class="card-text">3. Surat Keluar</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Status surat yang sedang anda ajukan sekarang (jika ada) : <strong><a href="riwayat_pengajuan_user.php">Siap Diambil!</a></strong></small>
                    </div>
                </div>
            </div>
        </div>

        <!-- COPYRIGHT-->
        <section class="p-t-60 p-b-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2019 Jaher Team. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END COPYRIGHT-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script type="text/javascript" src="../js/main.js"></script>

</body>

</html>
<!-- end document-->
