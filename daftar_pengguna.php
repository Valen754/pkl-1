<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Pengguna</title>
</head>

<body>
    <header>
        <nav>
          <img src="logo.png" alt="Perpustakaan Logo" class="navbar-logo">
          <h1 class="custom-header">Admin Perpustakaan</h1>

            <ul class="navbar">
                <li><a href="home.html">Beranda</a></li>
                <li><a href="daftar_buku.html">Daftar Buku</a></li>
                <li><a href="#">Daftar Pengguna</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <br>
    <div class="card">
      <div class="card-header">
        <h4>Daftar Pengguna</h4>
      </div>
      <div class="card-body">
          <table>
              <thead>
                      <th>ID Pengguna</th>
                      <th>Nama Pengguna</th>
                      <th>Email</th>
                      <th>Role</th>
              </thead>
              <tbody>
                  <!-- Daftar pengguna akan ditampilkan di sini -->
                  <tr>
                      <td>1</td>
                      <td>John Doe</td>
                      <td>john@example.com</td>
                      <td>Admin</td>
                  </tr>
                  <tr>
                      <td>2</td>
                      <td>Jane Smith</td>
                      <td>jane@example.com</td>
                      <td>Member</td>
                  </tr>
                  <!-- Tambahkan entri pengguna sesuai kebutuhan -->
              </tbody>
          </table>
      </div>
    </div>
</body>
</html>
