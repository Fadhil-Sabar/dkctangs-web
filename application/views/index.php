<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="<?=base_url()?>/assets/img/icon.png" type="image/png" />
    <title>DKC Tangerang Selatan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/flaticon.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/themify-icons.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/nice-select/css/nice-select.css" />
        <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/fontawesome-free/css/all.css" />
    <!-- main css -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="<?= base_url('Home') ?>"
              ><img class="logodkc" src="<?= base_url() ?>assets/img/logodkc.png" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <a href="<?= base_url('Daftar_PWC') ?>" class="text-white nav-link" style="font-size: 30px;">#PWC3TANGSEL</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('Home') ?>"><i class="fas fa-home text-white"></i> <b>Beranda</b></a>
                </li>
                <!-- <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('Daftar') ?>">Daftar</a>
                </li> -->
                <!-- <li class="nav-item">
                  <a class="nav-link" href="about-us.html">About</a>
                </li> -->
                <!-- <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Pages</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="courses.html">Courses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="course-details.html"
                        >Course Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="elements.html">Elements</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Blog</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="single-blog.html"
                        >Blog Details</a
                      >
                    </li>
                  </ul>
                </li> -->
                <li class="nav-item">
                  <a class="nav-link" href="<?= base_url('Kontak') ?>"><i class="fas fa-phone text-white"></i><b> Hubungi Kami</b></a>
                </li>
                <!-- <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li> -->
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================ Start Testimonial Area =================-->
    <div id="carousel1_indicator" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel1_indicator" data-slide-to="0" class="active"></li>
        <li data-target="#carousel1_indicator" data-slide-to="1"></li>
        <li data-target="#carousel1_indicator" data-slide-to="2"></li>
      </ol>  
      <div class="carousel-inner">
        <div class="carousel-item mt-5">
          <a href="<?= base_url() ?>Daftar_NT"><img class="d-block w-100" src="<?= base_url() ?>assets/img/banner/banner-home-1.jpg" alt="First slide"></a> 
        </div>
        <div class="carousel-item mt-5">
          <a href="<?= base_url() ?>Daftar_GS"><img class="d-block w-100" src="<?= base_url() ?>assets/img/banner/banner-home-2.png" alt="Second slide"></a>
        </div>
        <div class="carousel-item active mt-5">
          <a href="<?= base_url() ?>Daftar_PWC"><img class="d-block w-100" src="<?= base_url() ?>assets/img/banner/banner-home-3.jpg" alt="Second slide"></a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carousel1_indicator" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel1_indicator" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> 
    <!--================ End Testimonial Area =================-->

    <!--================ Start Feature Area =================-->
    <!-- <section class="feature_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="main_title">
              <h2 class="mb-3">Frequently Asked Question (FAQ)</h2>
              <p>
                Jawaban untuk kamu yang penasaran tentang pramuka
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-student"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Apa itu Pramuka?</h4>
                <p>
                  Pramuka adalah singkatan dari Praja Muda Karana dan merupakan organisasi atau gerakan kepanduan.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Apa itu DKC?</h4>
                <p>
                  Merupakan wadah pembinaan dan pengembangan kaderisasi kepemimpinan masa depan gerakan pramuka.
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-earth"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Alamat DKC</h4>
                <p>
                  Kwartir Cabang Kota Tangsel, Serua, Ciputat, Tangerang Selatan, Banten 15414
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--================ End Feature Area =================-->


    <!--================ Start Events Area =================-->
    <!-- <div class="events_area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="main_title">
              <h2 class="mb-3 text-white">Kegiatan Yang Akan Berlangsung</h2>
              <p>
                Berikut Adalah Kegiatan Yang Akan Diadakan Di Masa Mendatang
              </p>
            </div>
          </div>
        </div>
        <div class="row"> -->
          <!-- single course -->
          <!-- <div class="col-lg-12">
            <div class="owl-carousel active_course">
              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="<?= base_url() ?>assets/img/courses/c1.jpg" alt="" />
                </div>
                <div class="course_content">
                  <span class="tag mb-4 d-inline-block">Dewan Kerja Cabang</span>
                  <h4 class="mb-3">
                    <a href="course-details.html">Perkemahan Wirakarya</a>
                  </h4>
                  <p>
                    One make creepeth man bearing their one firmament won't fowl
                    meat over sea
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                    <div class="authr_meta">
                      <a href="<?= base_url('Kegiatan_PWC') ?>" class="genric-btn primary-border circle">Detail Kegiatan</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="<?= base_url() ?>assets/img/courses/c2.jpg" alt="" />
                </div>
                <div class="course_content">
                  <span class="tag mb-4 d-inline-block">Dewan Kerja Cabang</span>
                  <h4 class="mb-3">
                    <a href="course-details.html">Napak Tilas</a>
                  </h4>
                  <p>
                    One make creepeth man bearing their one firmament won't fowl
                    meat over sea
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                    <div class="authr_meta">
                      <a href="<?= base_url('Kegiatan_NT') ?>" class="genric-btn primary-border circle">Detail Kegiatan</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="<?= base_url() ?>assets/img/courses/c3.jpg" alt="" />
                </div>
                <div class="course_content">
                  <span class="tag mb-4 d-inline-block">Dewan Kerja Cabang</span>
                  <h4 class="mb-3">
                    <a href="course-details.html">Gelar Senja</a>
                  </h4>
                  <p>
                    One make creepeth man bearing their one firmament won't fowl
                    meat over sea
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                    <div class="authr_meta">
                      <a href="<?= base_url('Kegiatan_GELAS') ?>" class="genric-btn primary-border circle">Detail Kegiatan</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!--================ End Events Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses mt-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Daftar Sekarang</h2>
              <p>
                Segera Daftar Acara Ini Jangan Sampai Ketinggalan!
              </p>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
              <div class="single_event position-relative">
                <div class="event_thumb">
                  <img src="<?= base_url() ?>assets/img/banner/e1.jpg" alt="" />
                </div>
                <div class="event_details">
                  <h5 class="text-white">Perkemahan Wirakarya Cabang (PWC)</h5>
                  <div class="d-flex mb-4">
                    <div class="date"><span>16-19</span> Des</div>

                    <div class="time-location">
                      <p>
                        <span class="ti-time mr-2"></span> 4 hari 3 Malam
                      </p>
                      <p>
                        <span class="ti-location-pin mr-2"></span> Area PWC
                      </p>
                    </div>
                  </div>
                  <p>
                    Merupakan salah satu wadah kegiatan untuk mewujudkan tujuan
                    membangun dan menguatkan semangat kebangsaan.
                  </p>
                  <a href="<?= base_url('Daftar_PWC') ?>" class="primary-btn rounded-0 mt-3">Daftar Sekarang</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="single_event position-relative">
                <div class="event_thumb">
                  <img src="<?= base_url() ?>assets/img/banner/e1.jpg" alt="" />
                </div>
                <div class="event_details">
                  <h5 class="text-white">Napak Tilas Dewan Kerja Cabang (DKC)</h5>
                  <div class="d-flex mb-4">
                    <div class="date"><span>18</span> Des</div>

                    <div class="time-location">
                      <p>
                        <span class="ti-time mr-2"></span> 08:00 WIB - 20:00 WIB
                      </p>
                      <p>
                        <span class="ti-location-pin mr-2"></span> Daan Mogot Golf
                      </p>
                    </div>
                  </div>
                  <p>
                    Dengan tujuan mengapresiasi budaya dan sejarah yang ada di kota tangerang selatan
                    dimeriahkan dengan berbagai perlombaan.
                  </p>
                  <a href="<?= base_url('Daftar_NT') ?>" class="primary-btn rounded-0 mt-3">Daftar Sekarang</a>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="single_event position-relative">
                <div class="event_thumb">
                  <img src="<?= base_url() ?>assets/img/banner/e1.jpg" alt="" />
                </div>
                <div class="event_details">
                  <h5 class="text-white">Gelar Senja Dewan Kerja Cabang (DKC)</h5>
                  <div class="d-flex mb-4">
                    <div class="date"><span>18</span> Des</div>

                    <div class="time-location">
                      <p>
                        <span class="ti-time mr-2"></span> 13:00 WIB - 19:00 WIB
                      </p>
                      <p>
                        <span class="ti-location-pin mr-2"></span> Pemkot Tangsel
                      </p>
                    </div>
                  </div>
                  <p>
                    Kegiatan penurunan bendera pada waktu sore hari dan menampilkan beberapa
                    kesenian, atraksi, dan penampilan lainnya.
                  </p>
                  <a href="<?= base_url('Daftar_GS') ?>" class="primary-btn rounded-0 mt-3">Daftar Sekarang</a>
                </div>
              </div>
            </div>
        </div>
        <!-- <div class="section_gap"></div> -->
      </div>
    </div>
    <!--================ End Popular Courses Area =================-->