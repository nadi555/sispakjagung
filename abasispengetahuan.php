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
            <a href="homeadmin.php"><i class="fas fa-home"></i>s</a>
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
        <h2 class="text-center">BASIS PENGETAHUAN</h2>
        <form id="form1" name="form1" method="post" action="abasispengetahuan.php">
        <label for="sel1">Jenis Tanaman</label>            
        <select class="form-control" name="tanaman" onChange='this.form.submit();'>
        <option>Tanaman</option>
                <option>Jagung</option>
      </select>
              </form>
        <br><form id="form1" name="form1" method="post">
        <label for="sel1">Hama / Penyakit</label>            
        <select class="form-control" name="penyakit">
        <option>Hama / Penyakit</option>
               <?php 
              $tampil="select * from penyakit where jenistanaman= \"".$_POST['tanaman']."\"";
              $query1= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query1)){  
          echo "<option value='".$hasil['namapenyakit']."'>".$hasil['idpenyakit']." ".$hasil['namapenyakit']."</option>";
      }
          ?>
      </select>
 
        <br><label for="sel2">GEJALA</label><br>
<form id="form2" name="form2" method="post" action="diagnosa.php">
    <div class="panel panel-primary">
        
    <div class="panel panel-primary">
        <div class="panel-heading">BATANG</div>
            <div class="panel-body">          
      <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
      $tampil="select * from gejala where daerah='batang' and jenistanaman= \"".$_POST['tanaman']."\"";
      $query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
          echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
      }
                  }
          ?>
        </div>
    </div>
     <div class="panel panel-primary">
        <div class="panel-heading">DAUN</div>
            <div class="panel-body">            
      <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
      $tampil="select * from gejala where daerah='daun' and jenistanaman= \"".$_POST['tanaman']."\"";
      $query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
          echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
      }
                  }
          ?>
         </div>
    </div>
     <div class="panel panel-primary">
        <div class="panel-heading">TANAMAN</div>
                <div class="panel-body">           
      <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
      $tampil="select * from gejala where daerah='Tanaman' and jenistanaman= \"".$_POST['tanaman']."\"";
      $query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
          echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
      }
                  }
          ?>
         </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">KULIT</div>
                <div class="panel-body">           
      <?php 
            if(isset($_POST['tanaman']))
                  if($_POST['tanaman']!="jenistanaman"){
      $tampil="select * from gejala where daerah='Kulit' and jenistanaman= \"".$_POST['tanaman']."\"";
      $query= mysqli_query($konek_db,$tampil);
                while($hasil=mysqli_fetch_array($query)){  
          echo "<input type='checkbox' value='".$hasil['gejala']."' name='gejala[]' /> ".$hasil['gejala']."<br>";
      }
                  }
          ?>
        </div>
    </div>
   
    </div>
    <br><button type="submit" name ="submit" class="btn btn-primary">Simpan</button>
     <?php      
        if(isset($_POST['submit'])){
            $penyakit= $_POST['penyakit'];
            $gejala = $_POST['gejala'];
            $jumlah_dipilih = count($gejala);
           for($x=0;$x<$jumlah_dipilih;$x++){
                     $hasil= mysqli_query($konek_db, "INSERT INTO basispengetahuan (namapenyakit, gejala) values('$penyakit','$gejala[$x]')");
                        if($hasil){
                            echo '<script language="javascript">';
                            echo 'alert("Data Berhasil disimpan")';
                            echo '</script>';
                            }
                    }
        }
    
                ?>
        </form>
        <br>
        <br>
        </form>
    </div>
  </div>
</div>


</div>
</body>
</html>
