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
                            Input Data Pemilih
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="home.php">Home</a>
                            </li>
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            <div class="row"></div>
                <!-- /.row -->

            <div class="row"></div>
            <!-- /.row -->

                <div class="row">
                  <div class="col-lg-6">
                  <form name="form1" action="add_voters_process.php" method="post" onsubmit="return validasi_input(this)">
<script language="javascript">
function validAngka(a)
{
  if (!/^[0-9.]+$/.test(a.value))
  {
  a.value =
  a.value.substring(0,a.value.length-1000);
  }
 }
 </script>
 
 <script language="javascript">
function validHuruf(a)
{
  if (!/^[a-z.]/.test(a.value))
  {
  a.value =
  a.value.substring(0,a.value.length-1000);
  }
 }
 </script>
                    <table class="table table-bordered table-hover" width="250" border="0" align="center" cellpadding="5" cellspacing="0">
                      <tr>
                        <td width="100" align="center" class="td"><div align="left" class="style1">NIS</div></td>
                        <td width="240" align="center" class="td"><label>
                          <div align="left">
                            <input type="text" name="matric_no" id="matric_no" onkeyup="validAngka(this)" required />
                          </div>
                          </label></td>
                      </tr>
                      <tr>
                        <td align="center" class="td"><div align="left" class="style1">Nama</div></td>
                        <td align="center" class="td"><label>
                          <div align="left">
                            <input name="password" type="text" id="password" maxlength="20"  required />
                          </div>
                          </label></td>
                      </tr>
                        <td align="center" class="td"><div align="left" class="style1">Kelas</div></td>
                        <td align="center" class="td"><label>
                          <div align="left">
                            <input name="kelas" type="text" id="password" maxlength="20"  required />
                          </div>
                          </label></td>
                      </tr>
                      
                      <tr>
                        <td colspan="2" align="center" class="td"><label>
                          <input type="submit" class="btn btn-primary" name="button" id="button" value="Add" />
                        </label></td>
                      </tr>
                    </table>
                    <p>&nbsp;</p>
                        <p>Tambahkan Data Pemilih dengan masukan Nis dan Nama Sebagai Password.</p>
                  </div>
            </div>
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
