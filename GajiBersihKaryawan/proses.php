<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Gaji</title>
</head>
<body>
    
    <?php
    
        $nama = $_POST['nama'];
        $divisi = $_POST['divisi'];
        $gaji_bulanan = floatval($_POST['gaji_bulanan']);
        $npwp = $_POST['npwp'];

        $gaji_tahunan = $gaji_bulanan * 12;
        $gajipajak = 54000000;

        if($gaji_tahunan > $gajipajak) {
            $pajak = $npwp == 'iya' ? 0.15 : 0.20;
            $potongan_pajak = $gaji_tahunan * $pajak;
        }

        $gaji_bersih_tahunan = $gaji_tahunan - $potongan_pajak;
        $gaji_bersih_bulanan = $gaji_bersih_tahunan / 12;

        if(isset($_POST['input_data']))
    
    ?>

    <h3>HASIL</h3>
    <p>NAMA : <?=$nama?></p>
    <p>DIVISI : <?=$divisi?></p>
    <p>Gaji Kotor Tahunan : Rp. <?= number_format($gaji_tahunan, 0, ',', '.')?></p>
    <p>Potongan Pajak : Rp. <?= number_format($potongan_pajak, 0, ',', '.')?></p>
    <p>Gaji Bersih Bulanan: Rp<?= number_format($gaji_bersih_bulanan, 0, ',', '.') ?></p>
    <p>Gaji Bersih Tahunan : Rp.<?= number_format($gaji_bersih_tahunan, 0, ',', '.')?></p>

</body>
</html>