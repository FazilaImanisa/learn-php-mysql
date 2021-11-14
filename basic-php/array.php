<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <style>
        *{
        font-family : poppins;
        }
    </style>
</head>
<body>
    <div class="card-header bg-info m-1">
        <h3 class="text-white text-center">Daftar Perangkat</h3>
    <?php
    $dataProduk = array(
        //nama produk, merk, harga, status stok
        array("Galaxy S21", "Samsung","<img src='foto/S21.png'>", 19000000, true),
        array("Galaxy A71", "Samsung","<img src='foto/A71.jpg'>", 6999000, false),
        array("iPhone 12 Pro Max", "Apple","<img src='foto/IP 12 PM.jpg'>", 20999000, true),
        array("iPhone 12 Mini", "Apple","<img src='foto/IP Mini.jpg'>", 10999000, false),
        array("Macbook Pro 2020", "Apple","<img src='foto/Macbook Pro 2020.jfif'>", 12900000, true)
    );
    ?>
    <?php
        //mendeklarasikan panjang array
        $arrlength = count($dataProduk);
        //membuat perulangan untuk mencetak per baris
        for ($i=0; $i < $arrlength; $i++) {
            // membuat percabangan untuk menentukan stok
            if ($dataProduk[$i][4]==true) {
                $dataProduk[$i][4] = "Stok : Tersedia";
            }else{
                $dataProduk[$i][4]= "Stok : Habis";
            }
            ?>
        <!-- membuat kotak untuk case nya -->
        <div class="container col-lg-12">
            <div class="card col-lg-2 m-4 float-left">
            <?php
                // membuat perulangan untuk per kolom nya
                for ($j=2; $j < $arrlength; $j++) {
                    // membuat perbandingan untuk menampilkan array
                    if ($j == 2) {
                        echo $dataProduk[$i][1]."<br>"."<b>"."<h4>".$dataProduk[$i][0]."</h4>"."</b>"."<br>".
                        $dataProduk[$i][2]."<br>"."Rp ".$dataProduk[$i][3]."<br>".$dataProduk[$i][4];
                    }
                }
                // membuat perbandingan untuk tombol
                if ($dataProduk[$i][4]==="Stok : Tersedia") {
                    ?>
                    <button class="btn btn-primary mb-2">Order Now</button>
                    <?php
                }else{
                    ?>
                    <button class="btn btn-secondary mb-2">Empty</button>
                    <?php
                }
            ?>
            </div>
            </div>
            <?php
                }
            ?>   
    </div>
</body>
</html>