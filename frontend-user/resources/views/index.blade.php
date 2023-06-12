<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>NOVELS</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="Asset/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="Asset/css/style.css">
      <!-- responsive-->
      <link rel="stylesheet" href="Asset/css/responsive.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="Asset/images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->

      <div class="fContainer">
         <nav class="wrapper">
            <div class="brand">
               <div class="logo"><a href="index.php"><img src="Asset/images/book.png" alt="#" height="50" width="50"/></a></div>
            </div>
            <ul class="navigation">
               <li><a href="{{env('ADMIN_URL')}}"><i class="fa-solid fa-user"></i></a></li>
            </ul>
         </nav>
      </div>

      <!-- start slider section -->
      <div id="top_section" class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     </ol> -->
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>NOVEL  <br>Sebagai Hiburan </h1>
                                    <p>Novel merupakan hiburan bagi pembaca. <br>Jangan lupa baca buku
                                    </p>
                                    <a class="read_more" href="#novel">Mulai Baca </a><a class="read_more" href="#contact">Kontak </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end slider section -->
      <!-- we_do -->
      <div class="we_do" id="novel">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>NOVEL </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="we1" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption we1_do">
                                 <div class="row">
                                    @foreach ($novels as $novel)
                                       <div class="col-md-4">
                                          <div id="bo_ho" class="we_box text_align_left">
                                             <i><img src="{{ env('SERVER_URL') . 'storage/' . $novel->cover_novel }}" alt="#"/></i>
                                             <h3>{{ $novel->judul_novel }} <br>{{ $novel->seri_novel }}</h3>
                                             <p>
                                                {{ $novel->deskripsi_singkat }}
                                             </p>
                                             <a class="read_more" href="{{ url('novels/' . base64_encode($novel->seri_novel)) }}">Read More</a>
                                          </div>
                                       </div>
                                    @endforeach

                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end we_do -->

      <!-- contact -->
      <div class="contact">
      <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>Project Technical</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="we1" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption we1_do">
                                 <div class="row">
                                    <div class="col-md-4">
                                        <div class="carousel-item active">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="clientsl_text">
                                                        <i><img src="Asset/images/bima.png" alt="#"/></i>
                                                        <h3>Bima Ramadhani <img src="Asset/images/icon.png" alt="#"/></h3>
                                                        <h4 style="line-height:25px;">Back End</h4>
                                                        <p>Backend adalah bagian pengembangan web yang memproses data, mengelola logika bisnis, dan berinteraksi dengan server, basis data, dan layanan lainnya. Fungsi utamanya meliputi memproses permintaan pengguna, manajemen basis data, logika bisnis, integrasi dengan layanan eksternal, keamanan, pengelolaan sesi, dan penyediaan layanan API.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="carousel-item active">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="clientsl_text">
                                                        <i><img src="Asset/images/ikhwan3.jpg" alt="#"/></i>
                                                        <h3>ikhwanus Sholih <img src="Asset/images/icon.png" alt="#"/></h3>
                                                        <h4 style="line-height:25px;">Front End User</h4>
                                                        <p>Frontend User merupakan seorang yang bertugas untuk menciptakan tampilan visual yang menarik, responsif, dan mudah digunakan bagi pengguna. Ini termasuk desain, navigasi yang intuitif, pengalaman pengguna yang baik, interaksi yang menarik, pengoptimalan kinerja, validasi data, dan integrasi dengan backend.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="carousel-item active">
                                            <div class="container">
                                                <div class="carousel-caption posi_in">
                                                    <div class="clientsl_text">
                                                        <i><img src="Asset/images/reza.jpg" alt="#"/></i>
                                                        <h3>reza Prayoga <img src="Asset/images/icon.png" alt="#"/></h3>
                                                        <h4 style="line-height:25px;">Front End Admin</h4>
                                                        <p>Frontend Admin memiliki fungsi utama untuk mengelola konten situs web, mengatur pengguna, mengatur pengaturan situs, menganalisis performa, mengelola media, mengelola ekstensi, dan memantau keamanan situs web.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption we1_do">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="Asset/images/we1.png" alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="Asset/images/we2.png" alt="#"/></i>
                                          <h3>App <br>development</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="Asset/images/we3.png" alt="#"/></i>
                                          <h3>website <br>design</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption we1_do">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="Asset/images/we1.png" alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="Asset/images/we1.png" alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="Asset/images/we1.png" alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
      </div>
      <!-- contact -->
      <!-- footer -->
      <footer>
         <div class="footer" id="contact">
            <div class="container">
               <div class="row">
                  <div class="col-md-5 col-sm-2">
                     <div class="Informa helpful">
                        <i><a href="https://teknokrat.ac.id" target="_blank"><img src="Asset/images/teknokrat.png" alt="" height="180" width="180"></a></i>
                     </div>
                  </div>
                  <div class="col-md-5 col-sm-2">
                     <div class="Informa conta">
                        <h3>contact Us</h3>
                        <ul>
                           <li> <a href="https://goo.gl/maps/4eFj87ikJSnaMjbC8" target="_blank"> <i class="fa fa-map-marker" aria-hidden="true"></i> Teknokrat University
                              </a>
                           </li>
                           <li> <a href="whatsapp://phone=+6281278953962" target="_blank"><i class="fa-brands fa-whatsapp" aria-hidden="true"></i> 081278953962
                           </li>
                           <li> <a href="mailto:info@teknokrat.com." target="_blank"> <i class="fa fa-envelope" aria-hidden="true"></i> info@teknokrat.com.
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
            </div>
            <div class="copyright text_align_left">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-6">
                        <p>© 2023 All Rights Reserved.  <a href="https://teknokrat.ac.id/" target="_blank"> Universitas Teknokrat Indonesia</a></p>
                     </div>
                     <div class="col-md-6">
                        <ul class="social_icon text_align_center">
                           <li> <a href="https://www.facebook.com/teknokrat" target="_blank"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                           <li> <a href="https://twitter.com/teknokrat_id" target="_blank"><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                           <li> <a href="https://www.instagram.com/teknokrat_university/" target="_blank"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                           <li> <a href="https://www.youtube.com/channel/UCYVRIU8V_Td9fHJRA2u57cg" target="_blank"><i class="fa-brands fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="Asset/js/jquery.min.js"></script>
      <script src="Asset/js/bootstrap.bundle.min.js"></script>
      <script src="Asset/js/jquery-3.0.0.min.js"></script>
      <script src="Asset/js/custom.js"></script>
   </body>
</html>