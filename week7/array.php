<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h2>Demo array</h2>
    <h3>Array Berindeks</h3>
    <?php
    $mobil[0] = "Toyota";
    $mobil[1] = "Honda";
    $mobil[2] = "Suzuki";
    $mobil[3] = "Daihatsu";
    $mobil[4] = "Mitsubushi";

    echo "Beberapa merek mobil di dunia : <br /> ";
    foreach ($mobil as $key => $value) {
        echo $value . '<br />';
    }

    $suku = ['Minang', 'Dayak', 'Jawa', 'Batak'];
    echo "<br />Beberapa suku di indonesia<br />";
    foreach ($suku as $key => $value) {
        echo $value . '<br />';
    }

    sort($suku);
    echo "<br />Beberapa suku di indonesia<br />";
    foreach ($suku as $key => $value) {
        echo $value . '<br />';
    }
    $c = array_merge($suku, $mobil);
    var_dump($c);

    echo '<br>';
    ?>
    <h3>Array assosiatif</h3>
    <?php
    $pegawai = [
        'Dirut' => 'Ardli',
        'Manager' => 'Firman',
        'Marketing' => 'Maulana'
    ];

    foreach ($pegawai as $jabatan => $value) {
        echo $jabatan . ' : ' . $value . '<br>';
    }
    ?>
    <h3>Modifikasi array</h3>
    <?php
    $nilai = [12, 32];
    echo 'Nalai awal <br>';
    echo $nilai[0] . '<br>';
    echo $nilai[1] . '<br>';
    $nilai[0] = 3;
    echo 'Nalai ubah <br>';
    echo $nilai[0] . '<br>';
    echo $nilai[1] . '<br>';
    ?>
</body>

</html>