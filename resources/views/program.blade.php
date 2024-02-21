<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Program</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
      .navbar5{
        width: 90px;
        height: 39px;
        background-color: rgb(43, 43, 220);
        border-radius: 70px;
       
      }
    </style>
</head>
<body>
  
        
     
       
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        
            <img src="img/cyberlabs.png" style="width: 250px; margin-left: 30px" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto" style="margin-right: 70px">
                <li class="nav-item active" style="margin-right: 20px">
                  <a class="nav-link" style="color: black; font-weight: 600;" href="/">Beranda</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                  <a class="nav-link" style="color: black; font-weight: 600;" href="/tentang">Tentang</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                  <a class="nav-link navbar3" style="color: black; font-weight: 600; " href="/produk">Produk</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                  <a class="nav-link navbar4" style="color: black; font-weight: 600;" href="/layanan">Layanan</a>
                </li>
                <li class="nav-item" style="margin-right: 20px">
                  <a class="nav-link navbar5" style="color: white; font-weight: 600; text-align: center;" href="/program">Program</a>
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
          </nav><br><br><br>

          <h3 class="mt-5" style="text-align: center; color:rgb(67, 109, 247); margin-left: 20px">PROGRAM KAMI</h3>
          {{-- <div class="container mt-5">
            
            <div class="row  mt-5 justify-content-left" style="width: 1200px"> --}}
                {{-- <div  style="background-color: #e4eaee; padding:70px;"> --}}
                    <div class="container mt-4 mb-5">
                        <div class="card shadow" style="width: 1200px">
                      <div class="row">
                       <div class="col-2">
                         <img style="width: 200px; margin-left: 50px; margin-top: 40px" src="assets/ic-company-visit.png" alt="">
                       </div>
         
                       <div class="col-7 justify-content-lg-start mt-3" style="margin-left: 12rem">
                        <p class="mt-4" style="font-size: 20px"><b>Company Visit</b></p>
                         <p style="font-size: 14.5px">Program yang memberikan kesempatan kepada lembaga atau instansi yang ingin berkunjung ke Kantor
                           Cyberlabs guna untuk melihat proses pembuatan teknologi yang kami kembangkan dan mengenal lebih dalam
                           mengenai apa itu Cyberlabs dan apa saja layanan atau produk yang kami sediakan. </p>
                              <a href="/company-visit" class="btn btn-primary" style=" width: 100px; border-radius: 20px;">DETAIL</a>
                        
                       </div>
                       
                     </div> <hr><br>

                      <div class="row">
                       <div class="col-2">
                         <img style="width: 200px; margin-left: 50px; margin-top: 20px" src="assets/ic-internship.png" alt="">
                       </div>
         
                       <div class="col-7 justify-content-lg-start mt-3" style="margin-left: 12rem">
                        <p class="mt-4" style="font-size: 20px"><b>Internship Program</b></p>
                         <p style="font-size: 14.5px">Internship program adalah program yang diperuntukkan untuk para siswa atau mahasiswa yang ingin
                          mendapatkan pengalaman magang di kantor cyberlabs. Program ini bertujuan agar para siswa atau
                        mahasiswa bisa mendapatkan pengalaman bekerja yang sesungguhnya dalam dunia teknologi informasi sesuai dengan standarisasi Cyberlabs. </p>
                             <a href="/internship" class="btn btn-primary" style=" width: 100px; border-radius: 20px;">DETAIL</a>
                        
                       </div>
                       
                     </div> <hr><br>

                     <div class="row">
                      <div class="col-2">
                        <img style="width: 150px; margin-left: 100px; margin-top: 7px" src="assets/program_disabilitas.png" alt="">
                      </div>
        
                      <div class="col-7 justify-content-lg-start mt-3" style="margin-left: 12rem">
                       <p style="font-size: 20px"><b>Disabilitas Mandiri</b></p>
                        <p style="font-size: 15px;"><b>Disabilitas Mandiri</b> adalah layanan yang disediakan oleh CyberLabs untuk membantu 
                            yang memiliki kebutuhan khusus akan pembuatan Website, Aplikasi Android & IOS secara custom atau sesuai keinginan
                             Anda di luar produk yang kami sediakan, informasikan kebutuhan teknologi Anda kepada kami dan kami akan memberikan 
                             solusi yang tepat untuk Anda.</p>
                             <a href="http://www.disabilitasmandiri.com/" class="btn btn-primary" style=" width: 100px; border-radius: 20px;" target="_blank">DETAIL</a>
                       
                      </div>

                      
                       
                     </div> <hr><br>

                     <div class="row">
                      <div class="col-2">
                        <img style="width: 250px; margin-left: 50px; margin-top: 90px" src="assets/ca_banner.png" alt="">
                      </div>
        
                      <div class="col-7 justify-content-lg-start mt-3" style="margin-left: 12rem">
                       <p class="mt-4" style="font-size: 20px"><b>Cyberlabs Academy</b></p>
                        <p style="font-size: 14.5px"><b>CyberLabs Academy</b> adalah yayasan pendidikan yang berada di bawah naungan perusahaan CyberLabs 
                           khusus bagi mereka yang membutuhkan pelatihan akan <b>Programming</b> dan <b>Internet Marketing</b>. pelatihan ini di 
                           peruntukan bagi Anda yang ingin belajar mengenai cara membuat website, cara membuat aplikasi mobile Android
                            dan juga pelatihan mengenai pemasaran online berdasarkan silabus atau kurikulum yang telah kami kaji berdasarkan 
                            kebutuhan pasar.</p>
                       
                      </div>
                       {{-- <div class="col-7 justify-content-lg-start mt-3" style="margin-left: 24.5rem">
                         <a href="#" class="btn btn-primary" style=" width: 100px; border-radius: 20px;">Detail</a>
                       </div> --}}
                     </div> <br>
                     
                    </div>
                   </div>  
             
              
            </div>
          </div><br><br>
    

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

</body>
</html>