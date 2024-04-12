<<<<<<< HEAD:praktikum02/form_belanja.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
    <style>
    body {
      margin:2px;
      padding:2px;
      font-family: 'Times New Roman', Times, serif;
    }
    form {
      max-width: 600px;
      display:flex;
      flex-direction:row;
      width: 100%;
    }
    #button {
        background-color: rgb(53, 198, 9);
        border: rgb(53, 198, 9);
    }
    .container {
      width: 100%;
      display: flex;
      justify-content: space-between;
      margin: 0px;
    }
    .list-harga{
      margin-right:0px;
      padding: 0px;
      width:25%;
      margin-left: 10px;
      margin-right:0px;
    }
    .contain-input {
      margin-left:0px;
      padding: 0px;
      width:100%;
    }
  </style>
</head>
<body>
<h1>Belanja Online</h1>
<hr>

<div class="container">
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ;?>">
<div class="contain-input">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Costumer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary" id="button">Kirim</button>
    </div>
  </div>

  </div>
</form>

<div class="list-harga">
      <table class="tabel">
        <p style="background-color:rgb(29, 131, 234); border-radius:5px; padding:2px;">Daftar Harga</p>
        <p>TV : 4.200.000</p>
        <p>KULKAS : 3.100.000</p>
        <p>MESIN CUCI : 3.800.000</p>
        <p style="background-color:rgb(29, 131, 234); border-radius:5px; padding:2px;">Harga Dapat Berubah Setiap Saat</p>
      </table>
    </div>

</div>
 <hr>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $tv = 4200000 * $jumlah;
    $kulkas = 3100000 * $jumlah;
    $mesinCuci = 3800000 * $jumlah;
}
?>



<?php
if (isset ($_POST["nama"])) {
  echo "<p>Nama Customer : " . $_POST["nama"] . "</p>";
  echo "<p>Pilihan Produk : " . $_POST["produk"] . "</p>";
  echo "<p>Jumlah Produk : " . $_POST["jumlah"] . "</p>";
  echo "Total Belanja : Rp.";
  switch ($produk) {
    case "TV":
      echo $tv;
      break;
    case "KULKAS":
      echo $kulkas;
      break;
    case "MESIN CUCI":
      echo $mesinCuci;
      break;
    }
}
?>

</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
    <style>
    body {
      margin:2px;
      padding:2px;
      font-family: 'Times New Roman', Times, serif;
    }
    form {
      max-width: 600px;
      display:flex;
      flex-direction:row;
      width: 100%;
    }
    #button {
        background-color: rgb(53, 198, 9);
        border: rgb(53, 198, 9);
    }
    .container {
      width: 100%;
      display: flex;
      justify-content: space-between;
      margin: 0px;
    }
    .list-harga{
      margin-right:0px;
      padding: 0px;
      width:25%;
      margin-left: 10px;
      margin-right:0px;
    }
    .contain-input {
      margin-left:0px;
      padding: 0px;
      width:100%;
    }
  </style>
</head>
<body>
<h1>Belanja Online</h1>
<hr>

<div class="container">
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"] ;?>">
<div class="contain-input">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Costumer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary" id="button">Kirim</button>
    </div>
  </div>

  </div>
</form>

<div class="list-harga">
      <table class="tabel">
        <p style="background-color:rgb(29, 131, 234); border-radius:5px; padding:2px;">Daftar Harga</p>
        <p>TV : 4.200.000</p>
        <p>KULKAS : 3.100.000</p>
        <p>MESIN CUCI : 3.800.000</p>
        <p style="background-color:rgb(29, 131, 234); border-radius:5px; padding:2px;">Harga Dapat Berubah Setiap Saat</p>
      </table>
    </div>

</div>
 <hr>

<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];
    $tv = 4200000 * $jumlah;
    $kulkas = 3100000 * $jumlah;
    $mesinCuci = 3800000 * $jumlah;
}
?>



<?php
if (isset ($_POST["nama"])) {
  echo "<p>Nama Customer : " . $_POST["nama"] . "</p>";
  echo "<p>Pilihan Produk : " . $_POST["produk"] . "</p>";
  echo "<p>Jumlah Produk : " . $_POST["jumlah"] . "</p>";
  echo "Total Belanja : Rp.";
  switch ($produk) {
    case "TV":
      echo $tv;
      break;
    case "KULKAS":
      echo $kulkas;
      break;
    case "MESIN CUCI":
      echo $mesinCuci;
      break;
    }
}
?>

</body>
>>>>>>> b7306a00093ae7ea93957f5b4f9e94d940e70f3d:form_belanja.php
</html>