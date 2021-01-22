<?php
error_reporting(0);
ob_start();
session_start();
if (!isset($_SESSION['id_siswa'])){
	header("location:index.php");
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

    <title>E-VOTING</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
           <div class="navbar-header page-scroll">
            <img src="img/YPM.png" alt="" width="80" height="80">
             <img src="img/osis.png" alt="" width="80" height="80">
            </div>
            <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="intro-text">E-VOTING</a> <br> <a class="navbar-brand">SMK YPM 3 TAMAN </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    
                    <li class="page-scroll">
                        <a href="#about">PILIH</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">VISI& MISI</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#text-center">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <section class="success" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-13 text-center">
            <h4>&nbsp;</h4>
            <h4>Calon ketua osis</h4>
            <p>            
            <form method="post" action="pro_voting.php">
              <table align="center" cellpadding="10" cellspacing="0" style="border-collapse:collapse">
                <tr>
                  <?php
require ('config/dbcon.php');
					$query1 = mysql_query("SELECT * FROM thn_ajaran  where status='aktif'");
					$result1 = mysql_fetch_array($query1);
					$thn_ajaran = $result1['thn_ajaran'];
					 $query = "SELECT * FROM contestant where thn_ajaran ='$thn_ajaran'";
 					 $sql = mysql_query ($query);
  
  
  echo "<table border='0' width=100% cellpadding='3' cellspacing='2'>";
	echo "<tr><td class='header' colspan='3' align='center' height='35'></td></tr>";
	echo "<tr>";
	$i = 1;
	while ($hasil 	= mysql_fetch_array ($sql)) {
		$photo		= $hasil['photo'];
		$nama		= $hasil['name'];
		$id_kandidat		= $hasil['id_kandidat'];
	//tampilkan barang
		echo "<td><table border='0' align='center' width='100%'><tr>
		<tr><td align='center' width=10%> $nama</td></tr>
		<tr><div id='gallery' class='zoom'><td align='center' rowspan='0' width='130'><a href='proses_voting.php?id_kandidat=$id_kandidat'><img class='img-circle' src='passport/$photo'  width='160' height='160' title='$nama'></a></td>
		</tr>
		<tr></tr>
		<tr>
		<td></td>
		<tr><td td align='center'>
		<div class='col-lg-6 col-lg-offset-3'>
      <div align='center'>
	  <a href='#portfolio' title='Lihat Visi & Misi'><br>
	    <span 'button type='submit' class='btn btn-primary'>Detail</button></span>
	  </a>
	  </div></td></tr>
		
	
		
	  
      <br>
      </div>
		
		</tr>
		<tr></tr>
		
		
		
		
		
		
		</table></td>";
		if($i % 3 == 0){  
                echo '</tr><tr>';  
            }  
            $i++;  
			}
	echo "</tr></table><br/>";
	?>
                </tr>
              </table>
            </form>
            <span class="h3">Pilih dengan Meng Klik Foto Calon Ketua Osis</span>
            <hr class="star-light">
          <span class="skills">Pemilihan Ketua Osis SMK YPM 3 TAMAN</span></div>
        </div>
        <div class="row">
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
        </div>
      </div>
    </section>
    <!-- Portfolio Grid Section -->
<section id="portfolio"><div class="container">
            <div class="row">
              <h4>Detail Calon ketua osis</h4>
<p><form method="post" action="proses_voting.php">
<table align="center" cellpadding="10" cellspacing="0" style="border-collapse:collapse">
<tr>

<table class="table table-bordered table-hover"id="daftar" border='1' style="border-collapse:collapse" cellpadding='1' cellspacing='2' align='left' width='85%'>
<tr>
<td width="8%" align="center" valign="middle">Foto</td>
<td width="10%" align="center" valign="middle">Nama</td>
<td width="5%" align="center" valign="middle">Kelas</td>
<td width="20%" align="center" valign="middle">Visi</td>
<td width="20%" align="center" valign="middle">Misi</td>


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
	
	
	
			echo '<tr class="center">';
									echo '<td><div align="center"><img class="img-circle" src="passport/'.$isi['photo'].'" width="80" height="80" /></div></td>';
									echo '<td valign="top">'.$isi['name'].'</td>';
									echo '<td valign="top"><div align="center">'.$isi['nickname'].'</div></td>';
							
									echo '<td valign="top"><div align="left">'.$isi['visi'].'</div></td>';
									echo '<td valign="top"><div align="left">'.$isi['misi'].'</div></td>';
									
	}
?>
	</td>
 
  
</table>


</form></p></div>
            <div class="row"></div>
        </div></section>

    <!-- tentang -->
    
  <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>smk ypm 3 taman</h3>
                        <p>Jl. raya Ngelom No.86 Sepanjang, Taman, Kota Sidoarjo<br>
Telp/Fax : <a href="javascript:void(0)" data-number="+62711811824" data-pstn-out-call-url="" title="Telepon telepon via Hangouts" jsaction="r.oVdbr2mIpA8" data-rtid="i8F4nE2VphFU" jsl="$t t-6xg4lalHw8M;$x 0;" data-ved="0ahUKEwi9-7WwtqjVAhWKjJQKHU2xBUoQkAgIogEoADAU">(0711) 811824</a></p>
                  </div>
                    <div class="footer-col col-md-4">
                        <h3>SHARE</h3>
                        <ul class="list-inline">
                          <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About e-voting</h3>
                        <p>E-voting adalah aplikasi untuk membatu dalam pemilihan Ketua Osis<a href="http://startbootstrap.com"></a>.</p>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">Copyright © SMK YPM 3 Taman Sidoarjo| Create by Mohammad Choiruddin 2019 </div>
              </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cabin.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/cake.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/circus.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/game.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/safe.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Project Title</h2>
                            <hr class="star-primary">
                            <img src="img/portfolio/submarine.png" class="img-responsive img-centered" alt="">
                            <p>Use this area of the page to describe your project. The icon above is part of a free icon set by <a href="https://sellfy.com/p/8Q9P/jV3VZ/">Flat Icons</a>. On their website, you can download their free set with 16 icons, or you can purchase the entire set with 146 icons for only $12!</p>
                            <ul class="list-inline item-details">
                                <li>Client:
                                    <strong><a href="http://startbootstrap.com">Start Bootstrap</a>
                                    </strong>
                                </li>
                                <li>Date:
                                    <strong><a href="http://startbootstrap.com">April 2014</a>
                                    </strong>
                                </li>
                                <li>Service:
                                    <strong><a href="http://startbootstrap.com">Web Development</a>
                                    </strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>

</body>

</html>
