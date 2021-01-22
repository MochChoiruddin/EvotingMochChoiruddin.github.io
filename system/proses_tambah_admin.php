<?php
	include "config/dbcon.php";
	//mysql_query("UPDATE students SET status='0' WHERE id_siswa='$id_siswa'");
	mysql_query("INSERT INTO password(`username`,`password`) VALUES ('$_POST[username]','$_POST[password]')") or die(mysql_error());
	echo "<script>alert('Data Admin Berhasil Ditambahkan');window.location='form_data_admin.php'</script>";

?>