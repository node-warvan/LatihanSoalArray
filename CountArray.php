<!DOCTYPE html>
<html>
<head>
    <title>Fungsi Count pada Array</title>
</head>
<body>

<?php
// Inisialisasi array buah
$buah = array("Apel", "Mangga", "Jeruk", "Pisang", "Semangka");

// Menghitung jumlah elemen array
$jml_buah = count($buah);

// Menampilkan jumlah elemen
echo "<h2>Jumlah Buah dalam Array</h2>";
echo "<p>Jumlah buah: " . $jml_buah . "</p>";

// Menampilkan daftar buah
echo "<h3>Daftar Buah:</h3>";
echo "<ul>";
for ($i = 0; $i < $jml_buah; $i++) {
    echo "<li>" . $buah[$i] . "</li>";
}
echo "</ul>";
?>

</body>
</html>
