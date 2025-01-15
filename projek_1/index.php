<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php   

        define('gaji', 5000000);
        define('bonus', 500000);
        define('pajak', 0.12);
        $proyek = 2;

        //menghitung bonus
        $proyek *= bonus; // = $proyek = $proyek * $bonus

        //mengitung gaji+bonus
        $total_gaji = gaji + $proyek;

        //mengitung total pajak
        $total_pajak = $total_gaji * pajak;

        //gaji bersih
        $gaji_bersih = $total_gaji - $total_pajak;
        


        echo "Anda telah menyelesaikan 2 proyek <br/>";
        echo "Ini Bonus Anda $proyek <br/><br/>";
        echo "Gaji anda 5000000 <br/>";
        echo "ini gaji anda setelah ditambah bonus $total_gaji <br/><br/>";
        echo "pajak anda $total_pajak <br/><br/>";
        echo "ini gaji bersih anda $gaji_bersih"

    ?> 
</body>
</html>