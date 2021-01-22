<?php
include('config/dbcon.php');
$user=$_POST['username'];
$pass=$_POST['password'];

$login=mysql_query("SELECT * FROM password WHERE username='$user' AND password='$pass'");
$ada=mysql_num_rows($login);
$data=mysql_fetch_array($login);

if ($ada> 0){
// jika Username dan password ada didalam database daftarkan session
session_start();
$_SESSION['user']  = $data["username"];
$_SESSION['password']  = $data["password"];
$_SESSION['id']   = $data["username"];
$_SESSION['admin']   = $data["username"];
header("location:system/home.php");
//print "<br><br><center><h2><b>Login Berhasil</b></h2><br>";

// segera redirect ke halaman admin
//header("location:admin/index.php");
}
else{
print "<script>alert('Maaf, Username dan Password anda tidak sesuai! silahkan login kembali !!');
javascript:history.go(-1);</script>";
} 
?>