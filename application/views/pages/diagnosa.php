    <!-- Start Jumbotron -->
    <div class="jumbotron header-content text-white" style="background-attachment: fixed; background: linear-gradient(to bottom, rgba(92, 77, 66, 0.8) 0%, rgba(92, 77, 66, 0.3) 100%), url(<?= base_url('assets/img/bg-corn.jpg')?>); border-radius: 0;">
    <div class="container-fluid text-center">
      <h2 class="display-5">Hasil Diagnosa Gejala</h2>
      <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    </div>
  </div>
    <!-- End Jumbotron -->

    <!-- Start Card -->
    <section class="content mb-5">
    <div class="container">
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
                <table class="table table-hover mt-4">
                    <?php $i = 1?>
                    <?php foreach ($gejala as $g) :?>
                    <tr>
                        <td><?= $i?></td>
                        <td>
                            <label>
                                <?= $g['gejala']?>
                            </label>
                        </td>
                        <td>
                            <?= $this->session->userdata('G'.$i);?>
                        </td>
                    </tr>
                    <?php $i++?>
                    <?php endforeach;?>
                </table>
            </div>
          </div>
        </div>
      </div>
      <?php

      for ($i=1; $i <=19 ; $i++) { 
          $gejala[$i] = strip_tags($this->session->userdata('G'.$i));
      }

      $jumK1 = getOut("Bulai");      
      $jumK2 = getOut("Hawar Daun");
      $jumK3 = getOut("Karat Daun");
      $jumK4 = getOut("Busuk Pelepah");
      $jumK5 = getOut("Gosong");
      $totK = $jumK1+$jumK2+$jumK3+$jumK4+$jumK5;

      //jumlah gejala
      for ($i=1; $i <=19 ; $i++) {
        //jumlah penyakit
        //echo $i;
        for ($j=1; $j <=5 ; $j++) {
          $jum[$i][$j]=getKK($gejala[$i], $penyakit[$j-1]['nama_penyakit'], 'G'.$i);
        }          
      }

      $HQ= "P01 = ".($jumK1."/".$totK)."*".($jum[1][1]."/".$jumK1)."*".($jum[2][1]."/".$jumK1)."*".($jum[3][1]."/".$jumK1)."*".($jum[4][1]."/".$jumK1)."*".($jum[5][1]."/".$jumK1)."*".($jum[6][1]."/".$jumK1)."*".($jum[7][1]."/".$jumK1)."*".($jum[8][1]."/".$jumK1)."*".($jum[9][1]."/".$jumK1)."*".($jum[10][1]."/".$jumK1)."*".($jum[11][1]."/".$jumK1)."*".($jum[12][1]."/".$jumK1)."*".($jum[13][1]."/".$jumK1)."*".($jum[14][1]."/".$jumK1)."*".($jum[15][1]."/".$jumK1)."*".($jum[16][1]."/".$jumK1)."*".($jum[17][1]."/".$jumK1)."*".($jum[18][1]."/".$jumK1)."*".($jum[19][1]."/".$jumK1);
      
      $HW= "P02 = ".($jumK2."/".$totK)."*".($jum[1][2]."/".$jumK2)."*".($jum[2][2]."/".$jumK2)."*".($jum[3][2]."/".$jumK2)."*".($jum[4][2]."/".$jumK2)."*".($jum[5][2]."/".$jumK2)."*".($jum[6][2]."/".$jumK2)."*".($jum[7][2]."/".$jumK2)."*".($jum[8][2]."/".$jumK2)."*".($jum[9][2]."/".$jumK2)."*".($jum[10][2]."/".$jumK2)."*".($jum[11][2]."/".$jumK2)."*".($jum[12][2]."/".$jumK2)."*".($jum[13][2]."/".$jumK2)."*".($jum[14][2]."/".$jumK2)."*".($jum[15][2]."/".$jumK2)."*".($jum[16][2]."/".$jumK2)."*".($jum[17][2]."/".$jumK2)."*".($jum[18][2]."/".$jumK2)."*".($jum[19][2]."/".$jumK2);
      
      $HR= "P03 = ".($jumK3."/".$totK)."*".($jum[1][3]."/".$jumK3)."*".($jum[2][3]."/".$jumK3)."*".($jum[3][3]."/".$jumK3)."*".($jum[4][3]."/".$jumK3)."*".($jum[5][3]."/".$jumK3)."*".($jum[6][3]."/".$jumK3)."*".($jum[7][3]."/".$jumK3)."*".($jum[8][3]."/".$jumK3)."*".($jum[9][3]."/".$jumK3)."*".($jum[10][3]."/".$jumK3)."*".($jum[11][3]."/".$jumK3)."*".($jum[12][3]."/".$jumK3)."*".($jum[13][3]."/".$jumK3)."*".($jum[14][3]."/".$jumK3)."*".($jum[15][3]."/".$jumK3)."*".($jum[16][3]."/".$jumK3)."*".($jum[17][3]."/".$jumK3)."*".($jum[18][3]."/".$jumK3)."*".($jum[19][3]."/".$jumK3);

      $HT= "P04 = ".($jumK4."/".$totK)."*".($jum[1][4]."/".$jumK4)."*".($jum[2][4]."/".$jumK4)."*".($jum[3][4]."/".$jumK4)."*".($jum[4][4]."/".$jumK4)."*".($jum[5][4]."/".$jumK4)."*".($jum[6][4]."/".$jumK4)."*".($jum[7][4]."/".$jumK4)."*".($jum[8][4]."/".$jumK4)."*".($jum[9][4]."/".$jumK4)."*".($jum[10][4]."/".$jumK4)."*".($jum[11][4]."/".$jumK4)."*".($jum[12][4]."/".$jumK4)."*".($jum[13][4]."/".$jumK4)."*".($jum[14][4]."/".$jumK4)."*".($jum[15][4]."/".$jumK4)."*".($jum[16][4]."/".$jumK4)."*".($jum[17][4]."/".$jumK4)."*".($jum[18][4]."/".$jumK4)."*".($jum[19][4]."/".$jumK4);

      $HY= "P05 = ".($jumK5."/".$totK)."*".($jum[1][5]."/".$jumK5)."*".($jum[2][5]."/".$jumK5)."*".($jum[3][5]."/".$jumK5)."*".($jum[4][5]."/".$jumK5)."*".($jum[5][5]."/".$jumK5)."*".($jum[6][5]."/".$jumK5)."*".($jum[7][5]."/".$jumK5)."*".($jum[8][5]."/".$jumK5)."*".($jum[9][5]."/".$jumK5)."*".($jum[10][5]."/".$jumK5)."*".($jum[11][5]."/".$jumK5)."*".($jum[12][5]."/".$jumK5)."*".($jum[13][5]."/".$jumK5)."*".($jum[14][5]."/".$jumK5)."*".($jum[15][5]."/".$jumK5)."*".($jum[16][5]."/".$jumK5)."*".($jum[17][5]."/".$jumK5)."*".($jum[18][5]."/".$jumK5)."*".($jum[19][5]."/".$jumK5);
      
      $HA=($jumK1/$totK)*($jum[1][1]/$jumK1)*($jum[2][1]/$jumK1)*($jum[3][1]/$jumK1)*($jum[4][1]/$jumK1)*($jum[5][1]/$jumK1)*($jum[6][1]/$jumK1)*($jum[7][1]/$jumK1)*($jum[8][1]/$jumK1)*($jum[9][1]/$jumK1)*($jum[10][1]/$jumK1)*($jum[11][1]/$jumK1)*($jum[12][1]/$jumK1)*($jum[13][1]/$jumK1)*($jum[14][1]/$jumK1)*($jum[15][1]/$jumK1)*($jum[16][1]/$jumK1)*($jum[17][1]/$jumK1)*($jum[18][1]/$jumK1)*($jum[19][1]/$jumK1);
      
      $HB=($jumK2/$totK)*($jum[1][2]/$jumK2)*($jum[2][2]/$jumK2)*($jum[3][2]/$jumK2)*($jum[4][2]/$jumK2)*($jum[5][2]/$jumK2)*($jum[6][2]/$jumK2)*($jum[7][2]/$jumK2)*($jum[8][2]/$jumK2)*($jum[9][2]/$jumK2)*($jum[10][2]/$jumK2)*($jum[11][2]/$jumK2)*($jum[12][2]/$jumK2)*($jum[13][2]/$jumK2)*($jum[14][2]/$jumK2)*($jum[15][2]/$jumK2)*($jum[16][2]/$jumK2)*($jum[17][2]/$jumK2)*($jum[18][2]/$jumK2)*($jum[19][2]/$jumK2);
      
      $HC=($jumK3/$totK)*($jum[1][3]/$jumK3)*($jum[2][3]/$jumK3)*($jum[3][3]/$jumK3)*($jum[4][3]/$jumK3)*($jum[5][3]/$jumK3)*($jum[6][3]/$jumK3)*($jum[7][3]/$jumK3)*($jum[8][3]/$jumK3)*($jum[9][3]/$jumK3)*($jum[10][3]/$jumK3)*($jum[11][3]/$jumK3)*($jum[12][3]/$jumK3)*($jum[13][3]/$jumK3)*($jum[14][3]/$jumK3)*($jum[15][3]/$jumK3)*($jum[16][3]/$jumK3)*($jum[17][3]/$jumK3)*($jum[18][3]/$jumK3)*($jum[19][3]/$jumK3);

      $HD=($jumK4/$totK)*($jum[1][4]/$jumK4)*($jum[2][4]/$jumK4)*($jum[3][4]/$jumK4)*($jum[4][4]/$jumK4)*($jum[5][4]/$jumK4)*($jum[6][4]/$jumK4)*($jum[7][4]/$jumK4)*($jum[8][4]/$jumK4)*($jum[9][4]/$jumK4)*($jum[10][4]/$jumK4)*($jum[11][4]/$jumK4)*($jum[12][4]/$jumK4)*($jum[13][4]/$jumK4)*($jum[14][4]/$jumK4)*($jum[15][4]/$jumK4)*($jum[16][4]/$jumK4)*($jum[17][4]/$jumK4)*($jum[18][4]/$jumK4)*($jum[19][4]/$jumK4);

      $HE=($jumK5/$totK)*($jum[1][5]/$jumK5)*($jum[2][5]/$jumK5)*($jum[3][5]/$jumK5)*($jum[4][5]/$jumK5)*($jum[5][5]/$jumK5)*($jum[6][5]/$jumK5)*($jum[7][5]/$jumK5)*($jum[8][5]/$jumK5)*($jum[9][5]/$jumK5)*($jum[10][5]/$jumK5)*($jum[11][5]/$jumK5)*($jum[12][5]/$jumK5)*($jum[13][5]/$jumK5)*($jum[14][5]/$jumK5)*($jum[15][5]/$jumK5)*($jum[16][5]/$jumK5)*($jum[17][5]/$jumK5)*($jum[18][5]/$jumK5)*($jum[19][5]/$jumK5);

      $value=0;
      if($HA>=$HB && $HA>=$HC && $HA>=$HD && $HA>=$HE){
        $value          = $HA;
        $kode_penyakit  = $penyakit[0]['kode_penyakit'];
        $nama_penyakit  = $penyakit[0]['nama_penyakit'];
        $penyebab       = $penyakit[0]['penyebab'];
        $solusi         = $penyakit[0]['solusi'];
      }
      else if ($HB>=$HA && $HB>=$HC && $HB>=$HD && $HB>=$HE){
        $value          = $HB;
        $kode_penyakit  = $penyakit[1]['kode_penyakit'];
        $nama_penyakit  = $penyakit[1]['nama_penyakit'];
        $penyebab       = $penyakit[1]['penyebab'];
        $solusi         = $penyakit[1]['solusi'];
      }
      else if ($HC>=$HA && $HC>=$HB && $HC>=$HD && $HC>=$HE){
        $value          = $HC;
        $kode_penyakit  = $penyakit[2]['kode_penyakit'];
        $nama_penyakit  = $penyakit[2]['nama_penyakit'];
        $penyebab       = $penyakit[2]['penyebab'];
        $solusi         = $penyakit[2]['solusi'];
      }
      else if ($HD>=$HA && $HD>=$HB && $HD>=$HC && $HD>=$HE){
        $value          = $HC;
        $kode_penyakit  = $penyakit[3]['kode_penyakit'];
        $nama_penyakit  = $penyakit[3]['nama_penyakit'];
        $penyebab       = $penyakit[3]['penyebab'];
        $solusi         = $penyakit[3]['solusi'];
      }
      else if ($HE>=$HA && $HE>=$HB && $HE>=$HC && $HE>=$HD){
        $value          = $HC;
        $kode_penyakit  = $penyakit[4]['kode_penyakit'];
        $nama_penyakit  = $penyakit[4]['nama_penyakit'];
        $penyebab       = $penyakit[4]['penyebab'];
        $solusi         = $penyakit[4]['solusi'];
      }
    ?>

     <div class="row justify-content-md-center">
      <div class="col-md-4">
      </div>
      <div class="col-md-8">
        <div class="card content mt-4">
          <div class="card-header">
            <h4>Hasil Diagnosa</h4>
          </div>
          <div class="card-body">
              <!-- kondisi untuk mengecek apakah gejala yang dipilih terdapat kata Ya -->
              <?php if($gejala[1]=="Tidak" && $gejala[2]=="Tidak" && $gejala[3]=="Tidak" && $gejala[4]=="Tidak" && $gejala[5]=="Tidak" && $gejala[6]=="Tidak" && $gejala[7]=="Tidak" && $gejala[8]=="Tidak" && $gejala[9]=="Tidak" && $gejala[10]=="Tidak" && $gejala[11]=="Tidak" && $gejala[12]=="Tidak" && $gejala[13]=="Tidak" && $gejala[14]=="Tidak" && $gejala[15]=="Tidak" && $gejala[16]=="Tidak" && $gejala[17]=="Tidak" && $gejala[18]=="Tidak" && $gejala[19]=="Tidak"){ ?>

                  <!-- Jika tidak ada -->
                  <p><b>Anda Tidak Memilih Gejala Penyakit Tanaman Jagung</b></p>
              
              <?php }else{?>

                  <!-- Jika ada maka tampilkan hasil diagnosanya-->
                    <p>Tanaman Jagung Anda Terdiagnosa Penyakit: <b><?= $nama_penyakit;?></b></p>
                    <p>Probabilitas: <b><?= $value;?></b></p>

                    <p>List Nilai Probabilitas:<br>
                    <?php 

                      $total1 = $HA/($HA+$HB+$HC+$HD+$HE)*100;
                      $total2 = $HB/($HA+$HB+$HC+$HD+$HE)*100;
                      $total3 = $HC/($HA+$HB+$HC+$HD+$HE)*100;
                      $total4 = $HD/($HA+$HB+$HC+$HD+$HE)*100;
                      $total5 = $HE/($HA+$HB+$HC+$HD+$HE)*100;
                      
                      //function untuk menyimpan diagnosa
                      // saveResult($kode_penyakit);

                      echo "Bulai: ".substr(round($total1, 2), 0, 5)."%<br>";
                      echo "Hawar Daun: ".substr(round($total2, 2), 0, 5)."%<br>";
                      echo "Karat Daun: ".substr(round($total3, 2), 0, 5)."%<br>";
                      echo "Busuk Pelepah: ".substr(round($total4, 2), 0, 5)."%<br>";
                      echo "Gosong: ".substr(round($total5, 2), 0, 5)."%<br>";

                      // echo "<br>";

                      // echo "Bulai: ".$HA."<br>";
                      // echo "Hawar Daun: ".$HB."<br>";
                      // echo "Karat Daun: ".$HC."<br>";
                      // echo "Busuk Pelepah: ".$HD."<br>";
                      // echo "Gosong: ".$HE."<br>";

                      // echo "<br>";

                      // echo $HQ."<br>";
                      // echo $HW."<br>";
                      // echo $HR."<br>";
                      // echo $HT."<br>";
                      // echo $HY."<br>";

                    ?>
                    </p>

                    <br>

                      <b>PENYEBAB:</b>
                      <p><?= $penyebab;?></p>

                      <br>

                      <b>SOLUSI :</b>
                          <p><?= $solusi;?></p>

              <?php }?>

              <a href="<?= base_url()?>" class="btn btn-primary mt-4">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <!-- End Card -->   