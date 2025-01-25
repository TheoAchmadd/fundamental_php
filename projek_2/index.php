<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheoAchmadAlfareza</title>
</head>
<body>
    <form action="form.html">
        <fieldset>
            <legend><h1>Formulir</h1></legend>

            <p>
                <label for="">NISN :</label>
                <input type="text" placeholder="...">
            </p>
            <p>
                <label for="">NAMA :</label>
                <input type="text" placeholder="Nama Lengkap">
            </p>
            <p>
                <label for="">TEMPAT LAHIR :</label>
                <input type="text">
            </p>
            <p>
                <label for="">TANGGAL LAHIR :</label>
                <input type="date" placeholder="dd-mm-yyyy">
            </p>
            <p>
                <label for="">JENDER :</label>
                <input type="radio">Laki-laki
                <input type="radio">Perempuan
            </p>
            <p>
                <label for="">AGAMA :</label>
                <select name="select">
                    <option value="">...</option>
                    <option value="">Islam</option>
                    <option value="">Kristen Protestan</option>
                    <option value="">Kristen Katolik</option>
                    <option value="">Hindu</option>
                    <option value="">Buddha</option>
                    <option value="">Konghucu</option>
                </select>
            </p>
            <p>
                <label for="">ALAMAT :</label> <br>
                <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
            </p>
            <p>
                <label for="">ASAL SEKOLAH</label>
                <input type="text">
            </p>
            <p>
                <label for="">PILIHAN JURUSAN 1 :</label>
                <select name="select">
                    <option value="">...</option>
                    <option value="">PENGEMBANGAN PERANGKAT LUNAK & GIM</option>
                    <option value="">TEKNIK JARINGAN KOMPUTER & TELEKOMUNIKASI</option>
                    <option value="">DESAIN KOMUNIKASI VISUAL</option>
                    <option value="">SENI PERTUNJUKAN</option>
                    <option value="">AKUNTANSI KEUANGAN LEMBAGA</option>
                    <option value="">MANAJEMEN PERKANTORAN & LAYANAN BISNIS</option>
                    <option value="">PERHOTELAN</option>
                    <option value="">PEMASARAN</option>
                    <option value="">BROADCASTING & PERFILMAN</option>
                </select>
            </p>
            <p>
                <label for="">PILIHAN JURUSAN 2 :</label>
                <select name="select">
                    <option value="">...</option>
                    <option value="">PENGEMBANGAN PERANGKAT LUNAK & GIM</option>
                    <option value="">TEKNIK JARINGAN KOMPUTER & TELEKOMUNIKASI</option>
                    <option value="">DESAIN KOMUNIKASI VISUAL</option>
                    <option value="">SENI PERTUNJUKAN</option>
                    <option value="">AKUNTANSI KEUANGAN LEMBAGA</option>
                    <option value="">MANAJEMEN PERKANTORAN & LAYANAN BISNIS</option>
                    <option value="">PERHOTELAN</option>
                    <option value="">PEMASARAN</option>
                    <option value="">BROADCASTING & PERFILMAN</option>
                </select>
            </p>
            <p>
                <label for="">EKSKUL YANG DIMINATI :</label>
                <input type="checkbox" name="" id="">OSIS
                <input type="checkbox" name="" id="">DEWAN AMBALAN
                <input type="checkbox" name="" id="">PECINTA ALAM
                <input type="checkbox" name="" id="">REMAS AL - KAUTSAR
                <input type="checkbox" name="" id="">UKS/PMR
                <br>
                <input type="checkbox" name="" id="">FUTSAL
                <input type="checkbox" name="" id="">BASKET
                <input type="checkbox" name="" id="">VOLI
                <input type="checkbox" name="" id="">TEATER KUSUMA
                <input type="checkbox" name="" id="">GDS
            </p>
            <br>
            <p>
                <input type="submit" value="INPUT DATA">
            </p>
        </fieldset>
    </form>
</body>
</html>