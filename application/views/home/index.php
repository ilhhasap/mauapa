
       <!-- JUMBOTRON -->
      <?php if( $this->session->userdata('username') == FALSE ) : ?>
        <script>alert('Selamat Datang');alert('Harap login agar bisa akses semuanya');</script>
        <?php else : ?>
        <script>
        alert("Selamat Menikmati, <?= $username;?>");
        </script>
<?php endif; ?>
<div class="row row-12">
       <div class="jumbotron jumbotron-fluid" id="home">
            <div class="container">
              <h1 class="display-4"> <span>JELAJAHI</span>  dan <span>NIKMATI</span>  <br> Kemerdekaanmu</h1>
              <a href="#project" class="tombol btn btn-warning">JELAJAHI</a>

              <?php if( $this->session->userdata('username')) :?>
              <a href="<?= base_url()?>MauApa" class="tombol2 btn btn-light">SAYA MAU</a>
              <?php else : ?>
              <abbr title="Harap Login!">
              <button href="" class="tombol2 btn btn-light" disabled>SAYA MAU</button>
              </abbr>
<?php endif; ?>
            </div>
          </div>
          </div>
      <!-- AKHIR JUMBOTRON -->

      <section id="project"></section>
      <!-- PROJECT -->
      <div class="row row-12 project">
      <div class="container">
        <!-- <div class="row project"> -->
          <div class="col-md">
            <img src="asset/img/desert-wallpaper-960x540.jpg" alt="" class="img-fluid">
          </div>
          <div class="col-md">
            <h3>sebuah <span>project aplikasi</span> untuk meng<span>hijaukan gurun</span> </h3>
            <p>Tentang sebuah aplikasi untuk membantu mensuarakan aspirasi dari  masyarakat dalam satu genggaman dan sentuhan <b>@ilhamtristadika</b> </p> 
          </div>
        <!-- </div> -->
        <!-- AKHIR PROJECT -->
      </div>
      </div>
      <!-- FEATURES -->
      <section class="features" id="features">
          <div class="row justify-content-center">
            <h3>Features</h3>
          </div>
          <hr class="garis">
            <div class="row row2 justify-content-center">
              
            <div class="col-lg-4 col-md-4">
              <div class="card">
                <div class="card-body">
                    <img class="img-fluid rounded-circle w-80 mb-3" src="asset/img/maungomong.png" alt="Card image cap"> 
                  <h4>#Mau<span class="namafitur">Ngomong</span> </h4>
                  <p class="card-text">Wadah sharing dan tuangkan rasa penasaran antar masyarakat </p>
                  <hr class="garis">
                </div>
              </div>
            </div>
        

            <div class="col-lg-4 col-md-4">
                <div class="card">
                  <div class="card-body">
                      <img class="img-fluid rounded-circle w-80 mb-3" src="asset/img/mauaman.png" alt="Card image cap">
                      <h4>#Mau<span class="namafitur">Aman</span> </h4>
                      <p class="card-text">Laporkan kejadian yang mengganggu lingkunganmu</p>
                      <hr class="garis">
                    </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-4">
                  <div class="card">
                    <div class="card-body">
                    <img class="img-fluid rounded-circle w-60 mb-3" src="asset/img/maunyaman.png" alt="Card image cap">
                        <h4>#Mau<span class="namafitur">Nyaman</span> </h4>
                        <p class="card-text">Request langsung fasilitas yang kurang di lingkunganmu</p>
                        <hr class="garis">
                      </div>
                  </div>
                </div>
          </div>
        </section>

        <!-- AKHIR FEATURES -->
   