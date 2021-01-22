<?php
error_reporting(0);
ob_start();
session_start();
if (!isset($_SESSION['admin'])){
	header("location:../index.php");
}

require ("config/dbcon.php");
if (isset($_POST['simpan'])){
	$tgl = $_POST['thn'].$_POST['bln'].$_POST['tgl'];
	mysql_query("UPDATE batas_waktu SET tgl='$tgl' WHERE batas='1'");
	
	echo "<script>alert('Batas waktu pemilihan berhasil disimpan');window.location='setting_bataswaktu.php'</script>";
}

$bw = mysql_fetch_array(mysql_query("SELECT tgl FROM batas_waktu WHERE batas='1'"));
$bw = substr($bw['tgl'], 6, 2)."-".substr($bw['tgl'], 4, 2)."-".substr($bw['tgl'], 0, 4);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:ice="http://ns.adobe.com/incontextediting"><head>
<meta name="description" content="penerimaan mahasiswa baru">
<meta name="keywords" content="penerimaan mahasiswa baru">
<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
<meta http-equiv="PRAGMA" content="NO-CACHE">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ADMINISTRATOR</title>
<link rel="shortcut icon" href="../images/logo-admin.png" type="image/x-icon" />
<script type="text/javascript" src="../js/jquery.js"></script>
<link href="../style.css" rel="stylesheet" type="text/css" />
 
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script type="text/javascript">
  if (navigator.cookieEnabled == 0) {
  alert("You need to enable cookies for this site to load properly!");
}
$(document).ready(function() {
   
    $('a[href=#top]').click(function(){
        $('html, body').animate({scrollTop:0}, 'slow');
        return false;
    });

});

$(function() {
	$('#loading').ajaxStart(function(){
		$(this).fadeIn();
	}).ajaxStop(function(){
		$(this).fadeOut();
	});

	$('#leftPan ul li a').click(function() {
		var url = $(this).attr('href');
		$('#ambil').load(url);
		return false;
	});
});
</script>
<!--[if lte IE 8]>
    <script type="text/javascript" src="jquery/ie_rounded.js"></script>
