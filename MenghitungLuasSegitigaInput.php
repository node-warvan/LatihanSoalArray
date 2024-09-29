<?php
// Start session untuk menyimpan input sementara
session_start();

// Inisialisasi array untuk menyimpan data segitiga
if (!isset($_SESSION['segitigaData'])) {
    $_SESSION['segitigaData'] = [];
}

// Jika form disubmit
if (isset($_POST['submit'])) {
    $alas = (float) $_POST['alas'];
    $tinggi = (float) $_POST['tinggi'];

    if ($alas > 0 && $tinggi > 0) {
        // Hitung luas segitiga
        $luas = ($alas * $tinggi) / 2;

        // Simpan data ke dalam session array
        $_SESSION['segitigaData'][] = [
            'alas' => $alas,
            'tinggi' => $tinggi,
            'luas' => $luas
        ];
    }

    // Batasi jumlah input menjadi maksimal 5 kali
    if (count($_SESSION['segitigaData']) > 5) {
        array_shift($_SESSION['segitigaData']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Segitiga</title>
    <style>
        body { font-family: Arial, sans-serif; }
        form { margin-bottom: 20px; }
        label, input { display: block; margin: 5px 0; }
        button { margin-top: 10px; }
        table { margin-top: 20px; width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 8px; text-align: center; }
    </style>
</head>
<body>

<h1>Menghitung Luas Segitiga (5x Input)</h1>

<!-- Form untuk input alas dan tinggi -->
<form action="MenghitungLuasSegitigaInput.php" method="POST">
    <label for="alas">Alas (cm):</label>
    <input type="number" name="alas" id="alas" required>

    <label for="tinggi">Tinggi (cm):</label>
    <input type="number" name="tinggi" id="tinggi" required>

    <button type="submit" name="submit">Hitung Luas</button>
</form>

<?php if (!empty($_SESSION['segitigaData'])): ?>
    <h2>Hasil Perhitungan:</h2>
    <table>
        <tr>
            <th>No</th>
            <th>Alas (cm)</th>
            <th>Tinggi (cm)</th>
            <th>Luas (cm²)</th>
        </tr>
        <!-- Loop untuk menampilkan hasil perhitungan -->
        <?php foreach ($_SESSION['segitigaData'] as $index => $data): ?>
        <tr>
            <td><?= $index + 1 ?></td>
            <td><?= $data['alas'] ?></td>
            <td><?= $data['tinggi'] ?></td>
            <td><?= number_format($data['luas'], 2) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>

</body>
</html>
