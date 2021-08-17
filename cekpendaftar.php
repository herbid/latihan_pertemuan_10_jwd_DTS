<?php include("koneksi.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | Digital Talent</title>
    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css"> 
</head>

<body>
<div class="container-fluid">

<div class="content-wrapper">
<div class="card">
  <h5 class="card-header">Siswa yang sudah mendaftar</h5>
  <div class="card-body">


	<nav>
    <a class="btn btn-primary" href="daftar.php" role="button">Tambah Baru</a>
	</nav>
	
	<br>
	<div class="alert alert-none" role="alert">
    <table class="table table-bordered">
  <thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Sekolah Asal</th>
            <th>Jurusan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM user ";
		$query = mysqli_query($db, $sql);
		
		while($siswa = mysqli_fetch_array($query)){



            
			echo "<tr>";
			
			echo "<td>".$siswa['id']."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
			echo "<td>".$siswa['agama']."</td>";
			echo "<td>".$siswa['asal_sklh']."</td>";
            echo "<td>".$siswa['jurusan']."</td>";

			
			echo "<td>";
			echo "<a href='edit.php?id=".$siswa['id']."'>Edit</a> | ";
			echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>

    <br>
    </div>
    </div>
    </div>
    </div>

	</body>
</html>