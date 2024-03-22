<?php
    $fruits = [
        [
            "id" => 1,
            "nama" => "Semangka",
            "warna" => "Merah",
            "stok" => 250,
            "harga" => 55.000, 
            "deskripsi" => "Buah semangka merupakan tanaman semusim yang tumbuh merambat hingga mencapai panjang 3-5 meter. Batangnya lunak, bersegi, berambut dan panjangnya mencapai 1,5-5 meter. Daun semangka berseling, bertangkai, helai daunnya lebar dan berbulu, menjari, dengan ujungnya runcing."
        ],
        [
            "id" => 2,
            "nama" => "Kurma",
            "warna" => "Coklat",
            "stok" => 2000,
            "harga" => 15.000, 
            "deskripsi" => "Kurma, (Arab: نخل , Nakhla; bahasa Latin: Phoenix dactylifera) adalah tanaman palma (Arecaceae) dalam genus Phoenix, buahnya dapat dimakan. Walaupun tempat asalnya tidak diketahui karena telah sejak lama dibudidayakan, kemungkinan tanaman ini berasal dari tanah sekitar Teluk Persia."
        ],
        [
            "id" => 3,
            "nama" => "Jambu biji",
            "warna" => "Merah muda",
            "stok" => 200,
            "harga" => 18.000, 
            "deskripsi" => "Jambu biji merupakan tumbuhan perdu dengan tinggi 5-10 m, batang berkayu, kulit batang licin, mengelupas, bercabang, dan berwarna cokelat. Merupakan daun tunggal, berbentuk bulat telur, ujung tumpul, pangkal membulat, tepi rata berhadapan, petulangan daun menyirip berwarna hijau kekuningan."
        ],
        [
            "id" => 4,
            "nama" => "Pepaya",
            "warna" => "Orange",
            "stok" => 300,
            "harga" => 12.000, 
            "deskripsi" => "Pepaya merupakan tanaman asli Amerika tropis dan sekarang tersebar luas di seluruh daerah tropik dan subtropik di seluruh dunia. Pepaya merupakan tanaman berbatang tunggal dan tumbuh tegak. Batang tidak berkayu, silindris, berongga dan berwarna putih kehijauan."
        ],
        [
            "id" => 5,
            "nama" => "Pir",
            "warna" => "Putih",
            "stok" => 300,
            "harga" => 15.000,
            "deskripsi" => "Pir (bahasa Inggris:pear) adalah sebutan untuk pohon dari genus Pyrus dan buah yang dihasilkan. Beberapa spesies pohon pir menghasilkan buah yang enak dimakan karena mengandung banyak air, masir dan manis."
        ]
    ]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Array Table Buah</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Warna</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($fruits as $fruit){
                 echo "<tr>";
                 echo "<td>" . $fruit["id"];
                 echo "<td>" . $fruit["nama"];
                 echo "<td>" . $fruit["warna"]; 
                 echo "<td>" . $fruit["stok"];
                 echo "<td>" . $fruit["harga"];
                 echo "<td>" . $fruit["deskripsi"];                        
            } 
            ?>                
            </tbody>
        </table>
    </div>
</body>
</html>