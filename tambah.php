<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
    <link rel="stylesheet" href="tambah.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        form h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
        }

        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .back-link {
            display: block;
            text-align: right;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="tambah_aksi.php">
        <table>
            <h2>FORM DATA PEMESANAN</h2>
            <h3>TAMBAH DATA MAHASISWA</h3>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>
            <tr>
                <td><label for="alamat">Alamat</label></td>
                <td><input type="text" id="alamat" name="alamat"></td>
            </tr>
            <tr>
                <td><label for="nomor">Nomor HP</label></td>
                <td><input type="text" id="nomor" name="nomor"></td>
            </tr>
            <tr>
                <td>Kode</td>
                <td>
                    <input type="radio" id="a01" name="kode" value="A01" onclick="hitungHarga()"><label for="a01">A01</label>
                    <input type="radio" id="a02" name="kode" value="A02" onclick="hitungHarga()"><label for="a02">A02</label>
                    <input type="radio" id="a03" name="kode" value="A03" onclick="hitungHarga()"><label for="a03">A03</label>
                    <input type="radio" id="a04" name="kode" value="A04" onclick="hitungHarga()"><label for="a04">A04</label>
                    <input type="radio" id="a05" name="kode" value="A05" onclick="hitungHarga()"><label for="a05">A05</label>
                </td>
            </tr>
            <tr>
                <td><label for="jumlah">Jumlah</label></td>
                <td><input type="text" id="jumlah" name="jumlah" onchange="hitungHarga()"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga</label></td>
                <td><input type="text" id="harga" name="harga" readonly></td>
            </tr>
            <tr>
                <td><label for="total">Total Harga</label></td>
                <td><input type="text" id="total" name="total" readonly></td>
            </tr>
            <tr>
                <td><a class="back-link" href="isi.php">KEMBALI</a></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>

    <script>
        function hitungHarga() {
            var kode = document.querySelector('input[name="kode"]:checked').value;
            var jumlah = document.querySelector('input[name="jumlah"]').value;
            var harga;

            if (kode === "A01") {
                harga = 320000;
            } else if (kode === "A02") {
                harga = 270000;
            } else if (kode === "A03") {
                harga = 300000;
            } else if (kode === "A04") {
                harga = 170000;
            } else if (kode === "A05") {
                harga = 115000;
            }

            document.querySelector('input[name="harga"]').value = harga;
            document.querySelector('input[name="total"]').value = harga * jumlah;
        }
    </script>
</body>
</html>
