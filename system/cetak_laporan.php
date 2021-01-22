<?php
error_reporting(0);
ob_start();
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

    <title>E-PILKETOS</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

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
                <a class="navbar-brand" href="home.php">E-PILKETOS</a>
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
                            Daftar Calon Ketua Osis
                        </h1>
                      
   
                      </p><table class="table table-bordered table-hover"id="daftar" border='1' style="border-collapse:collapse" cellpadding='1' cellspacing='2' align='left' width='85%'>
<tr>
<td width="8%" align="center" valign="middle">Foto</td>
<td width="10%" align="center" valign="middle">Nama</td>
<td width="5%" align="center" valign="middle">Kelas</td>
<td width="20%" align="center" valign="middle">Visi</td>
<td width="20%" align="center" valign="middle">Misi</td>
<td width="3%" align="center" valign="middle">Perolehan</td>

</tr>
<?php
include "config/dbcon.php";
$tampilkan_isi  = "select  * from contestant";
$tampilkan_isi_sql  = mysql_query($tampilkan_isi);
while  ($isi  = mysql_fetch_array($tampilkan_isi_sql))
	{
	
	$name=$isi['name'];
	$nickname=$isi['nickname'];
	$ttl=$isi['ttl'];
	$visi=$isi['visi'];
	$misi=$isi['misi'];
	$jumlah_suara=$isi['jumlah_suara'];
	
	
	
			echo '<tr class="center">';
									echo '<td><div align="center"><img src="../passport/'.$isi['photo'].'" width="80" /></div></td>';
									echo '<td valign="top">'.$isi['name'].'</td>';
									echo '<td valign="top"><div align="center">'.$isi['nickname'].'</div></td>';
									
									echo '<td valign="top"><div align="left">'.$isi['visi'].'</div></td>';
									echo '<td valign="top"><div align="left">'.$isi['misi'].'</div></td>';
					
									echo '<td valign="top"><div align="center">'.$isi['jumlah_suara'].'</div></td>';
									echo '</tr>';
	}
?>
	</td>
  </tr>
  
</table></p>
                  </div>
                  <p><span class="col-lg-12">Copyright &copy; SMA Negeri 1 Taman Sidoarjo| Create by Mohammad Choiruddin 2018</span></p>
                  <ol class="breadcrumb">
                    <li> <i class="fa fa-dashboard"></i></li>
                  </ol>
                </div>
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

</body>

</html>
