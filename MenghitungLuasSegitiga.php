<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Luas Segitiga</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
        th, td {
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Menghitung Luas Segitiga</h2>
<table>
    <tr>
        <th>No</th>
        <th>Alas</th>
        <th>Tinggi</th>
        <th>Luas</th>
    </tr>
    <?php
    // Inisialisasi array alas dan tinggi
    $alas = array(10, 12, 14, 16, 18);
    $tinggi = array(5, 6, 7, 8, 9);

    // Menghitung dan menampilkan luas segitiga
    for ($i = 0; $i < 5; $i++) {
        $luas = 0.5 * $alas[$i] * $tinggi[$i];
        echo "<tr><td>" . ($i + 1) . "</td><td>" . $alas[$i] . "</td><td>" . $tinggi[$i] . "</td><td>" . $luas . "</td></tr>";
    }
    ?>
</table>

</body>
</html>
