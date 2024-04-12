<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-color: #FFF3CF;
            margin-top: 50px;
        }
        .container {
            background-color: white ;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #007bff;
            margin-bottom: 30px;
            text-align: center;
        }
        label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .harga-list {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 10px;
        }

        .hasil-input {
        margin-left: 50px;
        margin-right: 50px;
        margin-top: 20px;
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .hasil-input h3 {
        color: #007bff;
        margin-bottom: 20px;
        text-align: center;
    }
    .hasil-input p {
        font-size: 18px;
        margin-bottom: 10px;
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Produk Barang</h2>
        <div class="row">
            <div class="col-md-6">
                <form method="post">
                    <div class="form-group row">
                        <label for="name" class="col-4 col-form-label">Customer :</label> 
                        <div class="col-8">
                            <input id="name" name="name" placeholder="Nama Customer" type="text" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Produk :</label> 
                        <div class="col-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                                <label for="produk_0" class="custom-control-label">TV</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="BAJU" required="required"> 
                                <label for="produk_1" class="custom-control-label">BAJU</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="SHOES" required="required"> 
                                <label for="produk_2" class="custom-control-label">SHOES</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-4 col-form-label">Jumlah Produk :</label> 
                        <div class="col-8">
                            <input id="jumlah" name="jumlah" placeholder="Jumlah Produk" type="number" class="form-control" required="required">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Tambahkan +</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="harga-list">
                    <h4>Daftar Harga :</h4>
                    <ul>
                        <li>CELANA - Rp. 4.200.000</li>
                        <li>BAJU - Rp. 3.100.000</li>
                        <li>SHOES - Rp. 3.800.000</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        // Menangkap data input
        $name = $_POST['name'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];
        $Baju = 3100000 * $jumlah;
        $Celana = 4200000 * $jumlah;
        $Shoes = 3800000 * $jumlah;
        ?>
        <!-- <div class="hasil-input">
            <h3>Hasil Inputan</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama Customer</th>
                        <th scope="col">Produk Pilihan</th>
                        <th scope="col">Jumlah Produk</th>
                        <th scope="col">Total Belanja</th>
                    </tr>
                </thead>
                <tbody> -->
                    <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $produk; ?></td>
                        <td><?php echo $jumlah; ?></td>
                        <td>
                            <?php
                            switch ($produk) {
                                case "TV":
                                    echo $Baju;
                                    break;
                                case "CELANA":
                                    echo $Celana;
                                    break;
                                case "SHOES":
                                    echo $Shoes;
                                    break;
                            }
                            ?>
                        </td>
                    </tr>
                <!-- </tbody>
            </table> -->
        </div>
    <?php } ?>


  

</body>
</html>