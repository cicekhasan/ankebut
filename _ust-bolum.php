<?php !defined('ucbeyi') ? header('Location:index.php?sayfa=anasayfa'): null; ?>
<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">   
    <link rel="stylesheet" href="css/renk.css">

    <title>Ankebut</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">ANKEBUT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="anasayfa">Anasayfa</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Kategoriler
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="hakkimizda">Bağlantı 1</a>
              <a class="dropdown-item" href="bolgeler">Bağlantı 2</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="dernek">Hepsi</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="iletisim">İletişim</a>
          </li>
        </ul>
        <ul class="navbar-nav mr-3">
          <?php 
            print (!$_SESSION['adSoy']) ? ' 
          <li class="nav-item">
            <a class="nav-link" href="giris">Giriş</a>
          </li>
             ' :  '
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="yonetim" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Yönetim
            </a>
            <div class="dropdown-menu" aria-labelledby="yonetim">
              <a class="dropdown-item" href="kategoriler">Kategoriler</a>
              <a class="dropdown-item" href="yazilar">Yazılar</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="uyeler">Uyeler</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="profil" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              '.$_SESSION["adSoy"].'
            </a>
            <div class="dropdown-menu" aria-labelledby="profil">
              <a class="dropdown-item" href="profilim">Profilim</a>
              <a class="dropdown-item" href="Hesabım">Hesabım</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="cikis">Çıkış</a>
            </div>
          </li>
             ';
          ?>
          <form class="form-inline ml-3 my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Arama" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">ARA</button>
          </form>
        </ul>
      </div>
    </nav>