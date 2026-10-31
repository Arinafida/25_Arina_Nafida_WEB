<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$penugasanPenjumlahan = $a += $b;
$penugasanPengurangan = $a -= $b;
$penugasanPerkalian = $a *= $b;
$penugasanPembagian = $a /= $b;
$penugasanSisaBagi = $a %= $b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Penjumlahan: $hasilTambah <br>";
echo "Hasil Pengurangan: $hasilKurang <br>";
echo "Hasil Perkalian: $hasilKali <br>";
echo "Hasil Pembagian: $hasilBagi <br>";
echo "Sisa Bagi: $sisaBagi <br>";
echo "Hasil Pangkat: $pangkat";

echo "<hr>";

echo "Hasil Sama: $hasilSama <br>";
echo "Hasil Tidak Sama: $hasilTidakSama <br>";
echo "Hasil Lebih Kecil: $hasilLebihKecil <br>";
echo "Hasil Lebih Besar: $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil Sama: $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar Sama: $hasilLebihBesarSama";

echo "<hr>";

echo "Hasil And: $hasilAnd <br>";
echo "Hasil Or: $hasilOr <br>";
echo "Hasil Not A: $hasilNotA <br>";
var_dump ($hasilNotB);

echo "<hr>";

echo "Hasil Penugasan Dengan Penjumlahan: $penugasanPenjumlahan <br>";
echo "Hasil Penugasan Dengan Pengurangan: $penugasanPengurangan <br>";
echo "Hasil Penugasan Dengan Perkalian: $penugasanPerkalian <br>";
echo "Hasil Penugasan Dengan Pembagian: $penugasanPembagian <br>";
echo "Hasil Penugasan Dengan Sisa Bagi: $penugasanSisaBagi";

echo "<hr>";

echo "Hasil Identik: $hasilIdentik <br>";
echo "Hasil Tidak Identik: $hasilTidakIdentik";
?>