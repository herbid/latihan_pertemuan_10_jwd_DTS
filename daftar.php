<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran Siswa Baru</title>
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

    <div class="container-fluid">

        <div class="content-wrapper">
            <div class="card">
                <h5 class="card-header">Formulir Pendaftaran Siswa Baru</h5>
                <div class="card-body">
                    <div class="row">



                        <form action="proses_daftar.php" method="POST">

                            <div class="form-group">
                                <label>Nama:</label>
                                <input type="text" id="inputName" name="nama" placeholder="nama lengkap" class="form-control">
                            </div>



                            <div class="form-group">
                                <label>Jenis Kelamin</label><br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline1" name="jenis_kelamin" value="laki-laki" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">Laki-Laki</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline2" name="jenis_kelamin" value="perempuan" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="agama">Agama: </label>
                                <select name="agama" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
				<option>Atheis</option>
			</select>
                            </div>

                            <div class="form-group">
                                <label for="sekolah_asal">Sekolah Asal: </label>
                                <input type="text" id="inputName" name="asal_sklh" placeholder="nama lengkap" class="form-control" placeholder="nama sekolah">
                            </div>

                            <div class="form-group">
                                <label for="">Pelatihan</label>
                                <select name="jurusan" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;" required>
			        <option value="">Pilih Jurusan Anda</option>
			        <option value="junior_web_programing"> Junior Web Programing</option>
			        <option value="junior_mobile_programing"> Junior Mobile Programing</option>
			        <option value="junior_grapics_designer"> Junior Grapics Designer</option>
			        <option value="intermediate_multimedia_designer"> Intermediate Multimedia Designer</option>
			      </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" rows="3" name="alamat" placeholder="Enter ..."></textarea>
                            </div>
                            <p>
                                <input type="submit" value="Daftar" name="daftar" />
                            </p>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.js"></script>
</body>

</html>