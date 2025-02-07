<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheoAchmadAlfareza</title>
</head>
<body>

<fieldset>
            <legend><h1>Formulir</h1></legend>

    <?php
        if(isset($_POST['input_data']))
    ?>

    <table>

        <tr>
            <td>NISN</td>
            <td>:</td>
            <td>
                <?= $_POST['NISN']?>
            </td>
        </tr>

        <tr>
            <td>NAMA</td>
            <td>:</td>
            <td>
                <?= $_POST['NAMA']?>
            </td>
        </tr>

        <tr>
            <td>TEMPAT LAHIR</td>
            <td>:</td>
            <td>
                <?= $_POST['TEMPAT_LAHIR']?>
            </td>
        </tr>

        <tr>
            <td>TANGGAL LAHIR</td>
            <td>:</td>
            <td>
                <?= $_POST['TANGGAL']?>
            </td>
        </tr>

        <tr>
            <td>JENDER</td>
            <td>:</td>
            <td>
                <?= $_POST['JENDER']?>
            </td>
        </tr>

        <tr>
            <td>AGAMA</td>
            <td>:</td>
            <td>
                <?= $_POST['AGAMA']?>
            </td>
        </tr>

        <tr>
            <td>ALAMAT</td>
            <td>:</td>
            <td>
                <?= $_POST['alamat']?>
            </td>
        </tr>

        <tr>
            <td>ASAL SEKOLAH</td>
            <td>:</td>
            <td>
                <?= $_POST['ASAL_SEKOLAH']?>
            </td>
        </tr>

        <tr>
            <td>PILIH JURUSAN 1</td>
            <td>:</td>
            <td>
                <?= $_POST['JURUSAN_1']?>
            </td>
        </tr>

        <tr>
            <td>PILIH JURUSAN 2</td>
            <td>:</td>
            <td>
                <?= $_POST['JURUSAN_2']?>
            </td>
        </tr>

        <tr>
            <td>EKSKUL</td>
            <td>:</td>
            <td>
                <?= implode(" , ",$_POST['EKSKUL']) ?>
            </td>
        </tr>

    </table>

    </fieldset>
</body>
</html>