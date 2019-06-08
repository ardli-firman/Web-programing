<?php

function mySum($numX,$numY)
{
	$total = $numX + $numY;
	return $total;	
}

$myNumber = 0;
echo "Sebelum fungsi dijalankan, myNumber = ". $myNumber . "<br />";
$myNumber = mySum(3,4);
echo "Sebelum fungsi dijalankan, myNumber = ". $myNumber . "<br />";

// Sebelum fungsi di panggil variable $myNumber bernilai 0. Setelah fungsi mySum dipanggil dengan menginput 2 parameter yang akan dijumlahkan, maka akan mengembalikan total penjumlahan, yang kemudian disimpan didalam variable myNumber yang hasilnya 7