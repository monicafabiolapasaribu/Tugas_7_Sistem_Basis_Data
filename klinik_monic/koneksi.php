<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "klinik_312010083";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
	echo "koneksi ke server gagal.";
	die();
} else echo "koneksi berhasil";
?>