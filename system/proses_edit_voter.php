<?php
	
	
	include "config/dbcon.php";
	
	$id = $_POST['id'];
	$matric_no=$_POST['matric_no'];
	$password=$_POST['password'];
	$kelas=$_POST['kelas'];
	
	
	mysql_query("UPDATE students SET matric_no='$matric_no', password='$password', kelas='$kelas' WHERE id='$id'");
	header ("location:all_voters.php");
	
	
	
?>