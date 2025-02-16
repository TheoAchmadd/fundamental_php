<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Bersih Karyawan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="judul mt-5">
        <h1 class="fw-bold">Aplikasi penghitungan Gaji</h1>
        <h3 class="text-muted">CV. TeknoNusa</h3>
    </div>

    <div class="kartu shadow-lg">
        <div class="bentuk-kartu p-4">
    <form action="proses.php" id="myForm" method="POST">

            <div class="mb-3">
                <label for="" class="form-label fw-semibold">NAMA :</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label fw-semibold">DIVISI :</label>
                <input type="text" class="form-control" name="divisi" placeholder="Divisi" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label fw-semibold">Gaji Bulanan :</label>
                <input type="number" class="form-control" name="gaji_bulanan" require placeholder="Gaji Bulanan" required>
            </div>
            <div class="mb-3">
                <label for="" class="form-label fw-semibold">Apakah Anda Memiliki NPWP :</label>
                <input type="radio" class="form-check-input" value="iya" name="npwp" required>Iya
                <input type="radio" class="form-check-input" value="tidak" name="npwp" required>Tidak
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary w-100" name="input_data" value="INPUT DATA">
            </div>

    </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>