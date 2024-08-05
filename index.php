<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   $nis = "2233260";
   $nama = "Mikasa Ackerman";
   $alamat = "Distrik Shiganshina";
   $telepon = "08046721344";
   $email = "mikasa&eren@gmail.com";
   
   echo "<h1>Data pribadi</h1>";
   echo "Nis : $nis<br>";
   echo "Nama : $nama<br>";
   echo "Alamat : $alamat<br>";
   echo "Telepon : $telepon<br>";
   echo "Email : $email<br>";
?> 

<form action="index.php" method="GET">
    Nilaitugas: <input type="text" name="tugas"><br>
    Nilaiuts: <input type="text" name="uts"><br>
    Nilaiuas: <input type="text" name="uas"><br>
    <input type="submit">
</form>

<?php
// Data Siswa
$nis = "2233260";
$nama = "Muhamad Bogi Abiputro";

//Nilai
$nilai_tugas = $_GET["tugas"];
$nilai_uts = $_GET["uts"];
$nilai_uas = $_GET["uas"];

//Menghitung Nilai akhir
$nilai_akhir = ($nilai_tugas * 20 / 100) +
               ($nilai_uts * 35 / 100) +
               ($nilai_uas * 45 / 100);

//Menentukan Huruf
$huruf = '';
if ($nilai_akhir >= 85) {
    $huruf = 'A';
} elseif ($nilai_akhir >= 68.5){
    $huruf = 'B';
} elseif ($nilai_akhir >= 58.5){
    $huruf = 'C';
} elseif ($nilai_akhir >= 48){
    $huruf = 'D';
} else {
    $huruf = 'E';
}

echo "<h1>Hasil Perhitungan Nilai</h1>";
   echo "Nis : $nis<br>";
   echo "Nama : $nama<br>";
   echo "N.Tugas : $nilai_tugas<br>";
   echo "N.UTS: $nilai_uts<br>";
   echo "N.UAS : $nilai_uas<br>";
   echo "N.Akhir : $nilai_akhir<br>";
   echo "N.Huruf : $huruf<br>";
   ?>
</body>
</html>