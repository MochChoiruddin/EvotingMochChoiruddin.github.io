<?php
//panggil file config.php untuk menghubung ke server
include('config/dbcon.php');

//tangkap data dari form
$thnajaran = $_POST['thn_ajaran'];


$cek=mysql_query("SELECT * FROM thn_ajaran") or die ("Database invalid");
$ketemu=mysql_num_rows($cek);
$r=mysql_fetch_array($cek);
if ($ketemu > 0){
$query = mysql_query("update thn_ajaran set thn_ajaran ='$thnajaran' where status='aktif'") or die(mysql_error());

if ($query) {
    ?>
	<script>
	alert ("SETUP TAHUN AJARAN BERHASIL");
	top.location="home.php";
	</script>
	<?php  } }
	else {
	
//simpan data ke database
$query = mysql_query("insert into thn_ajaran values('', '$thnajaran ', 'aktif')") or die(mysql_error());

if ($query) {
    ?>
	<script>
	alert ("SETUP TAHUN AJARAN BERHASIL");
	top.location="home.php";
	</script>
	<?php }
}

?>