<?php

function baca($fileName)
{
	if (cekFile($fileName)) {
		$file = fopen($fileName, 'r');
		$fileSize = filesize($fileName);
		echo fread($file, $fileSize);
		fclose($file);
		die;
	}
}

function tulis($fileName,$tulisan){
	$file = fopen($fileName, 'w');
	fwrite($file, $tulisan);
	fclose($file);
	if (cekFile($fileName)) {
		return 'Berhasil';
		die;
	}
	return 'Gagal';
}

function cekFile($fileName)
{
	if (!file_exists($fileName)) {
		echo " File tidak ada ";
		die;
	}
	return true;
}