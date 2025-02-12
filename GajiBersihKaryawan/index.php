<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Bersih Karyawan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="judul">
        <h1>Aplikasi penghitungan Gaji</h1>
        <h3>CV. TeknoNusa</h3>
    </div>
    <form action="proses.php" method="POST">

        <fieldset>
            <p>
                <label for="">NAMA :</label>
                <input type="text" name="nama" placeholder="Nama Lengkap">
            </p>
            <p>
                <label for="">DIVISI :</label>
                <input type="text" name="divisi" placeholder="Divisi">
            </p>
            <p>
                <label for="">Gaji Bulanan :</label>
                <input type="number" name="gaji_bulanan" require placeholder="Gaji Bulanan">
            </p>
            <p>
                <label for="">Apakah Anda Memiliki NPWP :</label>
                <input type="radio" value="iya" name="npwp">Iya
                <input type="radio" value="tidak" name="npwp">Tidak
            </p>
            <p>
                <input type="submit" name="input_data" value="INPUT DATA">
            </p>
        </fieldset>

    </form>

</body>
</html>