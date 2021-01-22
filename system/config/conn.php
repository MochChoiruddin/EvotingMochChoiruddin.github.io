<html>
<head>
</head>
<body>
<?
ini_set('display_errors',FALSE);
$host="localhost";
$user="root";
$pass="";
$db="db_pilketos";


$koneksi=mysql_connect($host,$user,$pass);
mysql_select_db($db,$koneksi);
$waktu=date("Y-m-d H:i:s");

if ($koneksi)
{
	//echo "berhasil";
}else{
	?><script language="javascript">alert("Gagal Koneksi Database MySql !!")</script><?
}

?>

</body>
</html>
