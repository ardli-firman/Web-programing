<?php

$filename = 'newfile.txt';
$file = fopen($filename, 'w');
if ($file == false) {
	echo 'error in opening file';
	exit();
}
fwrite($file, "This is a simple test\n");
fclose($file);

if (file_exists($filename)) {
	$filesize = filesize($filename);
	$msg = "File created with name $filename";
	$msg .= " containing $filesize bytes";
	echo $msg;
}else{
	echo "File $filename does not exist";
}

// File created with name newfile.txt containing 22 bytes, file telah terbuat dengan nama newfile.txt didalamnya terdapat kata This is a simpe test. Fungsi fopen dengan mode w artinya write kemudian menjalankan fungsi fwrite untuk menambahkan kata.