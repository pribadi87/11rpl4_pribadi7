<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>WEBSISWA - Pendaftaran Siswa Baru</title>
</head>
<body>
<header>
<h3>Pendaftaran Siswa Baru</h3>
<h1>SMKN 1 Kepanjen</h1>
</header>
<h4>Menu</h4>
<nav>
<ul>
<li><a href="form-daftar.php">Daftar Baru</a></li>
<li><a href="list-siswa.php">List Pendaftar</a></li>
</ul>
</nav>
<h3>
<?php if (isset($_GET['status'])) : ?>
<?php if ($_GET['status'] == 'sukses') : ?>
Pendaftaran Siswa Baru Berhasil.!!
<?php else : ?>
Pendaftaran Siswa Baru Gagal.!!
<?php endif; ?>
<?php endif; ?>
</h3>
</body>
</html>