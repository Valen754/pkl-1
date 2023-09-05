<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <title>Perpustakaan</title>
  <body>
    <header>
        <nav>
          <img src="logo.png" alt="Perpustakaan Logo" class="navbar-logo">
          <h1 class="custom-header">Admin Perpustakaan</h1>
          <ul class="navbar">
            <li><a href="home.php">Beranda</a></li>
            <li><a href="#">Daftar Buku</a></li>
            <li><a href="daftar_pengguna.php">Daftar Pengguna</a></li>
            <li><a href="#">Kontak</a></li>
          </ul>
          </nav>
    </header>
    <br>
    <div class="card">
      <div class="card-header">
        <h4>Daftar Buku</h4>
      </div>
      <div class="card-body">
          <table>
           <thead>
            <th>ID Buku</th>
            <th>Judul Buku</th>
            <th>NUP</th>
            <th>Kode Klasifikasi</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Sumber Buku</th>
            <th>Jumlah Buku</th>
            <th>Aksi</th>
           </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Harry Potter</td>
                <td>123</td>
                <td>123 rwl 1.23</td>
                <td>JK Rowling</td>
                <td>Blomspace</td>
                <td>1997</td>
                <td>Pengadaan th.007</td>
                <td>6</td>
                <td>
                    <a href="edit.html" class="btn btn-primary">Edit</a>
                    <button class="btn btn-danger">Hapus</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Hitman</td>
                <td>321</td>
                <td>312 mnt 2.13</td>
                <td>J Rong</td>
                <td>Blace</td>
                <td>2000</td>
                <td>Pengadaan th.097</td>
                <td>2</td>
                <td>
                    <a href="edit.html" class="btn btn-primary">Edit</a>
                    <button class="btn btn-danger">Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>
          <br />
          <button class="btn btn-success"><a href="tambah_buku.php" class="text-white">Tambah Buku Baru</a></button>
        
      </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
</html>

