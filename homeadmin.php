<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sistem Pakar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="Js/jquery-2.2.3.min.js"></script>
  <script src="Js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="fontawesome550/css/all.css">
</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li>
            <a href="homeadmin.php"><i class="fas fa-home"></i></a>
          </li>
          <li>
            <a href="hamadanpenyakit.php">HAMA & PENYAKIT</a>
          </li>
          <li>
            <a href="gejala.php">GEJALA</a>
          </li>
          <li>
            <a href="basispengetahuan.php">BASIS PENGETAHUAN</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="logout.php" id="myBtn">LOGOUT</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="col-sm-12 text-left">
    <div class="jumbotron">
      <center>
        <h2>PENERAPAN METODE BAYES UNTUK IDENTIFIKASI</h2>
        <h3>PENYAKIT TANAMAN JAGUNG</h3>
      <p>Selamat datang <?php echo $login_session; ?></p>
      <br>
       <img src="img/unpak.png" width="12%" alt="" srcset="">
    </div>
    </center>
    <center>
  

    </center>
    </div>
  </div>
  </div>
  </div>



</body>

</html>