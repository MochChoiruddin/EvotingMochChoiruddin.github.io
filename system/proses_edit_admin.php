<?php
	include "config/dbcon.php";
	//mysql_query("UPDATE students SET status='0' WHERE id_siswa='$id_siswa'");
	mysql_query("UPDATE password SET username='$_POST[username]', password='$_POST[password]' WHERE id='$_POST[id]'");
	
	header ("location:form_data_admin.php");
?>