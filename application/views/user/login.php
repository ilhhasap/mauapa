<div class="container tab_login">
<form action=" <?= base_url('User')?>" method="post">
  <div class="form-group text_login">
    <h1>LogIn</h1>
    <hr class="garis">
    
    <!-- USERNAME -->
    <?= $this->session->flashdata('pesan'); ?>
    <input type="text" class="form-control username_login" id="username" placeholder="username" name="username" value="<?= set_value('username');?>">
    <center><?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?></center>
  </div>

<!-- PASSWORD -->
  <div class="form-group">
    <input type="password" class="form-control password_login" placeholder="password" name="password">
    <center><?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?></center>
  </div>

<div class="tombol_login text-center">
  <button type="submit" class="btn">LogIn</button> <br>
  <a href="<?= base_url()?>User/register"><h6>Belum punya Akun?</h6></a>
  <a href="<?= base_url()?>"><h6>Back to Home</h6></a>
  </div>
</form>
</div>