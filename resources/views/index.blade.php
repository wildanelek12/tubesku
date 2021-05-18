<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Simpastra</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/img/favicon.png')}}" rel="icon">
  <link href="{{asset('/img/apple-touch-icon.png.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/line-awesome/css/line-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('template')}}/css/app.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Selecao - v2.3.1
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center  header-transparent ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html">Simpastra</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="{{route('login')}}">Login</a></li>
         

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Simpastra</span></h2>
          <p class="animate__animated fanimate__adeInUp">Memudahkan anda dalam memanajemen kios kios yang ada di pasar tradisional di daerah anda</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Deskripsi Simpastra</h2>
          <p class="animate__animated animate__fadeInUp">Simpastra merupakan sistem manajemen administrasi Pasar Kemantren yang melayani kebutuhan Anda dalam penyewaan toko. Pengembengan infrastruktur pasar saat ini tidak lepas dari komputerisasi. Dengan begitu terciptalah Website Simpastra. Website Simpastra dirancang untuk mengelola data penyewa yang dihubungkan langsung ke perangkat desa. Kami datang untuk memberikan pelayanan prima bagi masyarakat yang ingin menyewa toko di Pasar kemantren.
        </div>
      </div>

     

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Kenapa harus menggunakan Simpastra untuk menyewa kios di Pasar Kemantren?</h3>
                <ul>
                  <li><i class="ri-check-double-line"></i> Dengan memanfaatkan fitur branding toko, konsumen dapat melihat berbagai jenis barang yang Anda jual.</li>
                  <li><i class="ri-check-double-line"></i> Efisiensi waktu dan tenaga
                    Anda tidak perlu datang ke kantor desa, cukup dengan mengisi data yang diperlukan di Simpastra hak sewa toko sudah menjadi milik Anda. </li>
                  <li><i class="ri-check-double-line"></i> Keamanan terjamin
                    Data yang Anda masukkan ke dalam Simpastra akan kami jamin kerahasiannya
                    </li>
                </ul>
                <p>
                  Adanya Website Simpastra ini membantu kami para pedagang pasar untuk branding kios kita ke masyarakat luas, selain itu kita bisa update harga barang yang kita jual, jadi para pelanggan kami tidak kecewa kalau ada kenaikan harga barang yang tiba-tiba .
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{asset('/img/features-1.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Neque exercitationem debitis soluta quos debitis quo mollitia officia est</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="font-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{asset('/img/features-2.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Voluptatibus commodi ut accusamus ea repudiandae ut autem dolor ut assumenda</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                </ul>
                <p class="font-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{asset('/img/features-3.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="tab-pane" id="tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Omnis fugiat ea explicabo sunt dolorum asperiores sequi inventore rerum</h3>
                <p>
                  Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum
                </p>
                <p class="font-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{asset('/img/features-4.png')}}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Cta Section ======= -->
   
       
            
     

          



    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Data Kios</h2>
          <p>Data kios dan Barang</p>
        </div>

        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card">
        
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>Nama Kios</th>
                                <th>Nama Pemilik</th>
                                <th>No HP</th>
                                <th>Lihat Barang </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kios as $item)				
                                <tr>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->user->nama}}</td>
                                    <td>{{$item->user->hp}}</td>
                                    <th><a href="#" class="btn btn-info btn-see-detail" data-toggle="modal" data-target="#see-detail-modal" data-kios="{{$item->id }}">Lihat Barang</a> </th>
                             
    
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>	
        </div>

        
      </div>

      <div class="modal fade" id="see-detail-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title font-weight-bold text-success">Detail</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card" id="isiResponse">
                            <div class="card-header">
                                <h1>Pembayaran</h1>
                            </div>
                            <table class="table table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($barangs->where('kios_id',) as $item)				
                                        <tr>
                                            <td>{{$item->nama}}</td>
                                            <td>{{$item->harga}}</td>
                                            <th><a href="#" class="btn btn-info btn-see-detail" data-toggle="modal" data-target="#see-detail-modal" data-kios="{{$item->id }}">Lihat Barang</a> </th>
                                     
            
                                        </tr>
                                    @endforeach --}}
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>	
                </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Testimonials</h2>
          <p>What they are saying about us</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Semenjak adanya website Simpastra, saya tidak pernah ketinggalan update harga barang kebutuhan di Pasar Kemantren. Sebelum belanja saya bisa memperkirakan pengeluaran yang harus dibelanjakan sehingga tidak takut budget kurang  
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{asset('/img/testimonials/testimonials-1.jpg')}}" class="testimonial-img" alt="">
            <h3>Wildan Romiza</h3>
            <h4>Ceo &amp; Founder Codes.id</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Website Simpastra luar biasa. Desainnya keren, enak dilihat, dan informasi yang disajikan juga lengkap banget. Tata letak konten-kontennya juga  sangat rapi, navigasinya juga simple memudahkan banget buat kita-kita yang baru akses Website Simpastra ini. Good.           <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{asset('/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
            <h3>Anggra Natalia</h3>
            <h4>Konsumen Pasar</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Adanya Website Simpastra ini membantu kami para pedagang pasar untuk branding kios kita ke masyarakat luas, selain itu kita bisa update harga barang yang kita jual, jadi para pelanggan kami tidak kecewa kalau ada kenaikan harga barang yang tiba-tiba .
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{asset('/img/testimonials/testimonials-3.jpg')}}" class="testimonial-img" alt="">
            <h3>Ilma Nailus S</h3>
            <h4>Pemilik Toko</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Alhamdulillah saya bisa menikmati pasar
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="{{asset('/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
            <h3>Mila</h3>
            <h4>Pj Pak harsus</h4>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->




  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Simpastra</h3>
      <p>Memudahkan anda dalam memanajemen kios kios yang ada di pasar tradisional di daerah anda<br>Jl.Raya Kemantren</p>
    
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Simpastra</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/js/main.js')}}"></script>

    <script>
        $(document).on('click', '.btn-see-detail', function () {
            var data = $(this).data('kios');

            $.ajax({
              url: '/'+data,
              
              type: 'get',
              dataType: 'json',
              success: function(response){
              var len = 0;
              $('#myTable tbody').empty(); // Empty <tbody>
              if(response['data'] != null){
              len = response['data'].length;
              for(var i=0; i<len; i++){
                var nama = response['data'][i].nama;
                var harga = response['data'][i].harga;
                var tr_str = "<tr>" +
                "<td>" + nama + "</td>" +
                "<td>" + harga + "</td>" +
                "</tr>";
                $("#myTable tbody").append(tr_str);
              }

            }
        }});
            
        
        });

        

     </script>

</body>

</html>