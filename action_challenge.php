<?php
$nama = $_POST["nama_user"] ?? 'undefined';
$angka1 = (int)$_POST["angka1"] ?? 0;
$angka2 = (int)$_POST["angka2"] ?? 0;

$tambah = $angka1 + $angka2;
$kurang = $angka1 - $angka2;
$kali = $angka1 * $angka2;
$bagi = $angka1 / $angka2;
$mod = $angka1 % $angka2;

echo "<h2>Perhitungan Aritmatika</h2>";
echo "<br>";
echo "nama: $nama<br>";
echo "$angka1 + $angka2 = $tambah<br>";
echo "$angka1 - $angka2 = $kurang<br>";
echo "$angka1 * $angka2 = $kali<br>";
echo "$angka1 / $angka2 = $bagi<br>";
echo "$angka1 % $angka2 = $mod<br>";
echo "<br>";