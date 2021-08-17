<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru </title>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css"> 
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<a class="navbar-brand" href="#">Pendaftaran Siswa Baru</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="daftar.php">Daftar Baru</a>
    </li>
  
    <li class="nav-item">
      <a class="nav-link " href="cekpendaftar.php" tabindex="-1" aria-disabled="true">Pendaftaran</a>
    </li>
  </ul>

  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
  </form>

</div>

</nav>

	<br>
    
	<!-- <h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="daftar.php">Daftar Baru</a></li>
			<li><a href="cekpendaftar.php">Pendaftar</a></li>
		</ul>
	</nav> -->

    <?php include("cekpendaftar.php");?>
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo '<script>alert("Pendaftaran siswa baru berhasil!."); document.location="index.php";</script>';
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	
	</body>
</html