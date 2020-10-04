<div class="mauapa">

      
        <div class="container isicard">
                        <div class="card border-danger">
                        <div class="card-header border-light">
                        <center><h1>Mau<span class="namafitur">Apa?</span></h1></center>
        <hr class="garis">
        <?php if( $this->session->flashdata('flash') ) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <i class="fa fa-check"></i> Pesan anda <strong>Berhasil</strong>  <?= $this->session->flashdata('flash'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
        <?php endif; ?>
                        </div>
                          <div class="card-body">
                          <form action="" method="post">
                          <?php if( validation_errors() ) : ?>
                <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
                    </div>
                    <?php endif; ?>
                  <div class="form-row mt-3 justify-content-center">
                  <div class="input-group mb-3 mauapa_fitur">
                  <select class="custom-select" name="fitur">
                      <option value="MauNgomong" name="fitur" id="fitur">MauNgomong</option>
                      <option value="MauAman" name="fitur" id="fitur">MauAman</option>
                      <option value="MauNyaman" name="fitur" id="fitur">MauNyaman</option>
                    </select>
                    <small id="emailHelp" class="form-text text-fanger"><?= form_error('fitur')?></small>
          </div>
          </div>

            <!-- WILAYAH -->
              <div class="form-group mauapa_kota">
                <input type="text" class="form-control" id="inputCity" placeholder="Kota Asal (Contoh: Surakarta)" name="lokasi" value="<?= set_value('lokasi')?>">
              </div>
          
              <!-- TEMA -->
              <div class="input-group mb-3 mt-3">
            <input type="text" class="form-control mauapa_tema" placeholder="tema" aria-label="Example text with button addon" aria-describedby="button-addon1" name="tema" value="<?= set_value('tema')?>">
              <!-- PESAN -->
          <div class="input-group mb-3 mauapa_pesan">
            <input type="text" class="form-control" placeholder="ulasan anda" name="pesan" value="<?= set_value('pesan')?>">
          <!-- BUTTON BAGIKAn -->
            <div class="input-group-prepend"> 
              <input type="hidden" name="nama" value="<?= $this->session->userdata('username'); ?>">
              <?php if( $this->session->userdata('username') ) : ?>
              <button class="btn btn-danger" type="submit" name="bagikan">Bagikan</button>
              <?php else : ?>
              <button class="btn btn-danger" type="submit" name="bagikan" disabled>Bagikan</button>
          <?php endif; ?>

</div>
</div>
</form>
</div>
</div>
    </div>

    <!-- BERANDA -->
<div class="container isiberanda mb-5"> <br> <br> <br><br><br>

<?php if( $this->session->flashdata('flash', 'Dibagikan') == 1 ) : ?>
<center><h2 disabled>Beranda</h2></center>
    <hr class="garis2">
    <?php else : ?>
    <center disabled><h2>Beranda</h2></center>
    <hr class="garis2">
<?php endif; ?>

    <?php foreach ($mauapa as $mau) : ?>
    <div class="row-12">
<div class="card mt-5 border-dark">
    <h5 class="card-header border-warning">  <b> #<?= $mau['fitur']?> </b> <p class=""><?= $mau['lokasi']?> , <?= $mau['tanggal']?></p></h5>
    
    <div class="card-body">
      <h5 class="card-title"><i> <?= $mau['tema']?> </i></h5>
      <p class="card-text"><q> <?= $mau['pesan']?> </q></p>
    
      <hr>
      
      <!-- KOMEN -->
      <form action="<?= base_url()?>MauApa/komen" method="post">
        <input type="hidden" value="<?= $mau['id']; ?>" name="id_bagikan">
              <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="tulis komen anda" name="pesan">
          <div class="input-group-append">

            <?php if( $this->session->userdata('username') ) : ?>
            <button class="btn btn-warning" type="submit" name="komen">KIRIM</button>
            <?php else : ?>
            <button class="btn btn-warning" type="submit" name="komen" disabled>KIRIM</button>
          <?php endif; ?>
          
          </div>
          </div>
      </form>
      <?php foreach ( $komen as $k ) : ?>
            <?php if( $mau['id'] == $k['id_bagikan'] ) : ?>
            <p class="float-left">
             <b><h6>@<?= $k['nama']; ?></h6></b> 
              <p>"<?= $k['pesan']; ?>"</p>
          </p>
      <?php endif; ?>
<?php endforeach; ?>
    </div>
    <br> <br>
  </div>
  </div>
  <?php endforeach; ?>
</div>
</div>
                          
        