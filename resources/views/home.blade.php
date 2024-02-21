<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
      .navbar1{
        width: 90px;
        height: 39px;
        background-color: rgb(43, 43, 220);
        border-radius: 70px;
       
      }

      .hero{
        top: 30%;
        right: 10%;
        position: absolute;
        color: white;
   

      }

      .hero2{
        top: 15%;
        right: 52%;
        position: absolute;
        color: white;
   

      }

      .hero3{
        top: 20%;
        right: 1%;
        position: absolute;
        color: white;
   

      }

    </style>
</head>
<body>
  
    
      <header>
       
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        
            <img src="img/cyberlabs.png" style="width: 250px; margin-left: 30px" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto" style="margin-right: 70px">
                <li class="nav-item active" style="margin-right: 20px">
                  <a class="nav-link navbar1" style="color: white; font-weight: 600; text-align: center;" href="/">Beranda</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                  <a class="nav-link" style="color: black; font-weight: 600;" href="/tentang">Tentang</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                  <a class="nav-link" style="color: black; font-weight: 600;" href="/produk">Produk</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                  <a class="nav-link" style="color: black; font-weight: 600;" href="/layanan">Layanan</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                  <a class="nav-link" style="color: black; font-weight: 600;" href="/program">program</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                  <a class="nav-link" style="color: black; font-weight: 600;" href="/kontak">Kontak</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                  <a class="nav-link" style="color: rgb(249, 172, 89); font-weight: 600;" href="/order">Order</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                  <a class="nav-link" style="color: rgb(99, 184, 241); font-weight: 600;" href="/login">Login</a>
                </li>
                
              </ul>
          
            </div>
          </nav>
        
          <div>

            
          {{-- <img src="assets/Banner tampilan/Banner_1.jpg" style="width: 100%" alt=""> --}}
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="margin-top: 70px">
              <div class="carousel-item active">
                <img src="assets/Banner_1.jpg"  class="d-block w-100" alt="...">
                <div  data-aos="fade-right" class="hero">
                  <h3 style="background-color: rgb(52, 52, 153); font-size: 35px; width: 410px; height: 70px; padding-top: 10px; text-align: center; margin-left: 15px"><b> Optimalkan Bisnis Anda</b></h3>
                  <h3 style="background-color: rgb(52, 52, 153); font-size: 35px; margin-top: 20px;  width: 410px; height: 70px; padding-top: 10px; text-align: center; margin-left: 15px"><b>Dengan Teknologi Kami</b></h3>
                  <h3 style="margin-top: 10px;"><a class="nav-link" style="color: rgb(6, 5, 5);" href="">Pelajari Lebih Lanjut ></a></h3>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/Banner_2.jpg" class="d-block w-100" alt="...">
                <div  data-aos="fade-right" class="hero3">
                  <img style="margin-left: 20px" src="assets/hydro_banner.png" alt="">
                  <h3 style="background-color: rgb(52, 52, 153); font-size: 34px; width: 580px; height: 70px; padding-top: 10px; text-align: center; margin-left: 15px; margin-top: 20px"><b> Tingkatkan Penjualan Bisnis Anda</b></h3>
                  <h3 style="background-color: rgb(52, 52, 153); font-size: 34px; margin-top: 20px;  width: 450px; height: 70px; padding-top: 10px; text-align: center; margin-left: 15px"><b>Melalui Associates Hydro</b></h3>
                  <h3 style="margin-top: 10px"><a class="nav-link" style="color: rgb(0, 0, 0);" href="">Pelajari Lebih Lanjut ></a></h3>
                </div>
              </div>
              <div class="carousel-item">
                <img src="assets/Banner3.jpg" class="d-block w-100" alt="...">
                <div  data-aos="fade-right" class="hero2">
                  <img style="margin-left: 20px" src="assets/ca_banner.png" alt="">
                  <h3 style="background-color: rgb(52, 52, 153); font-size: 34px; width: 610px; height: 70px; padding-top: 10px; text-align: center; margin-left: 15px; margin-top: 20px"><b> Tingkatkan Keahlian dan Kompetensi</b></h3>
                  <h3 style="background-color: rgb(52, 52, 153); font-size: 34px; margin-top: 20px;  width: 410px; height: 70px; padding-top: 10px; text-align: center; margin-left: 15px"><b>Digital Marketing Anda</b></h3>
                  <h3 style="margin-top: 10px"><a class="nav-link" style="color: rgb(6, 5, 5);" href="">Pelajari Lebih Lanjut ></a></h3>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
          
        </div>
    </header><br><br>
  
    <div data-aos="fade-up" class="container">
      <h3 style="text-align: center; color:rgb(67, 109, 247);">PRODUK KAMI</h3>
      <div class="row  mt-5 justify-content-left" style="width: 1200px">
        {{-- <div class="col-md-4">
          <div style="width: 19rem;">
            <img src="assets/logo_hydro.png" class="card-img-top" alt="...">
            <div class="card-body">
              
              <p class="card-text">HYDRO adalah Business to Business (B to B) marketplace yang mempertemukan antara pemilik produk dengan para online marketer yang siap membantu memasarkan produk para produsen secara online.</p> --}}


        <div class="col-md-4">
          <img style="margin-left: 20px" src="assets/logo_hydro.png" alt="">
         <div class="mt-4">
          <h7 style="color: grey">HYDRO adalah Business to Business (B to B) </h7>
          <h8 style="color: grey">marketplace yang mempertemukan antara pemilik</h8>
          <h8 style="color: grey">produk dengan para online marketer yang siap</h8>
          <h8 style="color: grey">membantu memasarkan produk para produsen secara</h8>
          <h8 style="color: grey">Online.</h8>
        </div>
        <div class="mt-4">
          <a href="https://hydroweb.id/" class="btn btn-primary" style="margin-left: 120px; border-radius: 20px; width: 100px" target="_blank">DETAIL</a>
        </div>
      </div>

        <div class="col-md-4">
          <img style="margin-left: 15px" src="assets/logo_atom.png" alt="">
          <div class="mt-4">
            <h8 style="color: grey">ATOM adalah sebuah system yang dapat membantu</h8>
            <h8 style="color: grey">Anda untuk mengembangkan aplikasi mobile profile</h8>
            <h8 style="color: grey">dan toko online berbasis Android/IOS dengan</h8>
            <h8 style="color: grey">mudah dan cepat tanpa harus memahami</h8>
            <h8 style="color: grey">kode pemrograman.</h8>
          </div>
          <div class="mt-4">
            <a href="https://atommobile.net/" class="btn btn-primary"  style="margin-left: 120px; border-radius: 20px; width: 100px" target="_blank">DETAIL</a>
          </div>
      </div>

        <div class="col-md-4">
          <img style="margin-left: 30px" src="assets/logo_molecule.png" alt="">
          <div class="mt-4">
            <h7 style="color: grey">Molecule adalah sebuah layanan yang berfokus menyediakan layanan social media management,
               sangat cocok bagi Anda yang memiliki keterbatasan waktu untuk membuat konten 
               social media seperti feed Instagram.</h7>
          </div>
          <div class="mt-4">
            <a href="/molecule" class="btn btn-primary"  style="margin-left: 120px; border-radius: 20px; width: 100px">DETAIL</a>
          </div>
      </div>
        
      </div>
    </div><br><br>

    <section>
    <div class="mt-5 " style="background-color: #e4eaee">
     
      <h3 class="text-center pt-5" style="color:rgb(26, 74, 233);">LAYANAN KAMI</h3>
    

     <div>
       
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div  style="background-color: #e4eaee; padding:70px;">
           <div class="container mb-5">
             <div class="row">
              <div class="col-2">
                <img style="width: 350px" src="assets/service_CMS.png" alt="">
              </div>

              <div class="col-7 justify-content-lg-start mt-3" style="margin-left: 15rem">
                <h8>C.M.S atau kepanjangan dari CyberLabs Marketing Service adalah layanan konsultan digital marketing bagi Anda yang belum optimal dalam penggunaan internet untuk menunjang bisnis Anda. Dengan layanan ini maka Anda dapat mengetahui pemanfaatan dan strategi digital marketing seperti website, SEO, Google Ads, Social Media Marketing, Email Marketing dan lainnya agar bisnis Anda dapat tumbuh dengan lebih optimal.</h8>
                {{-- <a href="#" class="btn btn-primary" style="margin-left">Detail</a> --}}
              </div>
              <div class="col-7 justify-content-lg-start mt-3" style="margin-left: 27rem">
                <a href="/layanan" class="btn btn-primary" style=" width: 100px; border-radius: 20px;">DETAIL</a>
              </div>
            </div>
          </div>   
        </div>
      </div>
        
        <div class="carousel-item">
          <div  style="background-color: #e4eaee; padding:70px;">
            <div class="container">
              <div class="row">
               <div class="col-2">
                 <img style="width: 350px" src="assets/service_CAS.png" alt="">
               </div>
               
               <div class="col-7 justify-content-lg-start mt-3" style="margin-left: 15rem">
                 <h8>CyberLabs Application Service ( C.A.S ) adalah layanan yang disediakan oleh CyberLabs untuk membantu Anda yang memiliki kebutuhan khusus akan pembuatan Website, Aplikasi Android & IOS secara custom atau sesuai keinginan Anda di luar produk yang kami sediakan, informasikan kebutuhan teknologi Anda kepada kami dan kami akan memberikan solusi yang tepat untuk Anda.</h8>
               </div>
               <div class="col-7 justify-content-lg-start mt-3" style="margin-left: 27rem">
                <a href="/layanan" class="btn btn-primary" style=" width: 100px; border-radius: 20px;">DETAIL</a>
              </div>
             </div>
           </div> 
          </div>
        </div><br><br><br><br>
        
       
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
</section><br><br>

