  <div class="jumbotron header-content text-white" style="background-attachment: fixed; background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.3) 100%), url(<?= base_url('assets/img/bg-corn.jpg')?>); border-radius: 0;">
    <div class="container-fluid text-center">
      <h2 class="display-5">Konsultasi Penyakit Tanaman Jagung</h2>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    </div>
  </div>
 <!-- Start Card -->
  <section class="content mb-5">
    <div class="container">
        <?= form_open('beranda/diagnosa');?>
        <div class="row justify-content-md-center">
        <div class="col-md-4 sidebar">
          <div class="card content">
            <div class="card-header">
              <h4>Form Identitas</h4>
            </div>
            <div class="card-body">
                <div class="group mb-4">
                  <input type="text" name="nama" required value="<?= $this->session->userdata('nama');?>">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label class="label">Nama</label>
                </div>
                <div class="group mb-3">
                  <input type="email" name="email" required value="<?= $this->session->userdata('email');?>">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label class="label">E-mail</label>
                </div>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card content">
            <div class="card-header">
              <h4>Form Gejala-Gejala Terkait Penyakit Tanaman Jagung</h4>
            </div>
            <div class="card-body">
              
              <p>Pilih gejala-gejala di bawah ini sesuai dengan kondisi tanaman jagung yang dialami</p>

                <input type="hidden" name="verify" value="<?= uniqid()?>">
                <table class="table table-hover table-striped mt-5">
                    <?php $i = 1?>
                    <?php foreach ($gejala as $g) :?>
                    <tr>
                        <td><?= $i;?></td>
                        <td>
                            <label for="checkbox<?= $i;?>">
                                <?= $g['gejala']?>
                            </label>
                        </td>
                        <td>
                            <label class="checkbox">
                                <input type="checkbox" id="checkbox<?= $i;?>" name="gejala<?= $i;?>" value="Y" />
                                <span class="default"></span>
                            </label>
                        </td>
                    </tr>
                    <?php $i++?>
                    <?php endforeach;?>
                </table>

                <a href="<?= base_url();?>" class="btn btn-primary mt-5">Kembali</a>
                <div class="float-right">
                  <button class="btn btn-primary mt-5">Selanjutnya</button>
                </div>
            </div>
          </div>
        </div>
      </div>
      <?= form_close();?>
    </div>
    <!-- End Card -->
  </section>