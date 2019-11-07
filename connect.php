<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "erick12345";
	$port = "5432";
	$dbname = "tb_angkot";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>