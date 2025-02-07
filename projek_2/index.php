<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheoAchmadAlfareza</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="proses.php" method="POST">
        <fieldset>
            <legend><h1>Formulir</h1></legend>

            <p>
                <label for="">NISN :</label>
                <input type="number" name="NISN" placeholder="...">
            </p>
            <p>
                <label for="">NAMA :</label>
                <input type="text" name="NAMA" placeholder="Nama Lengkap">
            </p>
            <p>
                <label for="">TEMPAT LAHIR :</label>
                <input type="text" name="TEMPAT_LAHIR">
            </p>
            <p>
                <label for="">TANGGAL LAHIR :</label>
                <input type="date" name="TANGGAL" placeholder="dd-mm-yyyy">
            </p>
            <p>
                <label for="">JENDER :</label>
                <input type="radio" value="L" name="JENDER">Laki-laki
                <input type="radio" value="P" name="JENDER">Perempuan
            </p>
            <p>
                <label for="">AGAMA :</label>
                <select name="AGAMA">
                    <option value="...">...</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen Protestan">Kristen Protestan</option>
                    <option value="Kristen Katolik">Kristen Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </p>
            <p>
                <label for="">ALAMAT :</label> <br>
                <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
            </p>
            <p>
                <label for="">ASAL SEKOLAH</label>
                <input type="text" name="ASAL_SEKOLAH">
            </p>
            <p>
                <label for="">PILIHAN JURUSAN 1 :</label>
                <select name="JURUSAN_1">
                    <option value="...">...</option>
                    <option value="PPLG">PENGEMBANGAN PERANGKAT LUNAK & GIM</option>
                    <option value="TJKT">TEKNIK JARINGAN KOMPUTER & TELEKOMUNIKASI</option>
                    <option value="DKV">DESAIN KOMUNIKASI VISUAL</option>
                    <option value="SP">SENI PERTUNJUKAN</option>
                    <option value="AKL">AKUNTANSI KEUANGAN LEMBAGA</option>
                    <option value="MPLB">MANAJEMEN PERKANTORAN & LAYANAN BISNIS</option>
                    <option value="PH">PERHOTELAN</option>
                    <option value="PM">PEMASARAN</option>
                    <option value="BCF">BROADCASTING & PERFILMAN</option>
                </select>
            </p>
            <p>
                <label for="">PILIHAN JURUSAN 2 :</label>
                <select name="JURUSAN_2">
                <option value="...">...</option>
                    <option value="PPLG">PENGEMBANGAN PERANGKAT LUNAK & GIM</option>
                    <option value="TJKT">TEKNIK JARINGAN KOMPUTER & TELEKOMUNIKASI</option>
                    <option value="DKV">DESAIN KOMUNIKASI VISUAL</option>
                    <option value="SP">SENI PERTUNJUKAN</option>
                    <option value="AKL">AKUNTANSI KEUANGAN LEMBAGA</option>
                    <option value="MPLB">MANAJEMEN PERKANTORAN & LAYANAN BISNIS</option>
                    <option value="PH">PERHOTELAN</option>
                    <option value="PM">PEMASARAN</option>
                    <option value="BCF">BROADCASTING & PERFILMAN</option>
                </select>
            </p>
            <p>
                <label for="">EKSKUL YANG DIMINATI :</label>
                <input type="checkbox" value="OSIS" name="EKSKUL[]" id="">OSIS
                <input type="checkbox" value="DEWAN AMBALAN" name="EKSKUL[]" id="">DEWAN AMBALAN
                <input type="checkbox" value="PECINTA ALAM" name="EKSKUL[]" id="">PECINTA ALAM
                <input type="checkbox" value="REMAS AL - KAUTSAR" name="EKSKUL[]" id="">REMAS AL - KAUTSAR
                <input type="checkbox" value="UKS/PMR" name="EKSKUL[]" id="">UKS/PMR
                <br>
                <input type="checkbox" value="FUTSAL" name="EKSKUL[]" id="">FUTSAL
                <input type="checkbox" value="BASKET" name="EKSKUL[]" id="">BASKET
                <input type="checkbox" value="VOLI" name="EKSKUL[]" id="">VOLI
                <input type="checkbox" value="TEATER KUSUMA" name="EKSKUL[]" id="">TEATER KUSUMA
                <input type="checkbox" value="GDS" name="EKSKUL[]" id="">GDS
            </p>
            <br>
            <p>
                <input type="submit" name="input_data" value="INPUT DATA">
            </p>
        </fieldset>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>