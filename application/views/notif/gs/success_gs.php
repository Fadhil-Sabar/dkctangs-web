<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="<?= base_url() ?>assets/img/icon.png" type="image/png" />
    <title>DKC Tangerang Selatan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/themify-icons.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/fontawesome-free/css/all.css" />
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
                  <a class="nav-link" href="<?= base_url('Home') ?>"><i class="fas fa-home text-white"></i></a>
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
                  <a class="nav-link" href="<?= base_url('Kontak') ?>"><i class="fas fa-phone text-white"></i></a>
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

  <!-- Start Align Area -->
  <div class="whole-wrap">
    <div class="container">
      <div class="section-top-border">
        <div class="row">
          <div class="col-lg-12 col-md-12 mt-5">
            <h3 class="mb-30 title_color text-center">Bukti Pendaftaran<br>Perkemahan Wirakarya Cabang</h3>
            <div class="container">
              <div class="col-md-12 mt-2">
                <div class="row justify-content-center card alert-danger">
                  <div class="container mt-3 mx-3">
                    <div class="alert-danger">
                      <blockquote class="generic-blockquote row py-0 px-0 mr-3">
                        <div class="col-lg-1 text-center">
                          <i class="fas fa-info-circle fa-4x text-info my-2"></i>
                        </div>
                        <div class="col-lg-10 text-center">
                          <div class="mt-2">
                            <h3 class="text-danger">PERHATIAN !</h3>
                            <h6 class="text-danger">Silahkan Screenshoot gambar dibawah ini sebagai bukti pendaftaran kegiatan Perkemahan Wirakarya Cabang(PWC) 2021</h6>
                          </div>
                        </div>
                      </blockquote>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="alert-success rounded text-center mb-3 my-2">
                <i class="h2">BERHASIL DAFTAR SEBAGAI <?=$GS[0]['jenis_peserta'] ?></i><i class="fas fa-check-circle fa-2x"></i>
              </div>
              <div class="row">
                <div class="testi_item">
                    <img style="position: relative; height: 50%; width: 100%;" class="bukti-daftar" src="<?= base_url()?>assets/img/gelas/success.png">
                    <div class="container">
                      <div class="testi_item">
                        <p class="text-white id" ><?= $GS[0]['id_peserta_gelas'] ?></p>
                        <p class="text-white nm" ><?= $GS[0]['nama_lengkap'] ?></p>
                        <p class="text-white rn" ><?= $GS[0]['ranting'] ?></p>
                        <p class="text-white pk" ><?= $GS[0]['pangkalan'] ?></p>
                        <p class="text-white jk" ><?php if($GS[0]['jenis_kelamin']) {echo "Laki Laki";} else {echo "Perempuan";} ?></p>
                        <p class="text-white hp" ><?= $GS[0]['no_hp'] ?></p>
                        <p class="text-white em" ><?= $GS[0]['email'] ?></p>
                      </div>
                    </div>
                    <div class="container">
                      <div class="testi_item">
                        <img class="img-fluid sertif" src="<?= base_url()?>peserta/images/gelas2021/sertifikat_vaksin/<?= $GS[0]['sertifikat_vaksin']?>">
                      </div>
                    </div>
                  </div>
              </div>
              <a href="<?= base_url('Home') ?>" class="col-md-4 float-right primary-btn rounded py-2">
                <f style="font-size:17px;">Kembali Ke Halaman Utama</f>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Align Area -->

  <!--================ Start footer Area  =================-->
    <footer class="footer-area py-3">
      <div class="container">
        <div class="row">
          <div class="mb-0 col-lg-12 col-md-12 single-footer-widget">
            <h4 class="mb-0 ml-5">Hubungi Kami</h4>
            <ul>
              <li class="mb-0 ml-1  "><a class="navbar-brand logo_h" href="<?= base_url('Home') ?>"><img class="logodkc" src="<?= base_url() ?>assets/img/logodkc.png" alt=""/></a></li>
              <li class="mb-0 text-white ml-5"><i class="fas fa-envelope "></i> dkctangsel@gmail.com</a></li>
            </ul>
          </div>
        </div>
        <div class="row footer-bottom d-flex mt-0 ml-4">
          <p class="ml-4 mb-0">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Digital Dawn Indonesia
          </p>
          <div class="ml-1 col-md-12 footer-social">
            <a href="#"><i class="fab fa-instagram-square"></i></a>
            <a href="#"><i class="fab fa-youtube-square"></i></a>
            <a href="#"><i class="fab fa-tiktok"></i></a>
          </div>
        </div>
      </div>
    </footer>
      <!--================ End footer Area  =================-->

	  
		  <!-- Optional JavaScript -->
		  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
		  <script src="<?= base_url() ?>assets/js/jquery-3.2.1.min.js"></script>
		  <script src="<?= base_url() ?>assets/js/popper.js"></script>
		  <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
		  <script src="<?= base_url() ?>assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
		  <script src="<?= base_url() ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
		  <script src="<?= base_url() ?>assets/js/owl-carousel-thumb.min.js"></script>
		  <script src="<?= base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
		  <script src="<?= base_url() ?>assets/js/mail-script.js"></script>
		  <!--gmaps Js-->
		  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		  <script src="<?= base_url() ?>assets/js/gmaps.min.js"></script>
		  <script src="<?= base_url() ?>assets/js/theme.js"></script>
		  <script>
		  		alert("MOHON PERHATIANNYA UNTUK SCREENSHOT BUKTI PENDAFTARAN!");
		  </script>
		</body>
	  </html>