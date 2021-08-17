<?php 

include("koneksi.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: cekpendaftar.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM user WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Siswa | SMK Coding</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<a class="navbar-brand" href="#">Edit Pendaftar</a>

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


<div class="container-fluid">

	<div class="content-wrapper">
		<div class="card">
			<h5 class="card-header">Formulir Pendaftaran Siswa Baru</h5>
			<div class="card-body">
				<div class="row">



	<form action="proses_edit.php" method="POST">
		
			
			<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
		
			<div class="form-group">
			<label for="nama">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" class="form-control" value="<?php echo $siswa['nama'] ?>" />
			</div>
	
		<!-- <p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<?php $jk = $siswa['jenis_kelamin']; ?>
			<label><input type="radio"  name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
			<label><input type="radio"  name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
		</p> -->


		<div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1"  name="jenis_kelamin"class="custom-control-input" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?> >
                                    <label class="custom-control-label" for="customRadioInline1">Laki-Laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="jenis_kelamin" class="custom-control-input" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>>
                                    <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                </div>

         </div>


		<p>
			<label for="agama">Agama: </label>
			<?php $agama = $siswa['agama']; ?>
			<select name="agama" class="form-control">
				<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
				<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
				<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
				<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
				<option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
			</select>
		</p>
		<p>
			<label for="sekolah_asal">Sekolah Asal: </label>
			<input type="text" class="form-control" name="asal_sklh" placeholder="nama sekolah" value="<?php echo $siswa['asal_sklh'] ?>" />
		</p>
		<p>
			<label for="jurusan">Jurusan: </label>
			<?php $jurusan = $siswa['jurusan']; ?>
			<select name="jurusan" class="form-control">
			
			        <option value="Junior Web Programing" <?=$jurusan == 'Junior Web Programing'?'selected':''?>> Junior Web Programing</option>
			        <option value="Junior Mobile Programing"<?=$jurusan == 'Junior Mobile Programing'?'selected':''?>> Junior Mobile Programing</option>
			        <option value="Junior Grapics Designer" <?=$jurusan == 'Junior Grapics Designer'?'selected':''?>> Junior Grapics Designer</option>
			        <option value="Intermediate Multimedia Designer" <?=$jurusan == 'Intermediate Multimedia Designer'?'selected':''?>> Intermediate Multimedia Designer</option>
			      </select>
		</p>

		<p>
			<label for="alamat">Alamat: </label>
			<textarea name="alamat"  class="form-control" ><?php echo $siswa['alamat'] ?></textarea>
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		
	
	</form>
	</div>
                </div>
            </div>
        </div>
    </div>
	</body>
</html>