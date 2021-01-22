<?php
	include "config/dbcon.php";
	mysql_query("DELETE FROM students") or die (mysql_error());

echo "<script>alert('Data Berhasil dihapus');window.location='databelummemilih.php'</script>";
?>	

