<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Minggu ke 9</title>
</head>
<body>
	<?php
		$dbh = new PDO('mysql:host=localhost;dbname=dosen','root','');
		$test = $dbh->prepare('SELECT * FROM data_dosen');
		$test->execute();
		var_dump($test->fetch());
	?>
</body>
</html>