<?php
	
	
	include "config/dbcon.php";
	
	$id = 	$_POST['id_kandidat'];
	$id_siswa = 	$_POST['id_siswa'];
	$name=		$_POST['name'];
	$jumlah_suara=	$_POST['jumlah_suara'];
	$status=	$_POST['status'];
	
	
	mysql_query("UPDATE contestant SET name='$name', jumlah_suara='$jumlah_suara', post='0'  WHERE id_kandidat='$id'");
	
	mysql_query("DELETE FROM data_pemilihan WHERE id_kandidat='$id'");
	
	header ("location:reset_hasil.php");
	
	
	
?>