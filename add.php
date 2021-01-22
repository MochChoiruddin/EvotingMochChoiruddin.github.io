<?php
session_start();
require ('config/dbcon.php');

if (isset($_POST['kirim']) && isset($_POST['cont_id'])){
	
	$cek = mysql_num_rows(mysql_query("SELECT id FROM students WHERE id='$_SESSION[id]' AND status='0'"));
	$cek = mysql_num_rows(mysql_query("SELECT cont_id FROM contestant WHERE cont_id='$_SESSION[cont_id]' AND jumlah_suara='0'"));
	$waktu = date("Y-m-d h:i:s");
	
	if ($cek > 0){
		
		mysql_query("INSERT INTO data_pemilihan(id_siswa, id_kandidat, waktu) VALUES('$_SESSION[id]', '$_POST[cont_id]', '$waktu')");
		
		mysql_query("UPDATE students SET status='1' WHERE id='$_SESSION[id]'");
		mysql_query("UPDATE contestant SET jumlah_suara='1' WHERE cont_id='$_SESSION[cont_id]'");
		
		
		
		echo "<script>alert('Terima kasih sudah memilih ketua OSIS');window.location='index.php';</script>";
		
	} else {
		
		echo "<script>alert('Maaf, Anda sudah memilih ketua OSIS');window.location='index.php';</script>";
		
	}
	
} else {
		
	echo "<script>alert('Maaf, Anda belum memilih ketua OSIS');history.back();</script>";
	
}

?>
