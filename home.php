<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Perpustakaan</title>
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
<br>
    <div class="card">
      <div class="card-body">
        <h2>Beranda</h2>
        <p>Selamat datang di halaman beranda Admin Perpustakaan.</p>
      </div>
    </div>

    <div class="card">
      <div class="card-header">
        <h4>Status Buku</h4>
      </div>
      <div class="card-body">
          <table>
              <thead>
                      <th>No.</th>
                      <th>Jumlah buku yang tersedia</th>
                      <th>Jumlah buku dipinjam</th>
                      <th>Jumlah buku hilang</th>
              </thead>
              <tbody>
                  <tr>
                      <td>1.</td>
                      <td>50</td>
                      <td>10</td>
                      <td>2</td>
                  </tr>
              </tbody>
          </table>
      </div>
    </div>
  
  </body>
</html>
