<!DOCTYPE html>
<html>
<head>
    <title>Array 2 Dimensi</title>
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

<h2>Daftar Nilai Siswa</h2>
<table>
    <tr>
        <th>Mata Pelajaran</th>
        <th>Nilai</th>
    </tr>

    <?php
    // Inisialisasi array 2 dimensi
    $nilai = array(
        array("Matematika", 80),
        array("Fisika", 85),
        array("Kimia", 90),
        array("Biologi", 88),
        array("Bahasa Inggris", 92)
    );

    // Menampilkan data array
    for ($i = 0; $i < count($nilai); $i++) {
        echo "<tr><td>" . $nilai[$i][0] . "</td><td>" . $nilai[$i][1] . "</td></tr>";
    }
    ?>

</table>

</body>
</html>
