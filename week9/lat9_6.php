<?php

$filename = 'file.txt';
$file = fopen($filename, 'r');
if ($file == false) {
	echo 'error in opening file';
	exit();
}

$filesize = filesize($filename);
$filetext = fread($file, $filesize);

fclose($file);

echo "file size : $filesize bytes";
echo "<pre>$filetext</pre>";


//Error in opening file, karena file dengan nama file.txt tidak ada.