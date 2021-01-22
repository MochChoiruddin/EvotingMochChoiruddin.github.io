<?php
	$id	= $_REQUEST['id'];
	include "config/dbcon.php";
	mysql_query("DELETE FROM password WHERE id = '$id'") or die (mysql_error());

echo "<script>alert('Data Admin Berhasil dihapus');window.location='form_data_admin.php'</script>";
?>	