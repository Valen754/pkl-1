<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Buku</title>
</head>

<body>
    <header>
        <nav>
          <img src="logo.png" alt="Perpustakaan Logo" class="navbar-logo">
            <h1 class="custom-header">Admin Perpustakaan</h1>
            <ul class="navbar">
                <li><a href="home.php">Beranda</a></li>
                <li><a href="daftar_buku.php">Daftar Buku</a></li>
                <li><a href="daftar_pengguna.php">Daftar Pengguna</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <div class="container card-container"> <!-- Container untuk card -->
      <div class="card">
        <h5 class="card-header">Tambah Buku</h5>
        <div class="card-body">
            <form>
                <label for="judul">Judul:</label>
                <input type="text" id="judul" name="judul" required />

                <label for="nup">NUP:</label>
                <input type="text" id="nup" name="nup" required />

                <label for="kode">Kode Klasifikasi:</label>
                <input type="text" id="kode" name="kode" required />

                <label for="pengarang">Pengarang:</label>
                <input type="text" id="pengarang" name="pengarang" required />

                <label for="penerbit">Penerbit:</label>
                <input type="text" id="penerbit" name="penerbit" required />

                <label for="tahun">Tahun Terbit:</label>
                <input type="text" id="tahun" name="tahun" required />

                <label for="sumber">Sumber buku:</label>
                <input type="text" id="sumber" name="sumber" required />

                <label for="jumlah">Jumlah buku:</label>
                <input type="text" id="jumlah" name="jumlah" required />

                <button class="btn btn-success"><a href="tambah_buku.html" class="text-white">Tambah Buku</a></button>
            </form>
        </div>
      </div>
    </div>
</body>

</html>
