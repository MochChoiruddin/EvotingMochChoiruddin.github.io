<?php
	
	
	include "config/dbcon.php";
	
	$id = 	$_POST['id_kandidat'];
	$name=		$_POST['name'];
	$nickname=	$_POST['nickname'];
	$ttl=	$_POST['ttl'];
	$kelas=		$_POST['kelas'];
	$visi=		$_POST['visi'];
	$misi=		$_POST['misi'];
	
	
	mysql_query("UPDATE contestant SET name='$name',post='1', nickname='$nickname', ttl='$ttl', kelas='$kelas',visi='$visi', misi='$misi'  WHERE id_kandidat='$id'");
	header ("location:daftarcalon.php");
	
	
	
?>