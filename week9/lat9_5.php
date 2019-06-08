<?php

include 'function_looping1.php';
echo "Hasil looping : <br>";
looping(1,10);

//fungsi looping dari file function_looping.php akan mengembalikan hasil looping. Setelah di ganti file dengan function_looping1.php akan terjadi error namun tampil juga tulisan Hasil looping : , karena dengan include, file ini akan tetap di eksekusi sepenuhnya walaupun includenya error, kebalikan dari require.