<?php
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");

require('upload_file.php');
upload_file('../passport', $_POST['nickname']);

require ("config/dbcon.php");
$check = mysql_query("SELECT * FROM contestant WHERE name='$_POST[name]' AND nickname='$_POST[nickname]'") or die (mysql_error());
if (mysql_num_rows($check) > 0){
	echo "<script>alert('Data Calon Sudah Ada!');history.back();</script>";
}
else{
$add = mysql_query("INSERT INTO contestant (`name`,`nickname`,`kelas`,`ttl`,`visi`,`misi`,`thn_ajaran`,`photo`) VALUES('$_POST[name]', '$_POST[nickname]', '$_POST[kelas]', '$_POST[ttl]', '$_POST[visi]', '$_POST[misi]', '$_POST[thn_ajaran]', '$newfile_name')") or die(mysql_error());
	echo "<script>alert('Calon Ketua OSIS Berhasil diTambahkan');window.location='inputcalon.php'</script>";
}
?>