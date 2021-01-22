<?php
session_start();
include "config/dbcon.php";
		
		//kumpulan data
		$id=$_SESSION['status'];
		$id_siswa=$_SESSION['id_siswa'];
		$pilihan=$_GET['id_kandidat'];
		$waktu = date("Y-m-d h:i:s");
		$query1 = mysql_query("SELECT * FROM thn_ajaran  where status='aktif'");
		$result1 = mysql_fetch_array($query1);
		$thn_ajaran = $result1['thn_ajaran'];
		//cek siswa
		
		$ceking=mysql_query("select * from data_pemilihan where id_siswa='$id_siswa' and thn_ajaran='$thn_ajaran'");
		
		
		//$ceking=mysql_query("SELECT id_siswa FROM students WHERE id_siswa='$_SESSION[id_siswa]' AND status='0'");
		$cek=mysql_num_rows($ceking);
		//$cek1=mysql_num_rows($ceking1);
		//artinya siswa belum pernah pilih sebelumnya
		if($cek > 0){
					//echo "Anda memilih Ahmad Fajar Maulana";
				echo "<script>alert('Anda Sudah Memilih Sebelumnya...!');window.location='index.php'</script>";
					
			}
			else
			{
			$query=mysql_query("update contestant set jumlah_suara=jumlah_suara+1 where id_kandidat=$pilihan");
				$insert=mysql_query("insert into data_pemilihan values('','$id_siswa','$pilihan','$waktu','$thn_ajaran')");
				$query=mysql_query("update students set status=1 where id_siswa=$id_siswa");
				echo "<script>alert('Terimakasih, Semoga Pilihanmu Tepat');window.location='selesai_pilih.php'</script>";
				unset($_SESSION['id_siswa']);
				 header('location:selesai_pilih.php');
				
			
		}	
		
	
?>
