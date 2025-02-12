<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Tabel Otomatis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 2em;
        }
    </style>
</head>
<body>
    
    <form action="" method="POST">
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Baris :</label>
        <input type="number" name="baris" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Kolom :</label>
        <input type="number" name="kolom" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
  </div>
    </form>

    <?php

        if(isset($_POST['submit'])) {
            $baris = $_POST['baris']
            $kolom = $_POST['kolom']
    ?>

    <table border=1 style="width:75%;">

        <?php
            for($i = 1;)
        ?>

        <?php
            }
        ?>

    </table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>