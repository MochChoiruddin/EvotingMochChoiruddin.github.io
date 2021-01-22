<?php ob_start();
session_start();
if (!isset($_SESSION['admin'])){
	header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-voting</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">E-voting</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="profil.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="home.php"><i class="fa fa-fw fa-dashboard"></i> Home</a>
                    </li>
                    <li>
                        <a href="inputcalon.php"><i class="fa fa-fw fa-bar-chart-o"></i> Input Calon Ketua</a>
                    </li>
                    <li>
                        <a href="inputpemilih.php"><i class="fa fa-fw fa-table"></i> Input Pemilih</a>
                    </li>
                    <li>
                        <a href="daftarcalon.php"><i class="fa fa-fw fa-edit"></i> Daftar Calon Ketua</a>
                    </li>
                    <li>
                        <a href="datatelahmemilih.php"><i class="fa fa-fw fa-desktop"></i> Data Telah Memilih</a>
                    </li>
                    <li>
                        <a href="databelummemilih.php"><i class="fa fa-fw fa-wrench"></i>Data Belum Memilih</a>
                    </li>
                   
                    <li>
                        <a href="grafik.php"><i class="fa fa-fw fa-file"></i> Grafik Hasil Sementara</a>
                    </li>
                    <li>
                        <a href="laporan.php"><i class="fa fa-fw fa-dashboard"></i> Laporan</a>
                    </li>
                    
                    <li>
                        <a href="setingtahun.php"><i class="fa fa-fw fa-dashboard"></i> Seting Tahun</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

      <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                  <div class="col-lg-12">
                        <h1 class="page-header">
                            Input Data Calon Ketua
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="home.php">Home</a>
                            </li>
                        </ol>
                    <p>  <table width="100%" border="1" style="border-collapse:collapse" bordercolor="f4f4f4" cellspacing="0" cellpadding="3">
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
		    <tr bgcolor="#FFFFFF">
    <td height="178" bgcolor="#FFFFFF"><p>&nbsp;</p>
	<?php
	include "config/dbcon.php";
	$id_kandidat=$_GET['id_kandidat'];
	$result = mysql_query("SELECT * FROM contestant where id_kandidat='$id_kandidat'");
		while($isi = mysql_fetch_array($result))
			{
				$name=$isi['name'];
				$nickname=$isi['nickname'];
				$kelas=$isi['kelas'];
				$ttl=$isi['ttl'];
				$visi=$isi['visi'];
				$misi=$isi['misi'];
				
			}
?>
<form action="proses_edit_contestant.php" method="post">
<table class="table table-bordered table-hover"id="daftar" border='1' style="border-collapse:collapse" cellpadding='1' cellspacing='2' align='left' width='85%'>
	<input type="hidden" name="id_kandidat" value="<?php echo $id_kandidat=$_GET['id_kandidat'] ?>">
	<tr>
	<td>Nama</td>
	<td>:</td>
	<td><input type="text" name="name" value="<?php echo $name ?>" class="ed"></td>
	
	</tr>
	<tr>
	<td>Kelas</td>
	<td>:</td>
	<td><input type="text" name="nickname" value="<?php echo $nickname ?>" class="ed"></td>

	</tr>
	<tr>
	<td>TTL</td>
	<td>:</td>
	<td><input type="text" name="ttl" value="<?php echo $ttl ?>" class="ed"></td>

	</tr>
	<tr>
	<td>Visi</td>
	<td>:</td>
	<td><input type="text" name="visi" value="<?php echo $visi ?>" class="ed"></td>

	</tr>
	
	<tr>
	<td>Misi</td>
	<td>:</td>
	<td><input type="text" name="misi" value="<?php echo $misi ?>" class="ed"></td>

	</tr>
	<tr>
	<td></td>
	<td></td>
	<td><input type="submit" value="Edit" id="button1"></td>

	
	</tr>
	
	</table>
</form>
</td>
  </tr>
  
</table>                      
</p>
                    <ol class="breadcrumb">
                          <li class="active">Copyright &copy; SMK YPM 3 Taman Sidoarjo| Create by Mohammad Choiruddin 2019</li>
                        </ol>
                  </div>
                </div>
                <!-- /.row -->

                <!-- Flot Charts -->
                <div class="row"></div>
            <!-- /.row -->

<div class="row"></div>
                <!-- /.row -->

              <div class="row"></div>
                <!-- /.row -->

                <div class="row"></div>
                <!-- /.row -->

                <!-- Morris Charts -->
              <div class="row"></div>
                <!-- /.row -->

                <div class="row"></div>
                <!-- /.row -->

              <div class="row"></div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

    <!-- Flot Charts JavaScript -->
    <!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/flot-data.js"></script>

</body>

</html>
