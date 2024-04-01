<?php
$namaproduk1 = "Crewneck Fantasy";
$deskripsi = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
dignissimos accusantium amet similique velit iste.";
$harga1 = "IDR 209.000";
$namaproduk2 = "Jacket RRQ RESURGENCE 2023";
$harga2 = "IDR 599.000";
$namaproduk3 = "T-Shirt Colossal Armin";
$harga3 = "IDR 161.000";
$namaproduk4 = "Jacket Coach Jaw Titan";
$harga4 = "IDR 389.000";
$namaproduk5 = "Syal Comrade";
$harga5 = "IDR 104.000";
$namaproduk6 = "T-Shirt RRQ Levi";
$harga6 = "IDR 161.000";
$namaproduk7 = "Waistbag Nox";
$harga7 = "IDR 174.000";
$namaproduk8 = "Finesse Hat";
$harga8 = "IDR 139.000";
$namaproduk9 = "Lanyard Shaft";
$harga9 = "IDR 41.000";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="src/style/style.css">
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center">RRQ Store</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

        <div class="col">
                <div class="card">
                    <img src="src/img/merch1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-bold"><?php echo $namaproduk1 ?></h5>
                        <p class="card-text py-3"><?php echo $deskripsi ?></p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3><?php echo $harga1 ?></h3>
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="src/img/merch2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-bold"><?php echo $namaproduk2 ?></h5>
                        <p class="card-text py-3"><?php echo $deskripsi?></p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3><?php echo $harga2?></h3>
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="src/img/merch3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-bold"><?php echo $namaproduk3?></h5>
                        <p class="card-text py-3"><?php echo $deskripsi?></p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3><?php echo $harga3?></h3>
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="src/img/merch4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-bold"><?php echo $namaproduk4?></h5>
                        <p class="card-text py-3"><?php echo $deskripsi?></p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3><?php echo $harga4?></h3>
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="src/img/merch5.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-bold"><?php echo $namaproduk5?></h5>
                        <p class="card-text py-3"><?php echo $deskripsi?></p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3><?php echo $harga5?></h3>
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="src/img/merch6.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-bold"><?php echo $namaproduk6 ?></h5>
                        <p class="card-text py-3"><?php echo $deskripsi?></p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <h3><?php echo $harga6?></h3>
                        <button class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
            </div>

            <div class="col">
              <div class="card">
                  <img src="src/img/merch7.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title text-bold"><?php echo $namaproduk7?></h5>
                      <p class="card-text py-3"><?php echo $deskripsi?></p>
                  </div>
                  <div class="mb-5 d-flex justify-content-around">
                      <h3><?php echo $harga7?></h3>
                      <button class="btn btn-primary">Buy Now</button>
                  </div>
              </div>
            </div>

          <div class="col">
            <div class="card">
                <img src="src/img/merch8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-bold"><?php echo $namaproduk8?></h5>
                    <p class="card-text py-3"><?php echo $deskripsi?></p>
                </div>
                <div class="mb-5 d-flex justify-content-around">
                    <h3><?php echo $harga8?></h3>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
          </div>

          <div class="col">
            <div class="card">
                <img src="src/img/merch9.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-bold"><?php echo $namaproduk9?></h5>
                    <p class="card-text py-3"><?php echo $deskripsi?></p>
                </div>
                <div class="mb-5 d-flex justify-content-around">
                    <h3><?php echo $harga9?></h3>
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
          </div>


        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>