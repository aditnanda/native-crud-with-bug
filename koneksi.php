<?php

$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'db_native';

$koneksi = mysqli_connect($host,$user,$pass,$db) or die("GAGAL");

$base_url = '127.0.0.1/phpnative';