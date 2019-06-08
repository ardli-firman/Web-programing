<?php

function fibonacci($f)
{
	if ($f==0) {
		return 0;
	}else if ($f==1) {
		return 1;
	}else{
		return fibonacci($f-1)+fibonacci($f-2);
	}
}

$j = 0;
$batas = 10;
for ($i=1; $i <= $batas; $i++) { 
	echo "Fibonacci ke - ".$i." : ". fibonacci($j) ."<br>";
	$j++;
}