<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekap Nilai</title>
</head>
sena.wijayanto@gmail.com

<body>
    <?php
    echo "Nilai Uts Sebelum pengurutan<br><br>";
    $mahasiswa = [
        "ardli firman" => 80,
        "M Wijaya" => 90,
        "Riza" => 80,
        "Ilham" => 90,
        "Abid" => 78,
        "Rizky" => 60
    ];
    foreach ($mahasiswa as $key => $value) {
        echo $key . " = " . $value . "<br>";
    }
    rsort($mahasiswa);
    echo "<br>Nilai Uts Setelah pengurutan<br><br>";
    foreach ($mahasiswa as $key => $value) {
        echo $value . "<br>";
    }
    ?>
</body>

</html>