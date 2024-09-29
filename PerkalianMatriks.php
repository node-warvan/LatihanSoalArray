<!DOCTYPE html>
<html>
<head>
    <title>Perkalian Matriks</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Hasil Perkalian Matriks A (2x3) dengan Matriks B (3x3)</h2>
<table>
    <tr>
        <th colspan="3">Matriks Hasil</th>
    </tr>

    <?php
    // Matriks A (2x3)
    $A = array(
        array(1, 2, 3),
        array(4, 5, 6)
    );

    // Matriks B (3x3)
    $B = array(
        array(7, 8, 9),
        array(10, 11, 12),
        array(13, 14, 15)
    );

    // Inisialisasi matriks hasil
    $hasil = array();

    // Perkalian matriks
    for ($i = 0; $i < 2; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 3; $j++) {
            $hasil[$i][$j] = 0;
            for ($k = 0; $k < 3; $k++) {
                $hasil[$i][$j] += $A[$i][$k] * $B[$k][$j];
            }
            echo "<td>" . $hasil[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>
