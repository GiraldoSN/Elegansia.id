<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
    <link rel="stylesheet" href="beli.css">
    <style>
        /* Tambahkan gaya CSS tambahan di sini */
		/* Styles for the container */
.container {
  width: 80%;
  margin: 0 auto;
  padding: 20px;
  background-color: #f5f5f5;
  border: 8px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

/* Styles for the header */
.header {
  text-align: center;
  margin-bottom: 20px;
}

.header .title {
  font-size: 24px;
  color: #333;
}

/* Styles for the back link */
.back-link {
  display: inline-block;
  padding: 10px 20px;
  background-color: #f5f5f5;
  color: #333;
  text-decoration: none;
  border: 1px solid #ddd;
  border-radius: 3px;
  transition: background-color 0.3s, color 0.3s;
}

.back-link:hover {
  background-color: #ddd;
  color: #555;
}

/* Styles for the form */
.form-pesan table {
  width: 100%;
  margin-bottom: 20px;
  border-collapse: collapse;
}

.form-pesan table td {
  padding: 8px;
  border: 1px solid #ddd;
}

.form-pesan table tr:last-child td {
  border-bottom: none;
}

.form-pesan table input[type="text"],
.form-pesan table input[type="submit"] {
  padding: 8px 12px;
  width: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  box-sizing: border-box;
}

.form-pesan table input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s;
}

.form-pesan table input[type="submit"]:hover {
  background-color: #45a049;
}

/* Styles for the radio buttons */
.form-pesan table input[type="radio"] {
  margin-right: 5px;
}

    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1 class="title">EDIT DATA PEMESANAN</h1>
        </div>
        <a class="back-link" href="keranjang.php">KEMBALI</a>

        <?php
        include 'koneksi.php';

        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE id='$id'");
        while ($d = mysqli_fetch_array($data)) {
            ?>
            <form method="post" action="update.php" class="form-pesan">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                            <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Nomor HP</td>
                        <td><input type="text" name="nomor" value="<?php echo $d['nomor']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Kode</td>
                        <td>
                            <?php
                            $kodeOptions = array(
                                array('value' => 'A01', 'label' => 'A01'),
                                array('value' => 'A02', 'label' => 'A02'),
                                array('value' => 'A03', 'label' => 'A03'),
                                array('value' => 'A04', 'label' => 'A04'),
                                array('value' => 'A05', 'label' => 'A05')
                            );
                            foreach ($kodeOptions as $option) {
                                $checked = ($d['kode'] == $option['value']) ? 'checked' : '';
                                echo '<input type="radio" name="kode" value="' . $option['value'] . '" onclick="hitungHarga()" ' . $checked . '>' . $option['label'];
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td><input type="text" name="jumlah" onchange="hitungHarga()" value="<?php echo $d['jumlah']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input type="text" name="harga" readonly value="<?php echo $d['harga']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td><input type="text" name="total" readonly value="<?php echo $d['total']; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="SIMPAN"></td>
                    </tr>
                </table>
            </form>
        <?php
        }
        ?>
    </div>

    <script>
        function hitungHarga() {
            var kode = document.querySelector('input[name="kode"]:checked').value;
            var jumlah = document.querySelector('input[name="jumlah"]').value;
            var harga;

            switch (kode) {
                case "A01":
                    harga = 320000;
                    break;
                case "A02":
                    harga = 270000;
                    break;
                case "A03":
                    harga = 300000;
                    break;
                case "A04":
                    harga = 170000;
                    break;
                case "A05":
                    harga = 115000;
                    break;
                default:
                    harga = 0;
            }

            document.querySelector('input[name="harga"]').value = harga;
            document.querySelector('input[name="total"]').value = harga * jumlah;
        }
    </script>
</body>

</html>