<![endif]-->
<style type="text/css">
<!--
body {
	background-image: url();
	background-repeat: repeat;
	background-color: #003;
}
-->
</style>
<link href="../js/index.css" rel="stylesheet" type="text/css" />
<link href="../js/jquery.css" rel="stylesheet" type="text/css" />
<link href="../css/css.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<link href="../SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	font-size: 16px;
	color: #000;
}
.style1 {font-size: 12px}
.style2 {
	font-size: 12;
	color: #000;
}
.style3 {
	color: #CCFF00;
	font-weight: bold;
}
.style7 {color: #FFFFFF}
.style8 {font-size: 12px; color: #000000; }
.style9 {
	font-size: 14px;
	color: #000000;
}
.style4 {color: #FFFFFF;
	font-family: "Times New Roman", Times, serif;
}
.style41 {color: #000;
	font-family: "Times New Roman", Times, serif;
}
-->
</style></head>
<div id="loading" style="display:none"><img src="../images/loading.gif" /><br />Sedang Loading...!!! Silahkan Tunggu.</div>
<body style="background:url(../images/blue.jpg) repeat
 scroll center top rgb(233, 233, 231);">
<div id="paper_plane"></div>
<div id="wrapper">
<div id="header">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="42%" align="left" valign="middle" bgcolor="#FFFFFF"><br />        
      <img src="../images/hjkk.png" width="400" height="100" /><br /></td>
      <td width="58%" align="right" valign="middle" bgcolor="#FFFFFF"><br />
        <table width="90%" border="0" cellspacing="1" cellpadding="1">
        <tr>
          <td align="center" valign="middle" id="putih_strong_mini"><div align="right" class="style1">Welcome </div></td>
          <td align="center" valign="middle" id="putih_strong_mini">&nbsp;</td>
        </tr>
        <tr>
          
        <td width="90%" align="center" valign="middle"><div align="right"><span class="style2"><span class="style3"></span><br />
                Anda login sebagai : <strong><?php echo "Admin" ?></span> </div></td>
          <td width="10%" align="center" valign="middle" bgcolor="#FFFFFF"></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top" bgcolor="#000000">&nbsp;</td>
  </tr>
</table>

<div id="splash_tour">
  <div id="button_join_tour">
    <table width="100%" border="0" style="border-collapse:collapse" bordercolor="#C5D03C" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><table width="100%" border="1" style="border-collapse:collapse" bordercolor="f4f4f4" cellspacing="0" cellpadding="3">
          <tr>
            <td width="79%" align="left" valign="top" bgcolor="#F1F1F1" id="body_form"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>                </tr>
              <tr>                </tr>
              <tr>                </tr>
              <tr>                </tr>
              </table>
              <p></p>
              <p></p>
              <p></p>
              <p></p>
              <p>
<div style="background:#999999;padding:10px;" class="style2 style9" align="center">
  <h3>Setting Batas Waktu Pemilihan</h3></div>
<br /><br />

<form method="post">
<table align="center">
	<tr>
		<td>Tanggal</td>
		<td>
			<select name="tgl">
				<?php for ($tgl=1;$tgl<=31;$tgl++){	?>
				<option value="<?php echo sprintf('%02d', $tgl); ?>"><?php echo sprintf('%02d', $tgl); ?></option>
				<?php } ?>
			</select>
		</td>
		<td>
			<select name="bln">
				<?php for ($bln=1;$bln<=12;$bln++){	?>
				<option value="<?php echo sprintf('%02d', $bln); ?>"><?php echo sprintf('%02d', $bln); ?></option>
				<?php } ?>
			</select>
		</td>
		<td>
			<select name="thn">
				<?php for ($thn=2015;$thn<=2030;$thn++){	?>
				<option value="<?php echo $thn; ?>"><?php echo $thn; ?></option>
				<?php } ?>
			</select>
		</td>
		<td>
			<input type="submit" name="simpan" value="simpan" />
		</td>
	</tr>
	<tr><td>&nbsp;</td></tr>
	
	<tr><td colspan="5" align="center">Batas Waktu : <?php echo $bw; ?></td></tr>
</table>
</form>
              </p>
<p>&nbsp;</p>
              <p>&nbsp;</p></td>
            <td width="21%" align="right" valign="top" bgcolor="#E7EAF0" id="body_form"><table width="100%" border="0" cellspacing="0" cellpadding="2">
              <tr>
                <td height="27" align="center" valign="middle" bgcolor="#999999" id="tabel_head">MENU</td>
              </tr>
              <tr>
                <td align="right" valign="top"><ul id="MenuBar1" class="MenuBarVertical">
                  <?php include "menu.php"; ?>
                </ul></td>
</tr>
              <tr>
                <td align="right" valign="top" bgcolor="#E7EAF0">&nbsp;</td>
              </tr>
              <tr>
               
              </tr>
			  <tr>
                <td align="right" valign="top" bgcolor="#E7EAF0">&nbsp;</td>
              </tr>
              <tr>
                <td height="29" align="center" valign="middle" bgcolor="#999999" id="tabel_head">INFO PEMILIHAN </td>
              </tr>
              <tr>
                <td align="right" valign="top">
				<ul id="MenuBar2" class="MenuBarVertical">
                  <?php include "menu2.php"; ?>
                </ul></td>
              </tr>
              <tr>
                <td align="right" valign="top"><p>&nbsp;</p></td>
              </tr>
              <tr> </tr>
            </table>
              <table width="100%" border="0" cellspacing="0" cellpadding="2">
              <tr>                </tr>
            </table></td>
            </tr>
        </table></td>
      </tr>
    </table>
   
  </div>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#006699">
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
      <tr bgcolor="#2693FF">
        <td width="4%" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="21%" align="left" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="4%" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="24%" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="11%" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
        <td width="34%" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="3">
          <tr>
            <td colspan="2" align="left" valign="middle" id="biru_bold">Alamat</td>
          </tr>
          <tr>
            <td width="5%" align="left" valign="top"><img src="contact.png" alt="d" width="50" height="50" /></td>
            <td width="95%" align="left" valign="top" id="footer_putih"><span class="style41">PGRI Pengurus Kab, Tegal, Alamat: Jalan Dr. Soetomo , Slawi</span></td>
          </tr>
        </table></td>
        <td width="2%" valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
      <tr bgcolor="#2693FF">
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
        <td bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
</table>
<div id="footer">Copyright : Aditya Agung Wibowo &copy; 2016 All Rights Reserved<br />
</div>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar2 = new Spry.Widget.MenuBar("MenuBar2", {imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>