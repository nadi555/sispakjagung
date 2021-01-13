<?php
include('koneksi.php');
 
if(isset($_SESSION['login_user'])){
header("location: about.php");
}
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
          <h2 class="text-center">DAFTAR GEJALA</h2>
      <form id="form1" name="form1" method="post" action="gejala.php">
				<label for="sel1">Jenis Tanaman</label>            
				<select class="form-control" name="tanaman" onChange='this.form.submit();'>
				<option>Tanaman</option>
                <option>Jagung</option>
  		</select>
  </form>
<br>
<a href="ainputgejala.php"><button type="button" class="btn btn-default">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
</button></a>
    	<br><br>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID Gejala</th>
							              <th>Gejala</th>
                            <th>Daerah</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                     <?php
if(isset($_POST['tanaman']))
if($_POST['tanaman']!="jenistanaman"){	
$queri="Select * From gejala where jenistanaman = \"".$_POST['tanaman']."\"";
$hasil=mysqli_query ($konek_db,$queri);   
$id = 0;
while ($data = mysqli_fetch_array ($hasil)){  
 			$id++; 
 			echo "      
        			<tr>  
        			<td>".$id."</td>
				    	<td>".$data[0]."</td>  
        			<td>".$data[1]."</td>  
        			<td>".$data[2]."</td>
                
                    <td><a href=\"aeditgejala.php?id=".$data[0]."\"><i class='glyphicon glyphicon-pencil'></i></a>"." || <a href=\"adeletegejala.php?id=".$data[0]."\"  onclick='return checkDelete()'><i class='glyphicon glyphicon-trash'></i></a>"."</td>
        		</tr>   
        	";      
			}
}
 ?>  
</table><br><br><br><br><br>
            </div>
    </div>
  </div>
</div>
    
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Yakin menghapus data ini?');
}
</script>
    

</div>
</body>
</html>
