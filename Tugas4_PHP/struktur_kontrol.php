<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <=100){
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90){
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik <80){
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70){
    echo "Nilai huruf: D";
}

echo "<hr>";

$jarakSaatini = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatini < $jarakTarget){
    $jarakSaatini += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.<hr>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++){
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah <hr>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor){
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor <hr>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai){
    if ($nilai < 60){
        echo "Nilai: $nilai (Tidak Lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}

echo "<hr>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($nilaiSiswa);

$nilaiDisaring = array_slice($nilaiSiswa, 2, 6);

$totalNilai = array_sum ($nilaiDisaring);
$rataRata = $totalNilai / count($nilaiDisaring);

echo "Daftar Nilai Awal: " . implode(", ", [85, 92, 78, 64, 90, 75, 88, 79, 70, 96]) . "<br>";
echo "Nilai Setelah Mengabaikan 2 Tertinggi & 2 Terendah: " . implode(", ", $nilaiDisaring) . "<br>";
echo "Total Nilai: {$totalNilai} <br>";
echo "Rata-rata: " . number_format($rataRata, 2);

echo "<hr>";

$hargaAwal = 120000;
$batasDiskon = 100000;
$persenDiskon = 20;

if ($hargaAwal > $batasDiskon){
    $jumlahDiskon = ($persenDiskon / 100) * $hargaAwal;
    $hargaAkhir = $hargaAwal - $jumlahDiskon;
} else {
    $hargaAkhir = $hargaAwal;
}

echo "Harga Barang: Rp " . number_format($hargaAwal, 0, ',', '.') . "<br>";
echo "Diskon: {$persenDiskon}% <br>";
echo "Harga yang Harus Dibayar: Rp " . number_format($hargaAkhir, 0, ',', '.');

echo "<hr>";

$totalPoin = 550;

$hadiahTambahan = ($totalPoin > 500) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: {$totalPoin} <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? {$hadiahTambahan}";
?>