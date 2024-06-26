<?php
  /* PHP Array

    Membuat array kosong
    1. $fruits = array();
    2. $fruits = [];

    Membuat array beserta isinya
    1. $fruits = array("Pepaya", "Mangga", "Delima", "Kiwi");
    2. $fruits = ["Pepaya", "Mangga", "Delima", "Kiwi"];

    Menampilkan isi array
    1. var_dump($fruits);
    2. print_r($fruits);

    # Simple array
    $fruits = ["Pisang", "Melon", "Berry"];

    # Associative array
    $fruits = [
      "Pisang" => "Kuning", 
      "Melon" => "Hijau", 
      "Berry" => "Merah"
    ];

    # Multidimensional array
    $fruits = [
      ["name" => "Pisang", "color" => "Kuning", "stock" => 20, "price" => 15000, "description" => "Pisang dengan rasa manis"],
      ["name" => "Melon", "color" => "Hijau", "stock" => 15, "price" => 28000, "description" => "Buah berwarna hijau yang segar"],
      ["name" => "Berry", "color" => "Merah", "stock" => 8, "price" => 12000, "description" => "Buah kecil dengan biji yang bisa dimakan"]
    ];
  */

  

?>

// Simple array
$fruits = ["Pisang", "Melon", "Berry"];

foreach ($fruits as $fruit) {
  echo $fruit;
  echo '<br>';
}

/* Output:
Pisang
Melon
Berry
*/




// Associative array
$a_fruits = [
  "Pisang" => "Kuning", 
  "Melon" => "Hijau", 
  "Berry" => "Merah"
];

foreach ($a_fruits as $fruit) {
  echo $fruit;
  echo '<br>';
}

/* Output:
Kuning
Hijau
Merah
*/



// Multidimensional array
<?php
$m_fruits = [
  ["name" => "Semangka", "warna" => "Merah", "stock" => 200, "price" => 30000, "description" => "semangka adalah buah yang mengandung banyak serat air didalamnya"],
  ["name" => "Durian", "warna" => "Kuning", "stock" => 150, "price" => 40000, "description" => "Buah durian yang memiliki bau yang menyengat dan sangat disukai banyak orang"],
  ["name" => "Rambutan", "warna" => "Merah", "stock" => 900, "price" => 20000, "description" => "Buah Rambutan yang memiliki banyak bulu diluar buahnya tetapi memiliki rasayang manis"], 
  ["name" => "Manggis", "warna" => "Putih", "stock" => 800, "price" => 12000, "description" => "Buah kecil dengan kualitas rasa yang enak dan menyegarkan badan"]
];


foreach ($m_fruits as $fruit) {
  echo '<li>'.$fruit["name"].'</li>';
  echo '<li>'.$fruit["warna"].'</li>';
  echo '<li>'.$fruit["stock"].'</li>';
  echo '<li>'.$fruit["price"].'</li>';
  echo '<br>';
}
?>

