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
                            Seting Tahun Ajaran
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="home.php">Home</a>
                            </li>
                            <li class="active">
                            <i class="fa fa-wrench"></i></li>
                        </ol>
                      <p><table class="table table-bordered table-hover" id="daftar" border='1' style="border-collapse:collapse" cellpadding='2' cellspacing='2' align='center' width='100%'>

  <tr>
    <td height="21"><div align="center"><span class="style1">SETING TAHUN AJARAN</span></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="79" valign="top"><form id="form1" name="form1" method="post" action="setup-thn.php">
      <table width="100%" border="0">
        <tr>
          <td width="5%" height="26">&nbsp;</td>
          <td width="26%">Tahun Ajaran</td>
          <td width="1%">:</td>
          <td width="48%"><label>
            <select name="thn_ajaran" id="thn_ajaran">
              <option value="2017/2018">2017/2018</option>
              <option value="2018/2019">2018/2019</option>
              <option value="2019/2020">2019/2020</option>
			  <option value="2019/2020">2020/2021</option>
			  <option value="2019/2020">2021/2022</option>
            </select>
          </label></td>
          <td width="20%">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><label>
            <input type="submit" class="btn btn-primary" name="button" id="button" value="Submit" />
          </label></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
        </form>
    </td>
  </tr>



</table></p>
Copyright &copy; SMK YPM 3 Taman Sidoarjo| Create by Mohammad Choiruddin 2018</div>
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
