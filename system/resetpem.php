<?php
	include "config/dbcon.php";
	$result = mysql_query("SELECT * FROM students WHERE id_siswa='$_GET[id]'");
	$r = mysql_fetch_array ($result);
	$status=$r['status'];
	echo $status='0'
?>