<div data-aos="fade-up" class="container">
  <h3 style="text-align: center; color:rgb(67, 109, 247);">BERITA & INFO</h3>
  <div class="row mt-5 justify-content-left" style="width: 1200px">

  @foreach ($datas as $item)
    <div class="col-md-3">
      <img style=" width: 220px" src="uploads/home/{{ $item->image }}" alt="">
     <div class="mt-4">
       <h5>{{ $item->title }}</h5><br>
      <h7  style="color: grey">{!! $item->content !!}</h7>
      
    </div>
  </div>
  @endforeach

    {{-- <div class="col-md-3">
      <img style="margin-left: 15px; width: 220px" src="assets/1593414972.jpg" alt="">
      <div class="mt-4">
        <h5 >YORINDO - PORTFOLIO WEBSITE CYBERLABS</h5><br>
        <h8 style="color: grey">Yorindo Communication adalah salah satu portfolio website yang dikembangkan oleh Cyberlabs,
          website ini adalah pengembangan bisnis dan perusahaan event organizer yang fokus dalam jaringan dan komunikasi. sejak didirikan 
          pada tahun 2017, kami telah dipercaya untuk membantu banyak IT dan merek keamanan untuk
          menumbuhkan bisnis mereka di pasar B2B dan B2C, dengan melakukan survei pasar, pengembangan saluran pengembangan
          bisnis dan seminar di banyak kota besar di Indonesia. </h8>
       
      </div>
     
  </div>

    <div class="col-md-3">
      <img style="margin-left: 30px; width: 220px" src="assets/1593414775.jpg" alt="">
      <div class="mt-4">
        <h5 style="font-size:18px">YES GO - PORTFOLIO ANDROID CYBERLABS</h5><br>
        <h7 style="color: grey">YES GO adalah salah satu portfolio Android yang dikembangkan oleh Cyberlabs, Aplikasi ini menampilkan produk-produk
          para pemilik usaha, memiliki usaha, memiliki fitur berita dan info serta juga fitur pengiriman pesan. menghubungkan satu pemilik usaha dengan 
          usaha lainnya yang berinisiasi oleh forum kewirausahaan pemuda yang bekerja dengan kemenpora dan Cyberlabs sebagai sponsor IT.</h7>
      </div>
  </div>

    <div class="col-md-3">
      <img style="margin-left: 30px; width: 220px" src="assets/1593414518.jpg" alt="">
      <div class="mt-4">
        <h6 style="font-size: 18px">YELLA PERDANA - PORTFOLIO WEBSITE TOKO ONLINE CYBERLABS</h6><br>
        <h7 style="color: grey">Yella Perdana adalah salah satu portfolio website toko online yang dikembangkan oleh Cyberlabs, website ini menjual berbagai macam produk elektronik
          mulai dari perangkat komputer, laptop, CPU, kamera, flashdisk, handphone, printer dan produk-produk elektronik lainnya. </h7>
      </div>
  </div> --}}
    
  </div>
     <div class="mt-4">
        <a href="/berita" class="btn btn-primary enable-rounded"  style="margin-left: 500px; border-radius: 20px;  width: 200px; height: 40px">LIHAT SEMUA BERITA</a>
      </div>
