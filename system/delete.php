<?php
$kandidat = $_REQUEST['id_kandidat'];
require_once ("config/dbcon.php");
mysql_query("DELETE FROM contestant WHERE id_kandidat = '$kandidat'") or die (mysql_error());
mysql_query("DELETE FROM data_pemilihan WHERE id_kandidat = '$kandidat'") or die (mysql_error());
unlink("../passport/$_GET[foto]");
echo "<script>alert('Calon Ketua OSIS Berhasil dihapus');window.location='daftarcalon.php'</script>";
?>