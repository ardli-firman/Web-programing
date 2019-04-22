<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 2 Web Programming</title>
</head>

<body>
    <p>Nama : Ardli Firman Maulana</p>
    <p>NIM : 17090081</p>
    <p>Kelas : 4B</p>
    <hr>
    <?php
    echo "<h3>Post increment</h3>";
    $a = 5;
    echo "Seharusnya bernilai 5 => " . $a++ . "<br />\n";
    echo "Seharusnya bernilai 6 => " . $a . "<br />\n";

    echo "<h3>Pre increment</h3>";
    $a = 5;
    echo "Seharusnya bernilai 6 => " . ++$a . "<br />\n";
    echo "Seharusnya bernilai 6 => " . $a . "<br />\n";

    echo "<h3>Post decrement</h3>";
    $a = 5;
    echo "Seharusnya bernilai 5 => " . $a-- . "<br />\n";
    echo "Seharusnya bernilai 4 => " . $a . "<br />\n";

    echo "<h3>Pre decrement</h3>";
    $a = 5;
    echo "Seharusnya bernilai 4 => " . --$a . "<br />\n";
    echo "Seharusnya bernilai 4 => " . $a . "<br />\n";
    echo "<br />"
    ?>
    <?php
    $x = 13;
    $y = 22;
    echo $x & $y;
    ?>
    <table border="1" cellpadding="20px" cellspacing="0">
        <thead>
            <th>\</th>
            <th>test</th>
            <th>test</th>
            <th>test</th>
        </thead>
        <tbody>
            <tr>
                <td>test</td>
                <td>test</td>
                <td>test</td>
                <td>test</td>
            </tr>
            <tr>
                <td>test1</td>
                <td>test1</td>
                <td>test1</td>
                <td>test1</td>
            </tr>
        </tbody>
    </table>
</body>

</html>