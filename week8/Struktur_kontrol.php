<!DOCTYPE html>
<html>
<head>
	<title>Struktur kontrol</title>
</head>
<body>
<h2>Pemilihan</h2>
<h3>demo if</h3>
<?php
	$a = 5;
	$b = 7;

	echo "nilai a = \$a</br>";
	echo "nilai b = \$b</br>";

	if ($a > $b) {
		echo 'Variable $a lebih besar dari $b';
	}

	if ($a < $b) {
		echo 'Variable $a lebih kecil dari $b';
	}

	if ($a == $b) {
		echo 'Nilai variable $a sama dengan $b';
	}

?>

<h3>Demo if-else</h3>
<?php
	$c = 9;
	$d = 9;

	if ($c > $d) {
		$res = $c - $d;
	}else{
		$res = $d - $c;
	}

	echo 'Selisih = '.$res;
?>

<h3>Latihan menentukan diskon syarat diberikan ke pembeli apabila total belanja melebihi atau sama dengan 100.000 . Diskon 10% dari total belanja. Tampilkan total belanja, diskon dan total yang haruis dibayarkan oleh pembeli</h3>

<?php
	$totalBelanja = 10000;
	if ($totalBelanja >= 100000) {
		$hasilDiskon = $totalBelanja * 0.1;
		$yangHarusDibayar = $totalBelanja - $hasilDiskon;

		echo 'Total Belanja = Rp.' . $totalBelanja . '</br>';
		echo 'Diskon yang diterima = Rp.'. $hasilDiskon . '</br>';
		echo 'Yang harus dibayar = Rp.' . $yangHarusDibayar . '</br>';
	}else{
		echo 'Anda tidak mendapatkan diskon :( <br>';
		echo 'Total Belanja = Rp.' . $totalBelanja . '</br>';
		echo 'Yang harus dibayar = Rp.'. $totalBelanja;
	}
?>

<?php ?>
</body>
</html>