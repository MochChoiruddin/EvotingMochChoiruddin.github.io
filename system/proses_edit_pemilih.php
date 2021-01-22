<?php
	include "config/dbcon.php";
	//mysql_query("UPDATE students SET status='0' WHERE id_siswa='$id_siswa'");
	mysql_query("UPDATE students SET matric_no='$_POST[matric_no]', password='$_POST[password]', kelas='$_POST[kelas]' WHERE id_siswa='$_POST[id_siswa]'");
	
	header ("location:databelummemilih.php");
?>