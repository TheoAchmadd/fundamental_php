<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Gaji</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-body p-4">
                        <h3 class="text-center fw-bold mb-4">Hasil Perhitungan Gaji</h3>

                        <?php
                        if (isset($_POST['input_data'])) {
                            $nama = $_POST['nama'];
                            $divisi = $_POST['divisi'];
                            $gaji_bulanan = floatval($_POST['gaji_bulanan']);
                            $npwp = $_POST['npwp'];
                            $potongan_pajak = 0;

                            $gaji_tahunan = $gaji_bulanan * 12;
                            $gajipajak = 54000000;

                            if ($gaji_tahunan > $gajipajak) {
                                $pajak = $npwp == 'iya' ? 0.15 : 0.20;
                                $potongan_pajak = $gaji_tahunan * $pajak;
                            }

                            $gaji_bersih_tahunan = $gaji_tahunan - $potongan_pajak;
                            $gaji_bersih_bulanan = $gaji_bersih_tahunan / 12;
                        ?>

                        <!-- Tabel Hasil -->
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama</th>
                                <td><?= htmlspecialchars($nama) ?></td>
                            </tr>
                            <tr>
                                <th>Divisi</th>
                                <td><?= htmlspecialchars($divisi) ?></td>
                            </tr>
                            <tr>
                                <th>Gaji Kotor Tahunan</th>
                                <td>Rp. <?= number_format($gaji_tahunan, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <th>Potongan Pajak</th>
                                <td>Rp. <?= number_format($potongan_pajak, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <th>Gaji Bersih Bulanan</th>
                                <td>Rp. <?= number_format($gaji_bersih_bulanan, 0, ',', '.') ?></td>
                            </tr>
                            <tr>
                                <th>Gaji Bersih Tahunan</th>
                                <td>Rp. <?= number_format($gaji_bersih_tahunan, 0, ',', '.') ?></td>
                            </tr>
                        </table>

                        <!-- Tombol Kembali -->
                        <div class="text-center mt-4">
                            <a href="index.php" class="btn btn-primary">Kembali</a>
                        </div>

                        <?php } else { ?>
                            <div class="alert alert-danger text-center">
                                <strong>Error!</strong> Data tidak ditemukan. Silakan input melalui formulir.
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Opsional jika menggunakan komponen interaktif) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
