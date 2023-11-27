<?php
$server = "localhost";
$user = "root";
$password = "";
$db_name = "db_11rpl4_pribadi";
$conn = mysqli_connect($server, $user, $password, $db_neme);
if (!$conn) {
die("Gagal terhubung dengan database: " . mysqli_connect_error());
}