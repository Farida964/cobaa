<?php 
$nilai1 = ["id" => 1, "NIM" => "01101", "uas" => 84, "uts" => 80, "tugas" => 78, "nialiAkhir" => 80.67];
$nilai2 = ["id" => 2, "NIM" => "01102", "uas" => 50, "uts" => 70, "tugas" => 68, "nilaiAkhir" => 62.67];
$nilai3 = ["id" => 3, "NIM" => "01103", "uas" => 86, "uts" => 60, "tugas" => 70, "nilaiAkhir" => 72.00];
$nilai4 = ["id" => 4, "NIM" => "01104", "uas" => 91, "uts" => 90, "tugas" => 82, "nilaiAkhir" => 87.67];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 01</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 0 auto;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        tr th {
            background-color : rgb(114, 199, 223);
        }
        h2 {
            text-align: center;
        }

    </style>
</head>
<body>
    <h2>Daftar Nilai Mahasiswa</h2>
    <table>
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>UAS</th>
            <th>UTS</th>
            <th>Tugas</th>
            <th>Nilai Akhir</th>
        </tr>
    
        <tr>
        <?php
			foreach($nilai1 as $nilai01) {
				echo "<td>" .$nilai01. "</td>"; 
			}
		?>
        </tr>

        <tr>
        <?php
			foreach($nilai2 as $nilai02) {
				echo "<td>" .$nilai02. "</td>"; 
			}
		?>
        </tr>

        <tr>
        <?php
			foreach($nilai3 as $nilai03) {
				echo "<td>" .$nilai03. "</td>"; 
			}
		?>
        </tr>

        <tr>
        <?php
			foreach($nilai4 as $nilai04) {
				echo "<td>" .$nilai04. "</td>"; 
			}
		?>
        </tr>
       
    </table>
</body>
</html>
