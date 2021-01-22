<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SMK KARYA BHAKTI BREBES</title>
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
    <td height="186" background="../image/baner.jpg">&nbsp;</td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td height="178" bgcolor="#990000"><table align="center">
    <tr><td><?php
require ("../connectme.php");
$output = array('Pass' => 0, 'Fail' => 0);
ini_set('auto_detect_line_endings',1);	
$handle = @fopen($_FILES['file']['tmp_name'], "r");
if ($handle == ""){
	echo "Empty Details Click <a href='javascript:history.go(-1)'>here</a> to go back...";
}
else{
	$ext=end(explode(".", $_FILES["file"]["name"]));
	if ($ext == 'csv') {
		while (($data = fgetcsv($handle, 1000, ',')) !== FALSE) {	
			$val1 = mysql_real_escape_string($data[0]);	
			$val2 = mysql_real_escape_string($data[1]);
			// check if the result has not been previously added
			$check = @mysql_query("SELECT * FROM students WHERE matric_no = '$val1' AND password = '$val2'") or die (mysql_error());
			
			//if the result has npt been added it adds it
			if (!mysql_fetch_array($check)) {		
				$sql= @mysql_query("INSERT INTO result(`id`,`matric_no`,`password`) VALUES('','$val1','$val2')")or die (@mysql_error());
				$output[$sql]++;	
			}
		}
		
		echo "Voters Details Uploaded Successfully Click <a href='main.php'>here</a> to go back...";
	}
	else{
		echo "Wrong File type Click <a href='javascript:history.go(-1)'>here</a> to go back...";
	}
}	
?></td></tr></table></td>
  </tr>
  <tr>
    <td bgcolor="#000000">&nbsp;</td>
  </tr>
</table>
</body>
</html>