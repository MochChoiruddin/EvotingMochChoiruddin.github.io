<? session_start();


		include "config/dbcon.php";
		
		//kumpulan data
		$id_siswa=$_SESSION['id_siswa'];
		$pilihan=$_GET['id_kandidat'];
		$waktu = date("Y-m-d h:i:s");
		
		//cek siswa
		$ceking=mysql_query("select * from data_pemilihan where id_siswa='$id_siswa'");
		$cek=mysql_num_rows($ceking);
		
		//artinya siswa belum pernah pilih sebelumnya
		if(empty($cek)){
		
			switch($pilihan)
			{
			case "1";
				$query=mysql_query("update contestant set jumlah_suara=jumlah_suara+1 where id_kandidat='1'");
				$insert=mysql_query("insert into data_pemilihan values('','$id_siswa','$waktu','$pilihan')");
				unset($_SESSION['id_siswa']);
				 header('location: selesai_pilih.php');
			break;
			
			
			case "2";
				$query=mysql_query("update contestant set jumlah_suara=jumlah_suara+1 where id_kandidat='2'");
				$insert=mysql_query("insert into data_pemilihan values('','$id_siswa','$waktu','$pilihan')");
				unset($_SESSION['id_siswa']);
				 header('location: selesai_pilih.php');
			break;
			
			case "3";
				$query=mysql_query("update contestant set jumlah_suara=jumlah_suara+1 where id_kandidat='3'");
				$insert=mysql_query("insert into data_pemilihan values('','$id_siswa','$waktu','$pilihan')");
				unset($_SESSION['id_siswa']);
				 header('location: selesai_pilih.php');
			break;
			
			case "4";
				$query=mysql_query("update contestant set jumlah_suara=jumlah_suara+1 where id_kandidat='4'");
				$insert=mysql_query("insert into data_pemilihan values('','$id_siswa','$waktu','$pilihan')");
				unset($_SESSION['id_siswa']);
				 header('location: selesai_pilih.php');
			break;
			
			
			default;
				echo "<center><h2><font color=red>Invalid Parameter!</font></h2></center>";
			}
		}else{
			echo "<center><h2<font color=red>Anda sudah memilih sebelumnya!</font></h2></center>";
			echo "<center><a href=index.php><b>Logout</b></a></center>";
		}	
		
	
?>
