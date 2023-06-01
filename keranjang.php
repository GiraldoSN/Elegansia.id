<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Pemesanan</title>
  <link rel="stylesheet" href="keranjang.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    th {
      text-align: center;
    }
    td {
      vertical-align: middle;
    }

    th,
    td {
      border: 1px solid black;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
      font-weight: bold;
      text-align: center;
    }
  </style>
</head>

<body>
  <nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Elegansia.id</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </nav>
  <br><br><br><br>
  <h2 class="text-center">DAFTAR PESANAN ANDA</h2>
  <div class="container">
    <div class="card mt-4">
      <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Data Pemesanan</h5>
          <a href="tambah.php" class="btn btn-success">Tambah Pesanan</a>
        </div>
      </div>
      <div class="card-body">
        <form class="d-flex mb-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">
            <ion-icon name="search-outline"></ion-icon>
          </button>
        </form>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead class="table-primary">
              <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>ALAMAT</th>
                <th>NOMOR HP</th>
                <th>KODE</th>
                <th>JUMLAH</th>
                <th>HARGA</th>
                <th>TOTAL</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include 'koneksi.php';

              $no = 1;
              $data = mysqli_query($koneksi, "SELECT * FROM pesanan");
              while ($d = mysqli_fetch_array($data)) {
                ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['nomor']; ?></td>
                <td><?php echo $d['kode']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td><?php echo $d['harga']; ?></td>
                <td><?php echo $d['total']; ?></td>
                <td>
                  <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-secondary btn-sm text-white">EDIT</a>
                  <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-danger btn-sm text-white">HAPUS</a>
                </td>
              </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
        <a href="cetak.php" class="btn btn-danger">Cetak Pesanan <ion-icon name="document-outline"></ion-icon></a>
      </div>
    </div>
  </div>
  <br>
  <footer class="mt-4 py-2 bg-light">
    <div class="container text-center">
      <small class="text-muted">© 2023 - Elegansia.id</small>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
