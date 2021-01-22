<?php ob_start();
session_start();
if (!isset($_SESSION['admin'])){
	header("location:../index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SMK Karya Bhakti Brebes</title>
<link rel="shortcut icon " href="../image/logo-admin.png" type="image/x-icon" />
<link href="../yusufishola.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
<!--
body {
	background-color: #BFF9CB;
}
-->
</style>
</head>

<body><table width="1000" border="1" align="center" cellspacing="0">
  <tr>
    <td height="176" background="../image/baner.jpg">&nbsp;</td>
  </tr>
  <tr>
    <td height="39" bgcolor="#CCCCCC"><?php include 'toplinks.php';?></td>
  </tr>
  <tr>
    <td height="178" bgcolor="#990000"><table width="743" align="center" cellpadding="5" cellspacing="0" bgcolor="#CCCCCC">
      <tr>
        <td align="center" class="td">&nbsp;</td>
        </tr>
      <tr>
        <td height="49" align="center" class="td">
          <?php 
$file_name = mktime();
require('upload_file.php');
upload_file('../passport', $file_name);
$name = $_POST['name'];
$post =$_POST['post'];
$photo = $file_name;
$nickname = $_POST['nickname'];
$kelas = $_POST['kelas'];
$ttl = $_POST['ttl'];
$visi = $_POST['visi'];
$misi = $_POST['misi'];
$cont_id = $_POST['cont_id'];
require ("../connectme.php");
$add = mysql_query("UPDATE contestant SET name = '$name', post= '$post', nickname = '$nickname', kelas = '$kelas', ttl = '$ttl', visi = '$visi', misi = '$misi', photo = '$photo' WHERE cont_id = '$cont_id'") or die(mysql_error());
	echo "Data Calon Ketua PGRI Berhasil diRubah,Klik <a href='list_contestant.php'>DISINI</a> Untuk Mengedit yang Lain";
?></td>
        </tr>
    </table>
</td>
  </tr>
  <tr>
    <td bgcolor="#000000">&nbsp;</td>
  </tr>
</table>
</body>
</html>