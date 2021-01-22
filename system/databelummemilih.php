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

    <title>Admin E-VOTING</title>

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
                <a class="navbar-brand" href="home.php">E-VOTING</a>
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
                            <a href="form_data_admin.php"><i class="fa fa-fw fa-gear"></i> Settings</a>
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
                        <a href="reset_hasil.php"><i class="fa fa-fw fa-dashboard"></i> Reset</a>
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
                            Data Siswa Belum Memilih
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="home.php">Home</a>
                            </li>
                        
                        </ol>
                      <p>
<a href="inputpemilih.php"> <button type="submit" class="btn btn-primary">Tambah</button></a>
<a href="deletealldata.php"> <button type="submit" class="btn btn-primary">Hapus Semua</button></a>
<table class="table table-bordered table-hover"id="daftar" border='1' style="border-collapse:collapse" cellpadding='1' cellspacing='2' align='left' width='85%'>
<tr>
<td width="9%" align="left" valign="middle">No</td>
<td width="15%" align="left" valign="middle">NIS</td>
<td width="28%" align="left" valign="middle">Nama</td>
<td width="16%" align="left" valign="middle">Kelas</td>
<td width="15%" align="left" valign="middle">Aksi</td>
</tr>
<?php
include "config/dbcon.php";
$tampilkan_isi  = "SELECT * FROM students where status='0' ";
$tampilkan_isi_sql  = mysql_query($tampilkan_isi);
$result= mysql_query($tampilkan_isi )or die(mysql_error());
$count=mysql_num_rows($result);
$i = 1;
if($count>=1){
while($r  = mysql_fetch_array($tampilkan_isi_sql)){		
	echo '<tr class="center">';
	echo "<td>".$i."</td>";
	echo '<td valign="top">'.$r['matric_no'].'</td>';
	echo '<td valign="top">'.$r['password'].'</td>';
	echo '<td valign="top">'.$r['kelas'].'</td>';
	echo '<td <valign="top"><a href="form_edit_pemilih.php?id='.$r['id_siswa'].'"><button type="submit" class="btn btn-primary">Edit</button></a> | <a href="proses_delete_pemilih.php?id_siswa='.$r['id_siswa'].'"><button type="submit" class="btn btn-primary">Hapus</button></a> </td>';
	echo '</tr>';
$i ++;
}

}

?>
	</td>
	</tr>
</table></p>
                    <p>Copyright &copy; SMK YPM 3 Taman Sidoarjo| Create by Mohammad Choiruddin 2019</p>
                  </div>
                </div>
                <!-- /.row -->

                <div class="row"></div>
                <!-- /.row -->

              <div class="row"></div>
                <!-- /.row -->

          <div class="row"></div>
                <!-- /.row -->

  <div class="row"></div>
                <!-- /.row -->

<div class="row"></div>
                <!-- /.row -->

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

</body>

</html>
