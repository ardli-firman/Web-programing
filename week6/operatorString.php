<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operator String</title>
</head>

<body>
    <h2>Demo String</h2>
    <?php
    $nama = "'Ardli Firman'";
    $nama .= ' ';
    $nama .=  "Berjumlah " . str_word_count($nama) . " Kata";
    echo $nama . "<br>";
    ?>
    <h2>Demo Aritmatika</h2>
    <?php
    echo '$a = ' . $a = 13;
    echo '<br>';
    echo '$b = ' . $b = 3;
    echo '<br>';
    echo '$a + $b = ' . ($a + $b);
    echo '<br>';
    echo '$a - $b = ' . ($a - $b);
    echo '<br>';
    echo '$a * $b = ' . ($a * $b);
    echo '<br>';
    echo '$a / $b = ' . ($a / $b);
    echo '<br>';
    echo '$a % $b = ' . ($a % $b);
    ?>

    <h2>Demo Operator Assignment</h2>
    <?php
    $bil = 100;

    echo "isi variable bil = {$bil} <br>";
    $bil += 2;
    echo "isi variable bil + 2 = {$bil} <br>";
    $bil -= 2;
    echo "isi variable bil - 2 = {$bil} <br>";
    $bil *= 2;
    echo "isi variable bil * 2 = {$bil} <br>";
    $bil /= 2;
    echo "isi variable bil / 2 = {$bil} <br>";
    $bil %= 30;
    echo "isi variable bil % 30 = {$bil} <br>";
    ?>

    <h2>Demo Operator relasional </h2>
    <?php
    $c = 5;
    $d = 10;
    echo '$a = ' . $a;
    echo '<br>';
    echo '$b = ' . $b;
    echo '<br>';
    echo '$a == $b : ' . ($a == $b);
    echo '<br>';
    echo '$a != $b : ' . ($a != $b);
    echo '<br>';
    echo '$a <= $b : ' . ($a <= $b);
    echo '<br>';
    echo '$a >= $b : ' . ($a >= $b);
    echo '<br>';
    echo '$a < $b : ' . ($a < $b);
    echo '<br>';
    echo '$a > $b : ' . ($a >  $b);
    echo '<br>';
    echo '<br>';
    echo '$x = ' . $x = 100;
    echo '<br>';
    echo '$y = ' . $y = '100';
    echo '<br>';
    echo '$x == $y : ' . ($x == $y);
    echo '<br>';
    echo '$x === $y : ' . ($x === $y);

    ?>

</body>



</html> 