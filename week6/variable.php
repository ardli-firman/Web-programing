<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable</title>
</head>

<body>
    <h2>Demo variable</h2>
    <?php
    $var = "Hello World";
    echo $var;

    $int = 2;
    $float = 3.14;
    $arr = ['array 1', 1, true, ['array in array']];
    $str = 'Ini variable String';
    $bool = true . '&' . false;
    echo '<br>';
    echo 'ini integer ' . $int;
    echo '<br>';
    echo 'ini float ' . $float;
    echo '<br>';
    echo 'ini String ' . $str;
    echo '<br>';
    echo 'ini boolean ' . $bool;
    echo '<br>';
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            foreach ($value as $key => $isi) {
                echo 'ini array di array : ' . $isi . '<br>';
            }
        } else {
            echo $value . '<br>';
        }
    }
    ?>
</body>


</html> 