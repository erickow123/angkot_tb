<?php
	$host = "localhost";
	$user = "postgres";
	$pass = "pass";
	$port = "5434";
	$dbname = "angkot";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>