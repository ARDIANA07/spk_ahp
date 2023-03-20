<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Landing Page- Wisata Halal Bantul</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url() ?>/style/img/logo_bantul.png" rel="icon">
  <link href="<?php echo base_url() ?>/style/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url() ?>/style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/style/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/style/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/style/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/style/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="<?php echo base_url() ?>/style/css/variables.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="<?php echo base_url() ?>/style/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.4.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="<?php echo base_url('style/img/logo_bantul.png') ?>">
        <h4>SPK- Wisata Halal</h4>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html#about">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#alam">Wisata Alam</a></li>
          <li><a class="nav-link scrollto" href="index.html#buatan">Wisata Buatan</a></li>
          <li><a class="nav-link scrollto" href="index.html#desa">Desa Wisata</a></li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="<?= base_url('auth');?>">Masuk Akun</a>

    </div>
  </header><!-- End Header -->

  <section id="about" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
     <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php echo base_url('style/img/bg.jpg')?>" class="d-block w-100">
    </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/img/Pinus-Pengger.jpg')?>" class="d-block w-100"class="img-thumbnail">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/img/Pinus-Asri.jpg')?>" class="d-block w-100"class="img-thumbnail">
        </div>
      </div>
    </div><br>
      <h2><b> Selamat Datang di Website Wisata Bantul Yogyakarta</b></h2>
      <p>Bantul merupakan Kabupaten di Yogyakarta yang jumlah destinasi wisatanya paling banyak, dibandingkan dengan daerah kota lainnya yang ada di Yogyakarta.
        terdiri dari 3 kategori destinasi wisata Bantul, yaitu Desa Wisata, Wisata Buatan dan Wisata Alam.
      </p>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://youtu.be/mWACFgAV2Bw" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section>
  <main id="main">

    <!-- ======= Wisata Alam Section ======= -->
    <section id="alam" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2><b> Wisata Alam</b></h2>
          <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
        </div>
        <div class="row gy-5">
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/selarong.jpeg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Goa Selarong</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/a252843631464cb7e46478fb3ada0297.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Taman Jati Larangan</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/0c9ba0c9df455a07349b903267795a89.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Air Terjun Banyunibo</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/3d915fa425108ecd9e468ddd9f491523.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Pesona Alam Nggirli Cawan</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/c352636e0d8db4178f636d40ff457f48.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Polaman River Tubing</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/3ccee258b93c435cf9b8c31d76709bda.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Taman Kedung Asri</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/d47875e6f3d94b9f7f31d5d8c11f5014.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Selopamioro Adventure Park</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/76808b3bc58c8a3a2b38a408f0b565d8.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Via Ferrata Selopamioro</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/b59930392ef306f1cceb5e9528fa6c7a.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Pemandian Air Panas</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/358b00273c65a8df4ea8746cb992f8a2.png" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Pantai Parangtritis</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/30b79703491906c1399d46a7a679be50.png" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Pantai Parangkusumo</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/669f00f79baec024fa527031dd258cdd.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Pantai Depok</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/0f908526235451ad149eeb06d21a0829.png" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Laguna Depok</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/7484e651b56f35a372ba7ef7f1ebe9e1.png" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Pantai Cemara sewu</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/cd305c5d8cfa01da331604adf6ab3f2a.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Pantai Pandansari</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/8e1e463ba29977ec47a7d52d777e039b.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Pantai Cangkring</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/20a389a8be21e06431d7d590b44619f5.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Pantai Pengklik</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/08021f5011dad1d81da7b299f442dc19.JPG" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Hutan Mangrove</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/c0345bc9351b14621560ff2aa59ce657.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Air Terjun Pucung</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://seringjalan.com/wp-content/uploads/2020/06/Puncak-Sosok-wisataoke-dot-com.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Puncak Sosok</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Gunung Mungker</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Hutan Pinus Mangunan</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Pinus Pengger</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Puncak Becici</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Alas Literasi Banjarharjo</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Bukit Bego</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Pintu Langit Dahromo</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Bukit Lintang Sewu</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Watu Lawang</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Rumah Hobbit</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Dempak Indah</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Jurang Tembelan</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Ekowisata Jatisari</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Gua Gajah</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Bukit Dermo</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/167e22bd5a3022a93ec5281aa84d23b9.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Watu Mabur</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Air Terjun Randusari</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/14c6614101ab98deceb6b5a67812da43.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Bukit Panguk Kediwung</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/199f392960824b671b6a58274445a1e1.JPG" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Air Terjun Lepo</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/48ef8908487d9d4c691ce5ed5670f464.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Bukit Mojo Gumelem</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/4522097bc9c2dcd1ab19bc62317e083b.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Setren Opak</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/9a10c5f50c9dfbe9040f0c7349731646.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Taman Nggirli</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/9d83790654da058b94b3c3752bacbb14.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Gerbang Banyu langit</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/1059b0519bd313b0ec874febbd371786.JPG" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Puncak Bintang</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/b5bd45c4f63165144a2a5a006071a6e3.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Taman Bronjong</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
        </div>
      </div>
    </section><!-- End Wisata Alam Section -->

    <!-- ======= Wisata Buatan Section ======= -->
    <section id="buatan" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2><b> Wisata Buatan</b></h2>
          <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
        </div>
        <div class="row gy-5">
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/17a2c8ef0a5e0b0bd3a2367b9421a244.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Kids Fun</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/02d206adbe042407c9a847ef60924e7d.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Balong Water Park</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/55c52687b7541ec6856a5dbf8425dafd.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Masjid Kotagede</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/08b457668577e8d477c62ec457fa07bb.png" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>AGROWISATA ARGOREJO</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/be46f1ecd0952f35bf3261d59de95d78.png" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Galaxy Waterpark</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/1bc85379ce02a6c002218188be88ed78.JPG" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>GUA JEPANG</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/16c6c7fecb6222d685f3101f9c9fc924.JPG" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>GRAND PURI WATER PARK</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/3953fbcc2fa0e50b43c30e79fb6e7caf.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>KAWASAN CAGAR BUDAYA JAGALAN</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/5f08c0cf3119509c3279cd9e4650ee25.JPG" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>MAKAM RAJA-RAJA MATARAM DI KOTAGEDE</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>MAKAM SENIMAN GIRISAPTO</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>MAKAM SUNAN CIREBON</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Pasar Seni dan Wisata Gabusan</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Museum Pusat TNI AU Dirgantara Mandala</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Museum Padepokan Sumber Karahayon</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Museum Sejarah Purbakala Pleret</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Museum Memorial Jendral Besar HM Soeharto</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Museum Wayang Kekayon</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Jupiter Paintball</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Kebun Bunga</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Museum Nafas Belanda Ngringinan</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Museum Monumen Ngoto</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Museum Budaya Tembi</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Tirto Tamansari</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Kampung Anggur</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>KEBUN BUAH MANGUNAN</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>MUSEUM PARANGTRITIS GEOMARITIME SCIENCE PARK</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>MUSEUM TANI JAWA INDONESIA</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Museum Taman Tino Sidin</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Museum Cokelat Monggo</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>MUSEUM HISTORY OF JAVA</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>MUSEUM SEJARAH UPY</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>MUSEUM RUMAH GARUDA</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>MUSEUM WAYANG BEBER SEKARTAJI</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>DAM/INTAKE KAMIJORO</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>EDUM PARK</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>JOGJA ANGGUR</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>JOGJA YOUTH FARMING</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>KEBUN BUAH LANGKA SEDAYU</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>LEMBAH SORORY</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>OPAK ZOO</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
        </div>
      </div>
    </section><!-- End Services Section -->

    
    <!-- ======= Desa WisataSection ======= -->
    <section id="desa" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2><b> Desa Wisata</b></h2>
          <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores adipisci aliquam.</p>
        </div>
        <div class="row gy-5">
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/c8b7fac1ba50b8196b756ed932963f8a.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Tembi</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/e020787036c30f6c0e0cf38f46118ee2.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Candran</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/ba8e2e9fc17cf0bb4895ffe226f26357.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Jagalan</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/441e55e2304c8e2dcb36ab866c7f0acb.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Kampung Surocolo-Goa Jepang</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/6812e769cea1b671843f6e6f98b9f4a4.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link" >
                  <h3>Wukirsari</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/942bab25a0b7d01062973d7d3bd64b3b.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Jipangan</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/ca2ebbb168ea3bc59ca1fba101fbaf16.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Kampung Santan</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/7403c5147767e5c745508de3832bc410.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Karangtengah</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/21bb45f4e12466e30dbabba44f222f0a.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Lopati</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="https://jelajah-api.bantulkab.go.id/files/content/d1cb1e8ab979cd55b3f504ffc7ef2048.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Manding</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Mangir Ki Ageng Wonoboyo</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Kaki Langit Mangunan</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Kalakijo</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Karangasem</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Jamu Gendong Kiringan Canden</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Krebet</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Patihan Goa Cemara</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Puton</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Sri Keminut Sriharjo</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Tapak Tilas Sultan Agung</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Kebonagung</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Wonoroto Pandansari</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>DESA WISATA BENDO</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>DESA WISATA GUNUNG CILIK (DEWI GUCI)</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>DESA WISATA BLAWONG SATU</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>Ngringinan</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>DESA WISATA GUNUNG MIJIL</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>DESA WISATA KADISORO NYAWIJI DADI SIJI</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>DESA WISATA KASONGAN</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>DESA WISATA MANGROVE TIRTOHARGO</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>DESA WISATA NGEMBEL BEJI</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
          <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="service-item">
              <div class="img">
                <img src="<?php echo base_url() ?>/style/img/services-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="details position-relative">
                <a href="#" class="stretched-link">
                  <h3>DESA WISATA SONGGO LANGIT</h3>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-header">
          <h2>Contact Us</h2>
          <p>Jika ada yang ingin dipertanyakan atau konsultasi, dapat hubungi kontak berikut</p>
        </div>

      </div>

      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div><!-- End Google Maps -->

      <div class="container">
        <div class="row gy-5 gx-lg-5">
          <div class="col-lg-4">
              <div class="info-item d-flex">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h4>Location:</h4>
                  <p>Mergangsang, Yogyakarta Daerah Istimewa Yogyakarta</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h4>Email:</h4>
                  <p>aridianaabdul@gmail.com</p>
                </div>
              </div><!-- End Info Item -->
              <div class="info-item d-flex">
                <i class="bi bi-phone flex-shrink-0"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+62 83827209222</p>
                </div>
              </div><!-- End Info Item -->
            </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; <strong><span> Skripsi Ardiana 2023</span></strong>
          </div>
          <div class="credits">
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ?>/style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>/style/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url() ?>/style/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url() ?>/style/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>/style/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url() ?>/style/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>/style/js/main.js"></script>

</body>

</html>