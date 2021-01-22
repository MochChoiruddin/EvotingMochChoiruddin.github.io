<?php 
require ("config/dbcon.php");
$check = mysql_query("SELECT * FROM students WHERE matric_no='$_POST[matric_no]' AND password='$_POST[password]' AND kelas='$_POST[kelas]'") or die (mysql_error());
if (mysql_num_rows($check) > 0){
	echo "<script>alert('Maaf Data Sudah Ada!');history.back();</script>";
}
else{
	mysql_query("INSERT INTO students (`matric_no`,`password`,`kelas`) VALUES ('$_POST[matric_no]','$_POST[password]','$_POST[kelas]')") or die(mysql_error());
	echo "<script>alert('Data Pemilih Baru Berhasil Ditambahkan');window.location='databelummemilih.php'</script>";
}
?>