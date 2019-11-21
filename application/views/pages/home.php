  <!-- Masthead -->
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h2 class="text-white">Aplikasi <span class="font-weight-bold primary">Sistem Pakar</span> Untuk Diagnosa Penyakit Tanaman <span class="font-weight-bold primary">Jagung</span></h2>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Aplikasi ini dibuat bertujuan untuk membantu dan mengedukasi para petani jagung dalam meningkatkan kuantitas dan kualitas tanaman jagung agar kedepannya lebih baik lagi </p>
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="#pengantar">Pelajari Lebih Lanjut</a>
        </div>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section class="page-section bg-primary" id="pengantar">
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
            <small class="text-white-50">(Sumber gambar oleh Google)</small>
        </div>
        <div class="col-md-6 text-center">
          <h2 class="text-white mt-3">Kenapa Jagung?</h2>
          <hr class="divider light my-4">
          <p class="text-white-50 mb-4" style="font-size: 18px; color: #fff !important;">Jagung merupakan tanaman pangan utama ketiga setelah padi dan terigu di dunia dan menempati posisi kedua setelah padi di Indonesia. Tanaman jagung tumbuh baik di daerah panas dan dingin dengan curah hujan dan irigasi yang cukup. Namun selama satu siklus hidupnya dari benih ke benih, setiap bagian jagung  peka terhadap sejumlah penyakit sehingga dapat menurunkan kuantitas dan kualitas hasil. Karena itu masalah penyakit merupakan salah satu faktor pembatas produksi dan mutu benih.</p>
        </div>
          <a class="btn btn-light btn-xl js-scroll-trigger mt-4" href="#konsultasi">Mulai Konsultasi!</a>
      </div>
    </div>
  </section>

  <!-- Tentang Section -->
  <section class="page-section" id="tentang">
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
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <div class="mt-5">
              <h3 style="font-family: Segoe UI"><span class="font-weight-bold">Jagung<img src="<?= base_url('assets/')?>img/logo-corn3.png" height="40px">Ku</span></h3>
              <p class="text-muted mb-0">Adalah sebuah aplikasi sistem pakar untuk diagnosa penyakit tanaman jagung berbasis website yang bertujuan untuk membantu para petani jagung dalam mengatasi permasalahan terkait penyakit tanaman jagung.</p>
          </div>
          </div>
        </div>
    </div>
  </div>
  </section>

  <!-- Konsultasi Section -->
  <section class="page-section bg-primary" id="konsultasi" style="background-image: url(<?= base_url('assets/img/bg-corn3.png');?>); background-repeat: none; background-position: center; background-attachment: fixed; background-size: cover;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
           <h2 class="text-white mt-3">Konsultasi</h2>
          <hr class="divider light my-4">
        </div>
      </div>
      <div class="row justify-content-center mt-4">
        <div class="col-lg-4 ml-auto text-center mb-3 mb-lg-0">
          <img src="<?= base_url('assets/img/logo-corn5.png')?>">
          <p class="text-white-50" style="font-size: 18px; color: #fff !important;">Isi form konsultasi untuk memulai diagnosa penyakit tanaman jagung</p>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <div class="card">
            <div class="card-body">
              <?= form_open('konsultasi');?>
              <h4>Form Konsultasi</h4>
               <div class="group mb-4">
                  <input type="text" name="nama" required>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label class="label">Nama</label>
                </div>
                <div class="group mb-3">
                  <input type="email" name="email" required>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label class="label">E-mail</label>
                </div>
                <button class="btn btn-primary">Memulai Konsultasi</button>
                <?= form_close();?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Penyakit Section -->
  <section class="page-section bg-dark text-white-50" id="penyakit">
    <div class="container">
      <h2 class="text-center mt-0 text-white">List Penyakit</h2>
      <hr class="divider my-4">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center">
          <p class="text-white-50 mb-5">Berikut ini merupakan beberapa macam penyakit tanaman jagung yang sering dialami oleh para petani jagung</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-one-list" data-toggle="list" href="#list-one" role="tab" aria-controls="one">Penyakit <?= $penyakit[0]['nama_penyakit']?></a>
            <a class="list-group-item list-group-item-action" id="list-two-list" data-toggle="list" href="#list-two" role="tab" aria-controls="two">Penyakit <?= $penyakit[1]['nama_penyakit']?></a>
            <a class="list-group-item list-group-item-action" id="list-three-list" data-toggle="list" href="#list-three" role="tab" aria-controls="three">Penyakit <?= $penyakit[2]['nama_penyakit']?></a>
            <a class="list-group-item list-group-item-action" id="list-four-list" data-toggle="list" href="#list-four" role="tab" aria-controls="four">Penyakit <?= $penyakit[3]['nama_penyakit']?></a>
            <a class="list-group-item list-group-item-action" id="list-five-list" data-toggle="list" href="#list-five" role="tab" aria-controls="five">Penyakit <?= $penyakit[4]['nama_penyakit']?></a>
          </div>
        </div>
        <div class="col-md-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-one" role="tabpanel" aria-labelledby="list-one-list">
              <div class="row">
                <div class="col-md-8 mb-3">
                    <b>Kode Penyakit:</b> <span class="badge badge-primary"><?= $penyakit[0]['kode_penyakit'];?></span><br><br>
                    <b>Deskripsi:</b><br><?= $penyakit[0]['deskripsi']?>
                </div>
                <div class="col-md-4 text-center">
                  <img src="<?= base_url('assets/img/penyakit/').$penyakit[0]['gambar']?>" class="rounded" height="250px"><br><small>(Gambar penyakit <?= $penyakit[0]['nama_penyakit'];?>)</small>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="list-two" role="tabpanel" aria-labelledby="list-two-list">
              <div class="row">
                <div class="col-md-8 mb-3">
                    <b>Kode Penyakit:</b> <span class="badge badge-primary"><?= $penyakit[1]['kode_penyakit'];?></span><br><br>
                    <b>Deskripsi:</b><br><?= $penyakit[1]['deskripsi']?>
                </div>
                <div class="col-md-4 text-center">
                  <img src="<?= base_url('assets/img/penyakit/').$penyakit[1]['gambar']?>" class="rounded" height="250px"><br><small>(Gambar penyakit <?= $penyakit[1]['nama_penyakit'];?>)</small>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="list-three" role="tabpanel" aria-labelledby="list-three-list">
              <div class="row">
                <div class="col-md-8 mb-3">
                    <b>Kode Penyakit:</b> <span class="badge badge-primary"><?= $penyakit[2]['kode_penyakit'];?></span><br><br>
                    <b>Deskripsi:</b><br><?= $penyakit[2]['deskripsi']?>
                </div>
                <div class="col-md-4 text-center">
                  <img src="<?= base_url('assets/img/penyakit/').$penyakit[2]['gambar']?>" class="rounded" height="250px"><br><small>(Gambar penyakit <?= $penyakit[2]['nama_penyakit'];?>)</small>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="list-four" role="tabpanel" aria-labelledby="list-four-list">
              <div class="row">
                <div class="col-md-8 mb-3">
                    <b>Kode Penyakit:</b> <span class="badge badge-primary"><?= $penyakit[3]['kode_penyakit'];?></span><br><br>
                    <b>Deskripsi:</b><br><?= $penyakit[3]['deskripsi']?>
                </div>
                <div class="col-md-4 text-center">
                  <img src="<?= base_url('assets/img/penyakit/').$penyakit[3]['gambar']?>" class="rounded" height="250px"><br><small>(Gambar penyakit <?= $penyakit[3]['nama_penyakit'];?>)</small>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="list-five" role="tabpanel" aria-labelledby="list-five-list">
              <div class="row">
                <div class="col-md-8 mb-3">
                    <b>Kode Penyakit:</b> <span class="badge badge-primary"><?= $penyakit[4]['kode_penyakit'];?></span><br><br>
                    <b>Deskripsi:</b><br><?= $penyakit[4]['deskripsi']?>
                </div>
                <div class="col-md-4 text-center">
                  <img src="<?= base_url('assets/img/penyakit/').$penyakit[4]['gambar']?>" class="rounded" height="250px"><br><small>(Gambar penyakit <?= $penyakit[4]['nama_penyakit'];?>)</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Kontak Section -->
  <section class="page-section" id="kontak">
    <div class="container text-center">
        <h2 class="mt-0">Kontak</h2>
        <hr class="divider my-4">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <h5>Profil Pengembang Aplikasi</h5>
              <a href="https://budianto24.github.io" target="_blank" class="text-muted">
                <img src="<?= base_url('assets/img/PP.png');?>" height="115px;" class="rounded-circle">
                <h5>Budianto</h5>
                <p>Sistem Informasi<br>Fakultas Teknologi Komunikasi dan Informatika<br>Universitas Nasional</p>
              </a>
            </div>
            <div class="col-lg-6 text-center">
              <p class="text-muted mb-5">Jika ada yang ingin disampaikan bisa hubungi saya melalui kontak dibawah ini, Terimakasih telah berkunjung di website ini..</p>
              <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
              <!-- Make sure to change the email address in anchor text AND the link below! -->
              <a class="d-block text-muted" href="mailto:budiianto24@gmail.com">budiianto24@gmail.com</a>
            </div>
          </div>
      </div>
    </div>
  </section>
