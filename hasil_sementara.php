
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>
    <script src="../js/jquery.min.js" type="text/javascript"></script>
<script src="../js/highcharts.js" type="text/javascript"></script>
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
                <a class="navbar-brand" href="../index.php">E-PILKETOS</a>
            </div>
            <!-- Top Menu Items -->
          
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Grafik Hasil Sementara<small></small>
                        </h1>
                        <ol class="breadcrumb">
                          <li></li>
                            <li class="active">
                          <i class="fa fa-file"></i></li>
                        </ol>
                        <td width="79%" align="left" valign="top" bgcolor="#F1F1F1" id="body_form"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
              <tr>                </tr>
              <tr>                </tr>
              <tr>                </tr>
              <tr>                </tr>
              </table>
              
<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column'
         },   
         title: {
            text: 'Grafik Pemilihan Ketua OSIS'
         },
         xAxis: {
            categories: ['Kandidat']
         },
         yAxis: {
			max: 100,
            title: {
               text: 'Persentase suara'
            }
         },
              series:             
            [
            <?php 
        	
            $total = mysql_num_rows(mysql_query("SELECT id_pemilihan FROM data_pemilihan"));
            $query = mysql_query("SELECT name, id_kandidat FROM contestant");
			$jml_kandidat = mysql_num_rows($query);
            while( $r = mysql_fetch_array( $query ) ){
                 $jumlah = mysql_num_rows(mysql_query("SELECT id_pemilihan FROM data_pemilihan WHERE id_kandidat='$r[id_kandidat]'"));
				 $jumlah = substr((($jumlah * 100) / $total), 0, 5);
                  ?>
                  {
                      name: '<?php echo $r['name']; ?>',
                      data: [<?php echo $jumlah; ?>]
                  },
                  <?php } ?>
            ]
      });
   });	
</script>
<div id="container"></div>
              </p>
<p>&nbsp;</p>
              <p>&nbsp;</p></td>
                      <p>&nbsp;</p>
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
