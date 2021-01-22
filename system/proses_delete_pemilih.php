<?php
	$id	= $_REQUEST['id_siswa'];
	include "config/dbcon.php";
	mysql_query("DELETE FROM students WHERE id_siswa = '$id'") or die (mysql_error());

echo "<script>alert('Calon Pemilih Berhasil dihapus');window.location='databelummemilih.php'</script>";
?>	