
<form  action=" <?= base_url('User/register')?>" method="post">
<div class="container tab_register">

  <div class="row text-center text_register">
    <div class="col mt-2">
    <h1>Register</h1>
    <hr class="garis">
    </div>
  </div>

  <!-- NAMA -->
  <div class="form-row row-11 mt-4 justify-content-center">
    <div class="col-md-6">
      <input type="text" class="form-control input_nama" placeholder="nama lengkap" name="nama" value="<?= set_value('nama');?>">
      <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
    </div>
    
    <!-- USERNAME -->
    <div class="col-md-5">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">@</span>
        </div>
        <input type="text" class="form-control input_username" placeholder="username" name="username" value="<?= set_value('username');?>">
      </div>
      <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
    </div>
  </div>


  <!-- PASSWORD -->
  <div class="form-row row-11 mt-4 justify-content-center">
    <div class="col-md-6">
      <input type="password" class="form-control input_password" placeholder="password" name="password">
      <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
    </div>

    <div class="col-md-5">
      <select class="form-control input_kelamin" name="jenis_kelamin">
        <option value="laki-laki">Laki-laki</option>
        <option value="perempuan">Perempuan</option>
      </select>
      <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>') ?>
    </div>
    </div>

    <!-- PCONFIRM PASSWORD -->
<div class="form-row row-7 mt-4 justify-content-center">

      <div class="col-md-6">
      <input type="password" class="form-control input_password2" placeholder="ulangi password" name="password2">
      <?= form_error('password2', '<small class="text-danger pl-3">', '</small>') ?>
    </div>

    <div class="col-md-5">
    <button class="btn btn-danger justify-content-center" type="submit">Register</button>
    </div>
      </div>

      <div class="row mt-5 text-center">
        <div class="col">
          <a href="<?= base_url()?>User"><h6>Sudah punya akun?</h6></a>
        </div>
      </div>

    </div>
  
</form>