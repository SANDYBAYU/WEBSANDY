<?php
// Data Biodata
$nama = "Sandy Bayu Pangestu";
$kelas = "TI22A";
$npm = "22313017";

// Menampilkan Biodata
echo "<!DOCTYPE html>
<html lang='id'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Tampilan Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }
        h2 {
            text-align: center;
        }
        .biodata {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #007BFF;
            border-radius: 5px;
            background-color: #e7f3ff;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>Biodata</h2>
        <div class='biodata'>
            <p><strong>Nama:</strong> $nama</p>
            <p><strong>Kelas:</strong> $kelas</p>
            <p><strong>NPM:</strong> $npm</p>
        </div>
    </div>
</body>
</html>";
?>
