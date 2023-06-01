<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data</title>
    <link rel="stylesheet" href="cetak.css">
    <style>
        /* Tambahkan gaya CSS tambahan di sini */
    </style>
</head>

<body>
    <header>
    <h2>Elegansia.id</h2>
    <div style="text-align: center;"><h1>Data Laporan Pemesanan Barang</h1></div>

        
    </header>

    <?php
    include 'koneksi.php';

    $sql = "SELECT * FROM pesanan";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) > 0) {
        ?>
        <table border="1" style="width: 100%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Kode Baju</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['nomor']; ?></td>
                        <td><?php echo $data['kode']; ?></td>
                        <td><?php echo $data['jumlah']; ?></td>
                        <td><?php echo $data['harga']; ?></td>
                        <td><?php echo $data['total']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    } else {
        echo "Tidak ada data yang tersedia.";
    }
    ?>

    <script>
        window.onload = function () {
            window.print();
        };
    </script>

</body>

</html>
