<?php
$hostname = 'localhost'; // Nama Server
$username = 'id13057621_root'; // User Server
$password = 'anashaq'; // Password Server
$database = 'id13057621_ukki_upn'; // Nama Database

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
	die ('Gagal terhubung dengan MySQL: ' . mysqli_connect_error());	
}
?>