<?php require_once 'function_file.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Baca tulis file</title>
</head>
<body>
	<p>Buat file dengan nama xD.txt dengan isi 'ini adalah tulisan'</p>
	<?php tulis('xD.txt','ini adalah tulisan');?>
	<p>Baca file xD.txt : </p>
	<?php baca('xD.txt');?>
</body>
</html>