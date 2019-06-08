<?php

function faktorial($m)
{
	if ($m == 0) {
		return 1;
	}else{
		return $m * faktorial($m -1);
	}
}

echo "1! = ". faktorial(1) ."<br />";
echo "4! = ". faktorial(4) ."<br />";

//Fungsi faktorial merupakan fungsi rekursif yang mengembalikan nilai perkalian dengan nilai yang sebelumnya yang sudah di kurangi 1 sampai fungsi faktorial di dalam fungsi faktorial tidak terpanggil karena nilai sebelumnya yang dikurangi sudah menjadi 0.