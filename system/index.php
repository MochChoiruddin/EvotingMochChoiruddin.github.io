<?php
error_reporting(0);
ob_start();
session_start();
if (!isset($_SESSION['admin'])){
	header("location:../index.php");
}
require_once('config/dbcon.php');
?>

<h1>Object not found!</h1>
<p>The requested URL was not found on this server. If you entered the URL manually please check your spelling and try again.</p>
<p>If you think this is a server error, please contact the <a href="mailto:postmaster@localhost">webmaster</a>.</p>
<h2>Error 404</h2>
<address>
<a href="http://localhost/">localhost</a><br>
Apache/2.4.7 (Win32) OpenSSL/1.0.1e PHP/5.5.9
</address>


