<?php
include"config/dbcon.php";
$id=$_POST['id_siswa'];
$matric_no=$_POST['matric_no'];
$password=$_POST['password'];
$kelas=$_POST['kelas'];
$thn_ajaran=$_POST['thn_ajaran'];
$status=$_POST['status'];



$query="update students SET matric_no='$matric_no', password='$password', kelas='$kelas', thn_ajaran='$thn_ajaran', status='0' where id_siswa='$id'";

//$query="UPDATE mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',alamat='$alamat' where id_mahasiswa='$id_mahasiswa'";

//$query=mysql_query("update students set status=0 where id_siswa=$id");
//$hapus=mysql_query("delete from data_pemilihan where id_siswa='$id'");
if($query)
{echo "<script>alert('Data Pemilih  Berhasil dihapus');window.location='datatelahmemilih.php'</script>";}
else
{echo "<script>alert('Gagal dihapus');window.location='datatelahmemilih.php'</script>";}
?>