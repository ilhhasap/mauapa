<!doctype html>
<html lang="en">

<head>
    <title><?= $judul; ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="<?= base_url();?>asset/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/fonts/fontawesome/css/all.css">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker|Rubik&display=swap" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light">
      
        <div class="container">
          
        <a class="navbar-brand" href="#">Mau<span class="namafitur">Apa?</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="home">HOME <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#project">PROJECT</a>
            <a class="nav-item nav-link" href="#features">FEATURES</a>
            
            
            <div class="dropdown">
              
              <?php if( $this->session->userdata('username') ) : ?>
              <button class="btn btn-group dropright btn-light tombol2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?= $this->session->userdata('username');?>
              </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="MauApa/getProfil/<?= $this->session->userdata('id')?>">Profil</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="User/logout">LogOut</a>
                    </div>
              </a>
              <?php else : ?>
              <a href="<?= base_url()?>User/login" class="btn btn-warning tombol">
                LogIn
            </a>
              
          <?php endif; ?>
</div>
</div>

          </div>
    </div>
      </nav>
    <!-- AKHIR NAVBAR -->