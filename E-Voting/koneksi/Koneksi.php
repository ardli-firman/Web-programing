<?php

$db = mysqli_connect('localhost', 'root', '', 'evoting_uas');

if (!$db) {
    die('Ada kesalahan di database');
}
