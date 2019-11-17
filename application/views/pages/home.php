  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h2 class="text-white">Aplikasi <span class="font-weight-bold primary">Sistem Pakar</span> Untuk Diagnosa Penyakit Tanaman <span class="font-weight-bold primary">Jagung</span></h2>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Pelajari Lebih Lanjut</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="about">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?= base_url('assets/img/slide/slide1.jpg');?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/img/slide/slide2.jpg');?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="<?= base_url('assets/img/slide/slide3.jpg');?>" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <small class="text-white-50">(Source pic by Google)</small>
        </div>
        <div class="col-md-6 text-center">
          <h2 class="text-white mt-3">Kenapa Jagung!?</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4" style="font-size: 18px; color: #fff !important;">Jagung merupakan tanaman pangan utama ketiga setelah padi dan terigu di dunia dan menempati posisi kedua setelah padi di Indonesia. Tanaman jagung tumbuh baik di daerah panas dan dingin dengan curah hujan dan irigasi yang cukup. Namun selama satu siklus hidupnya dari benih ke benih, setiap bagian jagung  peka terhadap sejumlah penyakit sehingga dapat menurunkan kuantitas dan kualitas hasil. Karena itu masalah penyakit merupakan salah satu faktor pembatas produksi dan mutu benih.</p>
        </div>
          <a class="btn btn-light btn-xl js-scroll-trigger mt-4" href="#services">Mulai Konsultasi!</a>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="page-section" id="services">
    <div class="container">
          <h2 class="text-center mt-0">Tentang Aplikasi</h2>
      <hr class="divider my-4">
      <div class="row justify-content-center">
        <div class="col-md-10 text-center">
          <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
              <div class="mt-5">
                <i class="fas fa-2x fa-cogs text-primary mb-3"></i>
                <h3 class="h5 mb-2">Metode</h3>
                <p class="text-muted mb-0">Menggunakan metode Naive Bayes dalam mendiagnosa penyakit tanaman jagung</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
              <div class="mt-5">
                <i class="fas fa-2x fa-info-circle text-primary mb-3"></i>
                <h3 class="h5 mb-2">Informasi</h3>
                <p class="text-muted mb-0">Menyediakan informasi berupa data penyakit, penyebab dan penanganan penyakit tanaman jagung</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
              <div class="mt-5">
                <i class="fas fa-2x fa-comment-medical text-primary mb-3"></i>
                <h3 class="h5 mb-2">Konsultasi</h3>
                <p class="text-muted mb-0">Menyediakan layanan sistem konsultasi mengenai gejala-gejala yang dialami pada tanaman jagung</p>
              </div>
            </div>
          </div>
            <div class="mt-5">
              <h3 style="font-family: Segoe UI"><span class="font-weight-bold">Jagung<img src="<?= base_url('assets/')?>img/logo-corn3.png" height="40px">Ku</span></h3>
              <p class="text-muted mb-0">Adalah sebuah aplikasi sistem pakar untuk diagnosa penyakit tanaman jagung berbasis website yang bertujuan untuk membantu para petani jagung dalam mengatasi permasalahan terkait penyakit tanaman jagung.</p>
          </div>
        </div>
    </div>
  </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= base_url('assets/')?>img/portfolio/fullsize/1.jpg">
            <img class="img-fluid" src="<?= base_url('assets/')?>img/portfolio/thumbnails/1.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= base_url('assets/')?>img/portfolio/fullsize/2.jpg">
            <img class="img-fluid" src="<?= base_url('assets/')?>img/portfolio/thumbnails/2.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= base_url('assets/')?>img/portfolio/fullsize/3.jpg">
            <img class="img-fluid" src="<?= base_url('assets/')?>img/portfolio/thumbnails/3.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= base_url('assets/')?>img/portfolio/fullsize/4.jpg">
            <img class="img-fluid" src="<?= base_url('assets/')?>img/portfolio/thumbnails/4.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= base_url('assets/')?>img/portfolio/fullsize/5.jpg">
            <img class="img-fluid" src="<?= base_url('assets/')?>img/portfolio/thumbnails/5.jpg" alt="">
            <div class="portfolio-box-caption">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-sm-6">
          <a class="portfolio-box" href="<?= base_url('assets/')?>img/portfolio/fullsize/6.jpg">
            <img class="img-fluid" src="<?= base_url('assets/')?>img/portfolio/thumbnails/6.jpg" alt="">
            <div class="portfolio-box-caption p-3">
              <div class="project-category text-white-50">
                Category
              </div>
              <div class="project-name">
                Project Name
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="page-section bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
      <a class="btn btn-light btn-xl" href="https://startbootstrap.com/themes/creative/">Download Now!</a>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Let's Get In Touch!</h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5">Ready to start your next project with us? Give us a call or send us an email and we will get back to you as soon as possible!</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+1 (202) 555-0149</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
        </div>
      </div>
    </div>
  </section>
