<?php
	include "config/dbcon.php";

 	// loop data field
 	foreach ($_POST['matric_no'] as $key=>$val) {
	$id = (int) $_POST['matric_no'][$key];
	$name = $_POST['status'][$key];
	$address = $_POST['kelas'][$key];

	// udpate data
	$sql = 'UPDATE students SET';
	$sql .= ' status="'.$name.'"';
	$sql .= ' WHERE matric_no='.$id;
	mysql_query($sql) or die ($sql);
 }
	
	header ("location:datatelahmemilih.php");
?>