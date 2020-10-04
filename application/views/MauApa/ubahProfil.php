
<form  action=" <?= base_url('User/register')?>" method="post">
<div class="container tab_register">

  <div class="row text-center text_register">
    <div class="col mt-2">
    <div class="alert alert-success" role="alert">
  COMING SOON YA!
</div>
    <h1>My Profil</h1>
    <hr class="garis">
    </div>
  </div>

  <!-- NAMA -->
  <div class="form-row row-11 mt-4 justify-content-center">
    <div class="col-md-6">
    <input type="hidden" name="id" value="<?= $user['id']?>">
      <input type="text" class="form-control input_nama" placeholder="nama lengkap" name="nama" value="<?= $user['nama'];?>">
      <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
    </div>
    
    <!-- USERNAME -->
    <div class="col-md-5">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">@</span>
        </div>
        <input type="text" class="form-control input_username" placeholder="username" name="username" value="<?= $user['username'];?>"">
      </div>

    </div>
  </div>


  <!-- PASSWORD -->
  <div class="form-row row-11 mt-4 justify-content-center">
    <div class="col-md-6">
      <input type="text" class="form-control input_password" placeholder="password baru" name="password">
    </div>

   
    </div>

    <!-- PCONFIRM PASSWORD -->
<div class="form-row mt-4 justify-content-center">

      <div class="col-md-8">
      <input type="password" class="form-control input_password2 justify-content-center" placeholder="ulangi password" name="password2">
      <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
    </div>

    <div class="col-md-6 mt-3 justify-content-center">
      <abbr title="Coming Soon!!!">
    <button class="btn btn-danger justify-content-center" type="submit" disabled>Simpan</button>
    </abbr>
    </div>
      </div>

      <div class="row mt-5 text-center">
        <div class="col">
          <a href="<?= base_url()?>MauApa"><h6>KEMBALI</h6></a>
        </div>
      </div>

    </div>
  
</form>