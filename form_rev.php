<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <style>
        body {
            margin:0;
            padding:0;
        }
    </style>
</head>
<body>
<h1>Belanja Online</h1>
<hr>

<div class="container">
    <form action="<?php echo $_SERVER["PHP_SELF"] ;?>" method="POST">
    <div>
        <label for="nama">Nama Custumer : </label>
        <input type="text" id="nama" name="nama" placeholder="Nama Customer" required="required">
    </div>
    <br>
    <div>
        <label for="produk">Pilih Produk : </label>
        <div>
        <input type="radio" id="tv" name="produk" value="TV"> TV
        <input type="radio" id="tv" name="produk" value="KULKAS"> KULKAS
        <input type="radio" id="tv" name="produk" value="MESIN CUCI"> MESIN CUCI
        </div>
    </div>
    <br>
    <div>
        <label for="jumlah">Jumlah : </label>
        <input type="number" id="jumlah" name="jumlah" placeholder="Jumlah">
    </div>
    <br>

    </form>



</div>



</body>
</html>