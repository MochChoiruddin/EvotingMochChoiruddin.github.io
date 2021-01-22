<?php 
session_start();
require ("config/dbcon.php");
 // username and password sent from form
$matric_no=$_POST['matric_no'];
$password=$_POST['password'];
$result=mysql_query("SELECT * FROM students WHERE matric_no ='$matric_no' and password='$password'") or die (mysql_error());
// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
// set session variable
	while($row=mysql_fetch_array($result)){  
		$_SESSION['id_siswa']= $row['id_siswa']; 
		$_SESSION['matric_no']= $row['matric_no']; 
		
		// track the log in time of the user
		$date = date ('d/m/y h:i:s');
		$track = mysql_query("INSERT INTO log_details (`userid` ,`date`,`log`) 
		VALUES ('$_SESSION[id]','$date','1')") or die(mysql_error());
	}
	
	echo "<script>alert('Anda berhasil login');window.location='voting.php';</script>";
}
else {
	
}
?>
<script language="javascript">alert('NIS atau Password Salah');
history.back();
</script>