</div><br><br><br><br>


<section>
  <div data-aos="fade-up" class="mt-5 " style="background-color: #e4eaee">
   
    <h3 class="text-center pt-5" style="color:rgb(26, 74, 233);">TESTIMONIAL KLIEN</h3>
  

   <div>
  {{-- <div class="row">
    <div class="col-12"> --}}
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 2"></button>
          {{-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div style="background-color: #e4eaee; padding:70px;">
            <div class="row">
              <div class="col-md-3">
                <div class="card me-3" style="width: 18rem; height: 500px">
                  <div class="img-area text-center mt-4"><img src="assets/testi-1.png" alt=""></div>
                  <div class="img-text">
                    <h6 class="text-center">Ahmad Rosadi Djarkasih</h6>
                    <p class="text-center" style="font-size: 12px;">General Manager Ecosystem SME Experience di Divisi Digital Services Telkom</p>
                    <p class="text-center" style="font-size: 15px;">Cyberlabs merupakan pengembang aplikasi yang memiliki kompetensi aplikasi mobile dan web yang mumpuni, disertai kemampuan 
                      eksplorasi teknologi baru yang baik, tetapi lebih penting lagi sanggup berperan sebagi mitra bisnis untuk mencapi tujuan bersama.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card" style="width: 18rem; height: 500px">
                  <div class="img-area text-center mt-4"><img src="assets/testi-2.png" alt=""></div>
                  <div class="img-text">
                    <h6 class="text-center">C Devita Andini</h6>
                    <p class="text-center" style="font-size: 12px;">Analis Peserta Didik di Direktorat Pembinaan SMA Kemdikbud</p>
                    <p class="text-center" style="font-size: 15px;">Senang banget bisa kerjasama dengan Cyberlabs. pengerjaan dan respon tim Cyberlabs sangat baik. perbaikan dilakukan dengan cepat dan sangat komunikatif dalam menangani keluhan. program FIKSI menjadi sangat terbantu.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card" style="width: 18rem; height: 500px">
                  <div class="img-area text-center mt-4"><img src="assets/testi-3.png" alt=""></div>
                  <div class="img-text">
                    <h6 class="text-center">Jodi Janitra</h6>
                    <p class="text-center" style="font-size: 12px;">Ketua HIPMI Jawa Barat 2016</p>
                    <p class="text-center" style="font-size: 15px;">Aplikasi yang dibuat oleh Cyberlabs fitur-fiturnya dibuat dengan baik, aplikasinya bermanfaat untuk semua anggota HIPMI JAWA BARAT, serta koneksinya cepat dan pengerjaannya rapih.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card" style="width: 18rem; height: 500px">
                  <div class="img-area text-center mt-4"><img class="mt-5"  src="assets/testi-4.png" alt=""></div>
                  <div class="img-text">
                    <h6 class="text-center" style="margin-top: 80px">Ibnu Cahyadi</h6>
                    <p class="text-center" style="font-size: 12px;">Branch Manager</p>
                    <p class="text-center" style="font-size: 15px;">Senang bekerja sama dengan Cyberlabs. Tim Cyberlabs top banget, bisa memahami kemauan kami, komunikasi terjalin dengan baik dari awal dan seterusnya. Sukses selalu Cyberlabs dan tim.</p>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

          <div class="carousel-item">
            <div style="background-color: #e4eaee; padding:70px;">
            <div class="row">
              <div class="col-md-3">
                <div class="card" style="width: 18rem; height: 500px">
                  <div class="img-area text-center mt-4"><img src="assets/testi-5.png" alt=""></div>
                  <div class="img-text">
                    <h6 class="text-center">Agus Bipoz</h6>
                    <p class="text-center" style="font-size: 12px;">Co-Founder GIMB Foundation</p>
                    <p class="text-center" style="font-size: 15px;">Saya puas dengan produk dan layanan Cyberlabs. bisa memahami apa yang dibutuhkan perusahaan, bisa membantu percepatan bisnis, terutama dalam hal support IT dan internet marketing. so, jangan ragu untuk menggunakan jasa dan kreatifitas Cyberlabs.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card" style="width: 18rem; height: 500px">
                  <div class="img-area text-center mt-4"><img src="assets/testi-6.png" alt=""></div>
                  <div class="img-text">
                    <h6 class="text-center">Feri Kurniawan</h6>
                    <p class="text-center" style="font-size: 12px;">Owner Ammar Kids</p>
                    <p class="text-center" style="font-size: 15px;">Pelayanan ramah, fast respon dan service after salesnya bagus dengan harga yang relatif terjangkau tapi kualitas dan pelayanan yang bisa didapat sama dengan jasa lain yang lebih mahal.</p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card" style="width: 18rem; height: 500px">
                  <div class="img-area text-center mt-4"><img src="assets/testi-7.png" alt=""></div>
                  <div class="img-text">
                    <h6 class="text-center">Ferry Hasan</h6>
                    <p class="text-center" style="font-size: 12px;">Owner Bebek Udig</p>
                    <p class="text-center" style="font-size: 15px;">Kesekian kali kerja sama dengan tim Cyberlabs selalu memuaskan, mulai dari perencanaan konsep hingga jadi aplikasi semuanya mantap, timnya solid kerjanya professional dan harga nya sesuai dengan kualitas dan guarantee puas.  </p>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card" style="width: 18rem; height: 500px">
                  <div class="img-area text-center mt-4"><img src="assets/testi-8.png" alt=""></div>
                  <div class="img-text">
                    <h6 class="text-center">Ingki Indira</h6>
                    <p class="text-center" style="font-size: 12px;">Owner Kirana Cakes</p>
                    <p class="text-center" style="font-size: 15px;">Special! Thanks to Cyberlabs for making this web possible for me. Best wishes has to all of you guys.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>

        </div> 
      </div>  
      </div>
      </section><br><br><br>

      <h3 class="text-center pt-3 mb-5" style="color:rgb(26, 74, 233);">KLIEN KAMI</h3>
      <div data-aos="fade-up" class="container">
        
        <div class="row">
          <div class="col-md-2">
            <img style="width: 150px" src="assets/logo-ima.png" alt="">
    
          </div>
          <div class="col-md-2">
            
             <img style="width: 150px" src="assets/logo-kadin.png" alt="">
           
          </div>
          <div class="col-md-2">
      
            <img style="width: 150px; margin-top: 50px;" src="assets/logo-karcher.png" alt="">

          </div>
          <div class="col-md-2">
      
            <img style="width: 150px" src="assets/logo-menara-165.png" alt="">

          </div>
          <div class="col-md-2">
      
            <img style="width: 150px; margin-top: 50px;" src="assets/logo-pegadaian.png" alt="">

          </div>
          <div class="col-md-2">
      
            <img style="width: 150px; margin-top: 40px;" src="assets/telkom.png" alt="">

          </div>
   
        </div>
      </div>


      <div data-aos="fade-up" class="container pt-5">
       
        <div class="row">
          <div class="col-md-2">
            <img style="width: 150px" src="assets/logo-mandiri.png" alt="">
    
          </div>
          <div class="col-md-2">
            
             <img style="width: 150px" src="assets/logo-mandiri-syariah.png" alt="">
           
          </div>
          <div class="col-md-2">
      
            <img style="width: 150px;" src="assets/logo-kemendagri.png" alt="">

          </div>
          <div class="col-md-2">
      
            <img style="width: 150px" src="assets/logo-kemdikbud.png" alt="">

          </div>
          <div class="col-md-2">
      
            <img style="width: 150px" src="assets/logo-save-the-children.png" alt="">

          </div>
          <div class="col-md-2">
      
            <img style="width: 150px" src="assets/logo-bccf.png" alt="">

          </div>
   
        </div>
      </div>

      <div data-aos="fade-up" class="container pt-5">
        <div class="row">
          <div class="col-md-2">
            <img style="width: 150px; margin-top: 50px;" src="assets/toyota.png" alt="">
    
          </div>
          <div class="col-md-2">
            
             <img style="width: 150px" src="assets/logo-hipmi.png" alt="">
           
          </div>
          <div class="col-md-2">
      
            <img style="width: 150px;" src="assets/logo-jci-indonesia.png" alt="">

          </div>
          <div class="col-md-2">
      
            <img style="width: 150px" src="assets/asianbrain.png" alt="">

          </div>
          <div class="col-md-2">
      
            <img style="width: 150px" src="assets/gimb.png" alt="">

          </div>
          <div class="col-md-2">
      
            <img style="width: 120px;" src="assets/logo-bekraf.png" alt="">

          </div>
   
        </div>
      </div>

      <div data-aos="fade-up" class="container pt-5">
        <div class="row">
          <div class="col-md-2">
      
            <img style="width: 150px" src="assets/telkomsel.png" alt="">

          </div>
          <div class="col-md-2">
            <img style="width: 150px; margin-left: 20px" src="assets/dejilbab.png" alt="">
    
          </div>
          <div class="col-md-2">
      
            <img style="width: 70px; margin-left: 30px" src="assets/logo-bandung-tv.png" alt="">

          </div>
          <div class="col-md-2">
            
             <img style="width: 150px" src="assets/logo-elizabeth.png" alt="">
           
          </div>
       
          <div class="col-md-2">
      
            <img style="width: 150px" src="assets/logo-azzlam.png" alt="">

          </div>
          <div class="col-md-2">
      
            <img style="width: 150px" src="assets/vanilla-hijab.png" alt="">

          </div>

          <div class="mt-4">
            <a href="/klien" class="btn btn-primary enable-rounded text-center"  style="margin-left: 450px; border-radius: 20px;  width: 200px; height: 40px">LIHAT+20 KLIEN KAMI</a>
          </div>
         
        
   
        </div>
      </div><br><br><br>

      <section>
        <div class="mt-5 " style="background-color: #e4eaee">
         
          <h3 class="text-center pt-5" style="color:rgb(26, 74, 233);">PRESS & MEDIA</h3>
        
      
         <div>

          <div class="container"  style="background-color: #e4eaee; padding:70px;">
            <div data-aos="fade-up" class="row">
              <div class="col-md-2">
                <img style="width: 100px;" src="assets/CNN.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 150px;" src="assets/6.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 150px;" src="assets/techasia.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 100px; margin-left: 30px" src="assets/swa.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 100px; margin-left: 30px" src="assets/logo-bandung-tv.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 150px;" src="assets/7.png" alt="">
              </div>
            </div>

            <div data-aos="fade-up" class="row mt-4">
              <div class="col-md-2">
                <img style="width: 100px;" src="assets/smart.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 70px; margin-left: 20px" src="assets/rri.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 150px;" src="assets/2.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 100px; margin-left: 30px" src="assets/3.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 100px; margin-left: 30px" src="assets/4.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width:70px; margin-left: 20px" src="assets/5.png" alt="">
              </div>
            </div>

            <div data-aos="fade-up" class="row mt-4">
              <div class="col-md-2">
                <img style="width: 100px;" src="assets/bobotoh.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 150px; margin-top: 20px" src="assets/mqfm.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 150px; margin-top: 20px" src="assets/logo-prfm.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 100px; margin-left: 30px; margin-top: 30px" src="assets/detikinet.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 120px; margin-left: 10px; margin-top: 30px" src="assets/galanews.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 150px; margin-top: 20px" src="assets/indotelko.png" alt="">
              </div>
            </div>

            <div data-aos="fade-up" class="row mt-4">
              <div class="col-md-2">
                <img style="width: 100px;" src="assets/kompas.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 150px;" src="assets/merdeka.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 150px;" src="assets/pojokbandung.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 120px; margin-left: 30px" src="assets/republika.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 120px; margin-left: 10px" src="assets/youngsters.png" alt="">
              </div>
              <div class="col-md-2">
                <img style="width: 120px;" src="assets/inspirasi.png" alt="">
              </div>
            </div>
          </div>
      </section>

      <footer class="puter bg-dark text-white">
        <div class="container text-md-start pt-5">
          <div class="row" id="puter">
  
            <div class="col-4 mt-3" style="margin-right: 8rem">
              <h5>Tentang Cyberlabs</h5>
              {{-- <p class="text-white" class="list-unstyled" style="margin-top: 1.5rem">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum minus in enim dolores, eaque esse, voluptates culpa officia, dolorum praesentium autem quod explicabo. Impedit, quia velit voluptatum repellendus quam corrupti!</p> --}}
              <div style="color: white" class="mt-4">CyberLabs adalah perusahaan teknologi yang berlokasi di Bandung, 
                saat ini kami fokus dalam proses konsultasi digital marketing, pembuatan website, pembuatan Aplikasi mobile 
                Android dan pembuatan aplikasi IOS. Telah di percaya oleh lebih dari 500 perusahaan mulai dari kalangan personal,
                 pemilik usaha kecil menengah, perusahaan multinasional hingga global. CyberLabs memiliki visi untuk menjadi perusahaan
                  teknologi digital marketing yang memberikan layanan terbaik tepat guna kepada setiap klien kami.</div>
              
                  <div style="margin-top: 15px">
                    <a href="https://www.facebook.com/cyberlabsofficial?_rdc=1&_rdr"><img src="assets/socmed_fb.png" alt=""></a>&nbsp &nbsp
                    <a href="https://www.instagram.com/cyberlabsofficial/"><img src="assets/socmed_youtube.png" alt=""></a>&nbsp &nbsp 
                    <a href="https://www.youtube.com/user/CyberLabsVideo"><img src="assets/socmed-instagram.png" alt=""></a>
                  </div>
            </div>
  
            <div class="col mx-auto mt-3">
              <h5>Indeks</h5>
              <div class="list-unstyled" style="margin-top: 1.5rem">
                <a href="/produk" class="text-white" style="text-decoration: none;"><p style="margin-bottom: 0.5rem;">Produk</p></a> 
                <a href="/berita" class="text-white" style="text-decoration: none;" ><p style="margin-bottom: 0.5rem">Berita & Info</p></a>
                <a href="/layanan" class="text-white" style="text-decoration: none;"><p style="margin-bottom: 0.5rem">Layanan</p></a>
                <a style="color: white; text-decoration: none;" href="/program"><p>Program</p></a>
                <a style="color: white; text-decoration: none;" href="/klien"><p>klien</p></a>
              </div>
            </div>
  
            <div class="col  mx-auto mt-3">
              <h5>Kontak</h5>
              <div class="list-unstyled" style="margin-top: 1.5rem">
                <p style="margin-bottom: 0.5rem"><a href="tel:+622288881999" class="text-white"><i class="fa fa-phone-alt" style=""></i></a> &nbsp (022) 8888 1 999</p>
                <p style="margin-bottom: 0.5rem"><a href="tel:+6285723036868"><i class="fa fa-mobile-alt" style="color: white"></i></a> &nbsp +62 857-2303-6868</p>
                <p style="margin-bottom: 0.5rem"><a href="https://api.whatsapp.com/send?phone=6285723036868"><i class="fab fa-whatsapp" style="color: white"></i></a>&nbsp +62 857-2303-6868</p>
                <p><a href="mailto:marketing@cyberlabs.co.id"></a>marketing@cyberlabs.co.id</p>
              </div>
            </div>
  
            <div class="col-3 mt-3">
              <h5>Kantor</h5>
              <div class="list-unstyled" style="margin-top: 1.5rem">
                <div>
                  <h6><a href="#" class="icon"><i class="fa fa-home" style="color: white;"></i></a> &nbsp Main Office</h6>
                  <p>Jl Terusan Mars Utara III No.8D Kota Bandung, 40292 </p>
                  
                </div>
               
                <div class="mt-4">
                  <h6><a href="#" class="icon"><i class="fas fa-hotel" style="color: white;"></i></a>&nbsp National Branch Office</h6>
                  <p>Ariobimo Sentral level 8. Jalan H.R. Rasuna Said Kav X-2 No. 5, Kuningan Timur, Setiabudi, Jakarta Selatan 12950</p>
                </div>

                <div class="mt-4">
                  <h6><a href="#" class="icon"><i class="fas fa-hotel" style="color: white;"></i></a>&nbsp International Branch Office</h6>
                  <p>Fragrance Empire, 456 Alexandra Road, #04-02, Singapore</p>
                </div>

               
              </div>
            </div>
            <div class="bottom-footer text-center pt-5 pb-3">
              <p class="copyright"> &copy;2022 by Cyberlabs</p>
            </div>
          </div>
        </div>
      </footer>


    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> 
    <script src="https://cdn.jsdelivr.net/npm/particle.js@1.0.7/lib/particle.min.js"></script>
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <script>
   particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#738afa"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.16034120608655228,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":4,"random":false,"anim":{"enable":false,"speed":19.489853095232284,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":115,"color":"#2288cf","opacity":0.6012795228245711,"width":1.2827296486924182},"move":{"enable":true,"speed":2,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"repulse"},"onclick":{"enable":false,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>
</body>
</html>